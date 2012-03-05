<?php
  
  // set all tag lines
  $tagLines = array(
    "So future it hurts",
    "We did tomorrow yesterday",
    "Taking the internet to the next level",
    "Viva la Gunt!",
    "The start of a revolution",
    "The world is our oyster",
    "Digitally engineering for tomorrow",
    "Reverse engineering the future",
    "Masterizing the tricks",
    "Future web digisavants",
  );
  // select a random tag line
  $tagLine = $tagLines[array_rand($tagLines)];

?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

  <title>Gunt London - <?php echo $tagLine; ?></title>
  <meta name="description" content="">
  <meta name="author" content="Captain Gunt">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="includes/css/style.css">
  <link rel="stylesheet" href="includes/css/flexslider.css" type="text/css">
  <script src="includes/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

  <div id="container">

    <header>

      <h1>Gunt</h1>

      <ul id="primary-nav">
        <li class="selected"><a href="#home">Home</a></li>
        <li><a href="#approach">Approach</a></li>
        <li><a href="#gunts">Gunts</a></li>
        <li><a href="#case-studies">Case Studies</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

    </header>

    <div id="main" role="main">
      <div id="home" class="section clearfix">
        <div class="section-header clearfix">
          <h2><?php echo $tagLine; ?></h2>
          <div class="content">
            <p><strong>{gunt}</strong> create bleeding edge campaigns for the post digital age.</p>
            <p>We are passionate collective of creatives, designers and strategists, who live for crafting great advertising for brilliant brands.</p>
            <p>Gunt are so future it hurts. If you're a brand looking to engage consumers in a innovative edgy way then Gunt is for you.</p>
            <p><strong>{Gunt}</strong> is an independent digital agency established in <strong>{London}</strong> by 6 partners with extensive industry experience, developing creative concepts for national and international brands. We work closely with our clients to deliver compelling, useful and engaging interactive experiences across all digital platforms.</p>
            <p>Aware of the overwhelming amount of information and noise surrounding us, we aim to speak a clean, clear and meaningful message.</p>
            <p>While we set up our portfolio, we want to share our thoughts with you.</p>
          </div>
        </div>

        <div class="section-content feature">
          <img src="includes/img/feature.jpg" alt="" />
        </div>
      </div>

      <div id="approach" class="section clearfix">
        <div class="section-header clearfix">
          <h2>Our Approach</h2>
          <div class="content">
            <p><strong>{Something}</strong> about our approach</p>
            <p>We are passionate collective of creatives, designers and strategists, who live for crafting great advertising for brilliant brands.</p>
            <p>Gunt are so future it hurts. If you're a brand looking to engage consumers in a innovative edgy way then Gunt is for you.</p>
          </div>
        </div>

        <div class="section-content feature goatse">
          <div id="goatse"></div>
        </div>

      </div>
	  
      <div id="gunts" class="section clearfix">
        <div class="section-header clearfix">
          <h2>The Gunts</h2>

          <div class="content">
            <p>Aware of the overwhelming amount of information and noise surrounding us, we aim to speak a clean, clear and meaningful message.</p>
          </div>
        </div>
        
        <div class="section-content">
          <ul class="gunts clearfix">
            <li id="gunts-pg">
              <div class="photo"></div>
              <div class="info hidden">
                <h3>Pete</h3>
                <h4>Creative Director</h4>
                <p>He’s a born leader, ready to guide the {Gunts} far into the future.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Daighi lamb</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-jb">
              <div class="photo"></div>
              <div class="info hidden">
                <h3>James</h3>
                <h4>Account Director</h4>
                <p>He’s a born leader, ready to guide the {Gunts} far into the future.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Daighi lamb</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-pxg">
              <div class="photo"></div>
              <div class="info hidden alt-position">
                <h3>Pete X</h3>
                <h4>Creative Director and Founder</h4>
                <p>Pete's always tweaking ideas until they're perfect. He’s a born leader, ready to guide the Gunts far into the future.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Chana chicken</dd>
                </dl>
                <dl>
                  <dt>Favourite API</dt>
                  <dd>Vimeo</dd>
                </dl>
                <dl>
                  <dt>Favourite Queen</dt>
                  <dd>Boadicea</dd>
                </dd>
                <dl>
                  <dt>Favourite Hex value</dt>
                  <dd>#000</dd>
                </dl>
                <dl>
                  <dt>Favourite Social network</dt>
                  <dd>Pintrest</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-ma">
              <div class="photo"></div>
              <div class="info hidden alt-position">
                <h3>Mike</h3>
                <h4>Creative Director</h4>
                <p>He’s a born leader, ready to guide the {Gunts} far into the future.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Daighi lamb</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-ml">
              <div class="photo"></div>
              <div class="info hidden">
                <h3>Marie</h3>
                <h4>Strategy Director</h4>
                <p>She’s a born leader, ready to guide the {Gunts} far into the future.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Daighi lamb</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-cl">
              <div class="photo"></div>
              <div class="info hidden">
                <h3>Caz</h3>
                <h4>Innovations and Digital Accelerations Director</h4>
                <p>She’s a born leader, ready to guide the {Gunts} far into the future.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Daighi lamb</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-jl">
              <div class="photo"></div>
              <div class="info hidden alt-position">
                <h3>Big John</h3>
                <h4>Creative Director</h4>
                <p>He’s a born leader, ready to guide the {Gunts} far into the future.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Daighi lamb</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-np">
              <div class="photo"></div>
              <div class="info hidden alt-position">
                <h3>Nico</h3>
                <h4>Creative Director</h4>
                <p>Merde</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Daighi lamb</dd>
                </dl>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div id="case-studies" class="section clearfix">
        <div class="section-header clearfix">
          <h2>Case studies</h2>
          <div class="content">
            <p><strong>{gunt}</strong> is an independent digital agency established in <strong>{London}</strong> by 6 partners with extensive industry experience, developing creative concepts for national and international brands. We work closely with our clients to deliver compelling, useful and engaging interactive experiences across all digital platforms.</p>
            <p>Aware of the overwhelming amount of information and noise surrounding us, we aim to speak a clean, clear and meaningful message.</p>
            <p>While we set up our portfolio, we want to share our thoughts with you.</p>
          </div>
        </div>

        <div class="section-content">
          <div class="slideshow">
              <ul class="slides">
                <li class="slideshow-slide">
                  <h3>Hot girls and metal</h3>
                  <p>Our highly focussed market research team discovered an undiscovered niche cross-over market in fans of the heavy metal music genre and indivudals that enjoy attractive women girating rythmatically.
                  <br/>
                  The site received an incredibly popular alpha launch on December 2011, and was herrelded by the new media press as "a great Christmas presents for lovers of innovative API use". This project will be being taken to the next level in 2012.</p>
                  <!--<a href="#">Visit the site</a>-->
                  <img src="includes/img/casestudies-hotgirlsandmetal.jpg" alt="" />
                </li>
              
                <li class="slideshow-slide">
                  <h3>bees wearing hats</h3>
                  <p>Quite simply the internets Bees wearing hats website. There's a real media buzz about it.</p>
                  <img src="includes/img/casestudies-beesinhats.png" alt="" />
                </li>
              
                <li class="slideshow-slide">
                  <h3>Spactacles</h3>
                  <p>Emerging onto the East-London Spackcore scene like warriors from battlesmoke, Spactacles were a shot in the arm to a genre that was dangerously on the verge of self-parody.
                  <br/>  
                  Heralded as pioneers of the phigital musical performance for their innovative mix of digital technology and aggressively physical live show. Gorrilaz later copied this.
                  <br/>
                  Spactacles are currently on indefinite hiatus.</p>
                  <img src="includes/img/casestudies-spac.jpg" alt="" />
                </li>      
              </ul>
            </div>
        </div>
      </div>

      <div id="contact" class="section clearfix">
        <div class="section-header clearfix">
          <h2>Contact us</h2>
          <div class="content">
          <p>
            We’re not in the habit of working with just anyone, and we’re probably not going to work with you either. However if you think your project might just be edgy enough, then let us take it to the next digital level. Drop us an email at <a href="mailto:canyoumakeourlogobigger@guntlondon.co">canyoumakeourlogobigger@guntlondon.com</a>.
          </p>
        </div>
                
        <div class="section-content">
          <div id="gmap"><!-- put static map here --></div>
        </div>

      </div>

    </div>
     
  </div>
</div>

  <footer>
    <div class="footer-container">
      <span class="copyright">&copy; Gunt London 2012</span>
      <ul>
        <li><a rel="external" href="http://www.facebook.com/guntlondon">Facebook</a></li>
        <li><a rel="external" href="http://www.twitter.com/guntlondon">Twitter</a></li>
        <li><a rel="external" href="http://www.pinterest.com/guntlondon">Pinterest</a></li>
        <li><a rel="external" href="http://www.flickr.com/photos/guntlondon">FlickR</a></li>
        <li><a rel="external" href="http://www.linkedin.com/company/2458729">LinkedIn</a></li>
        <li><a rel="external" href="http://www.github.com/guntlondon">Github</a></li>
        <li><a rel="external" href="http://www.lastfm.com/user/guntlondon">LastFM</a></li>
        <li><a rel="external" href="http://www.vimeo.com/guntlondon">Vimeo</a></li>
      </ul>
      <img src="includes/img/hmtl6-logo.png" alt="HMTL6 logo" />
    </div>
  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="includes/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <script defer src="includes/js/plugins.js"></script>
  <script defer src="includes/js/mylibs/raphael.js"></script>
  <script defer src="includes/js/mylibs/jquery.smoothscroll.js"></script>
  <script defer src="includes/js/mylibs/jquery.flexslider.min.js"></script>
  <script defer src="includes/js/mylibs/waypoints.min.js"></script>
  <script defer src="includes/js/script.js"></script>
  <script defer src="https://raw.github.com/gist/901295/bf9a44b636a522e608bba11a91b8298acd081f50/ios-viewport-scaling-bug-fix.js"></script>
  
  <script>
    window._gaq = [['_setAccount','UA-29684348-1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->  
</body>
</html>
