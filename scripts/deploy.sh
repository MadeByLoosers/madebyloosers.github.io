#!/bin/bash
cd /var/www/html/git_guntlondon.com/
git pull
rsync -av --exclude '.git*' /var/www/html/git_guntlondon.com/deploy/ /var/www/html/staging.guntlondon.com