#!/bin/bash

set -e


if [[ -z "$1" ]]
then
	clear
	echo -e "\n---- TeamGB deploy script ----\n"
	echo "Usage: deploy.sh [target site]"
	echo "Select a target:"
	select deploy_title in "qa" "staging" "production"
	do
		break
	done
else
	deploy_title="$1"
fi

function deploy(){

    site='teamgb'
    backupDir='/var/www/html/backups/'$site'/'$1'/files'
    backupDbDir='/var/www/html/backups/'$site'/'$1'/sql/dumps'
    dbName=$site'_'$1
    gitRepoDir='/var/www/html/git_boa/'
    gitRepoDeployDir=$gitRepoDir'deploy/'
    excludeList=$gitRepoDir'scripts/exclude-list.txt'

    if [ $1 == qa ]
    then
        siteDir='/var/www/html/dev-qa.teamgb.com/'

    elif [ $1 = staging ]
    then
        siteDir='/var/www/html/staging.teamgb.com/'

    elif [ $1 = production ]
    then
        siteDir='/var/www/html/www.teamgb.com/'
    
    else	
        # shouldn't ever get here
	    echo -e "\n--- Not a valid branch ---"
        exit 1
    fi

	echo -e "\n--- Deploying to $1 $siteDir from Git Master Branch ---"
    
    echo "Backing up files"
    echo "rsync -a --delete $siteDir $backupDir"
    rsync -a --delete $siteDir $backupDir
    
    echo "Dumping DB"
    cd $siteDir/public
    drush sql-dump --ordered-dump --result-file=$backupDbDir/$dbName-`date +%Y%m%d-%H%M%S`.sql
    cd -
    
    # git pull
    cd $gitRepoDir
    git pull

    # rsync files
    echo "Deploying files"
    #echo "rsync -n -av --exclude-from=\'$excludeList\' --delete $gitRepoDeployDir $siteDir"
    rsync -av --exclude-from=$excludeList --delete $gitRepoDeployDir $siteDir
    
    # cd to site drush cc all
    cd $siteDir/public
    drush cc all
}


if [ $deploy_title ]
then
    deploy $deploy_title
    echo -e "\n---- Deploy complete ----\n"
else
    echo -e "\n---- Not a valid option ----\n"
fi

#TODO: check deploy title is in array


#cd /var/www/html
# backup site here
#rsync -av git_boa/deploy/ boa/
#cd -
