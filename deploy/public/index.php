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
            <p>Gunt create bleeding edge campaigns for the post digital age. </p>
            <p>We are a passionate collective of creatives, designers and strategists, who live for crafting great advertising for brilliant brands. </p>
            <p>Gunt are so future it hurts. If you're a brand looking to engage consumers in an innovative, edgy way then Gunt is for you.</p>
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
                <p>With many successful creative campaigns under his belt, Pete was hired at Gunt to really push the boundaries of where Digital meets Physical.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Both of them</dd>
                </dl>
                <dl>
                  <dt>Favourite API</dt>
                  <dd>Api Days</dd>
                </dl>
                <dl>
                  <dt>Favourite Queen</dt>
                  <dd>Pete Graham on a Saturday Night</dd>
                </dl>
                <dl>
                  <dt>Favourite Hex value</dt>
                  <dd>#Classified</dd>
                </dl>
                <dl>
                  <dt>Favourite Social network</dt>
                  <dd>Friends Reunited</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-jb">
              <div class="photo"></div>
              <div class="info hidden">
                <h3>James</h3>
                <h4>Account Director</h4>
                <p>James has been fortunate to have worked at many of the top studios round the country. Using his top-notch people skills, he's always knows how to rub people up... the right way!</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Daighi, slow cooked dry meat</dd>
                </dl>
                <dl>
                  <dt>Favourite API</dt>
                  <dd>LinkedIn</dd>
                </dl>
                <dl>
                  <dt>Favourite Queen</dt>
                  <dd>Queen of Hoxton</dd>
                </dl>
                <dl>
                  <dt>Favourite Hex value</dt>
                  <dd>#333</dd>
                </dl>
                <dl>
                  <dt>Favourite Social network</dt>
                  <dd>LinkedIn</dd>
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
                </dl>
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
                <p>Michael really loves bikes. His aim is to one day sit on the board of D&amp;AD executives.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Daighi, slow cooked dry meat</dd>
                <dl>
                  <dt>Favourite API</dt>
                  <dd>Instagram</dd>
                </dl>
                <dl>
                  <dt>Favourite Queen</dt>
                  <dd>Brian May</dd>
                </dl>
                <dl>
                  <dt>Favourite Hex value</dt>
                  <dd>#X0X0X0</dd>
                </dl>
                <dl>
                  <dt>Favourite Social network</dt>
                  <dd>MySpace</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-ml">
              <div class="photo"></div>
              <div class="info hidden">
                <h3>Marie</h3>
                <h4>Strategy Director</h4>
                <p>Marie is one of France's top strategic brains. She's always tugging at the strings of digital integration. This allows for some of the best thinking for the best brands.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Chilli paneer tikka</dd>
                </dl>
                <dl>
                  <dt>Favourite API</dt>
                  <dd>Facebook</dd>
                </dl>
                <dl>
                  <dt>Favourite Queen</dt>
                  <dd>Freddie Mercury</dd>
                </dl>
                <dl>
                  <dt>Favourite Hex value</dt>
                  <dd>#FF00FF</dd>
                </dl>
                <dl>
                  <dt>Favourite Social network</dt>
                  <dd>The Pub</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-cl">
              <div class="photo"></div>
              <div class="info hidden">
                <h3>Caz</h3>
                <h4>Innovations and Digital Accelerations Director</h4>
                <p>Caz was born into a computer science family. She was one of the first people in the world to test the Beta service that we now call the "Internet". Using this in-depth knowledge, she's always finding new and innovating ways to lever digital into our analogue world.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Chilli paneer tikka</dd>
                </dl>
                <dl>
                  <dt>Favourite API</dt>
                  <dd>Flickr</dd>
                </dl>
                <dl>
                  <dt>Favourite Queen</dt>
                  <dd>Hera</dd>
                </dl>
                <dl>
                  <dt>Favourite Hex value</dt>
                  <dd>#E45A96</dd>
                </dl>
                <dl>
                  <dt>Favourite Social network</dt>
                  <dd>Twitter</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-jl">
              <div class="photo"></div>
              <div class="info hidden alt-position">
                <h3>Big John</h3>
                <h4>Creative Director</h4>
                <p>From a copywriter background at some of the UKs best red top papers, John is always pushing the written word into new places. John's current ethos is heavily based around trying to re-invent the common day pun.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Daighi, slow cooked dry meat</dd>
                </dl>
                <dl>
                  <dt>Favourite API</dt>
                  <dd>LastFM</dd>
                </dl>
                <dl>
                  <dt>Favourite Queen</dt>
                  <dd>Steve Mc</dd>
                </dl>
                <dl>
                  <dt>Favourite Hex value</dt>
                  <dd>#FFCC00</dd>
                </dl>
                <dl>
                  <dt>Favourite Social network</dt>
                  <dd>I don't like people</dd>
                </dl>
              </div>
            </li>
            <li id="gunts-np">
              <div class="photo"></div>
              <div class="info hidden alt-position">
                <h3>Nico</h3>
                <h4>Creative Director</h4>
                <p>Originally from the deep south of France, Nico brings a completely different approach to the creative process. Turning it inside out over and over again.</p>
                <dl>
                  <dt>Favourite Needoo's dish</dt>
                  <dd>Mixed Grill</dd>
                </dl>
                <dl>
                  <dt>Favourite API</dt>
                  <dd>Twitter</dd>
                </dl>
                <dl>
                  <dt>Favourite Queen</dt>
                  <dd>Justin Bieber</dd>
                </dl>
                <dl>
                  <dt>Favourite Hex value</dt>
                  <dd>#000</dd>
                </dl>
                <dl>
                  <dt>Favourite Social network</dt>
                  <dd>Daily Burn</dd>
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
