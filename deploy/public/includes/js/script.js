/*

Author: John Lund, Creative Director of {gunt} London.

{gunt}...digital topiary.

*/

var GUNT = GUNT || {};


/*
  GUNT Core
  */

  GUNT.core = (function () {


    function init() {

    //GUNT.startupRoutine.init();

    GUNT.waypoints.init();

    GUNT.goatse.init();

    GUNT.initLinks.init();

    GUNT.gmap.init();

    GUNT.parallax.init();

    GUNT.gunts.init();

    GUNT.caseStudies.init();
  }

  return {
    init : init
  };


})();



/*
  Startup routine
  */

  GUNT.startupRoutine = (function () {


    var settings = {
      delay: 0,
      messages: [
      '0% : - initialisation started',
      '10% :: - enabling core',
      '20% :: - sequential algorithms loading',
      '30% ::: - primary systems verified',
      '40% :::: - ignition locked',
      '50% ::::: - phase shift adjustments calibrated',
      '60% :::::: - booting to first tier',
      '70% ::::::: - base established, loading secondary functions',
      '80% :::::::: - tertiary presentation fields normalised',
      '90% ::::::::: - preliminary system overrides disabled',
      '100% ::::::::: - gunt activation complete',
      '********************************\n    welcome to... the future    \n********************************'
      ]
    };


    function init() {

      var s = settings;

      for (var i = 0; i < s.messages.length; i++) {

        outputSystemMessage(s.messages[i]);

      }

    }


    function outputSystemMessage( msg ) {

      var s = settings;

      s.delay += (Math.floor(Math.random()*11) * 100);

      setTimeout(function () {

        console.log(msg);

      }, s.delay);

    }


    return {
      init : init
    };


  })();


GUNT.waypoints = (function(){


  var settings = {};

  function init () {

    $('.section').waypoint({
      offset: '30%'
    });
    $('body').delegate('.section', 'waypoint.reached', function(event, direction) {

      var
        target = $(event.target).attr("id"),
        $active = $( "#primary-nav a[href=#" + target + "]" ).parent();
      if ( direction === "up" ) {
        $active = $active.prev();
      }

      if ( target == "approach" ) GUNT.goatse.animate();

      $("#primary-nav li.selected").removeClass("selected");
      $active.addClass("selected");

    });

  }

  return {
    init : init
  };

})();

/*
  init goatse graphic
 */
GUNT.goatse = (function(){

  var
    settings = {},
    goatse = null,

    brand, deploy,
    fingerLeft1, fingerLeft2, fingerLeft3,
    fingerRight1, fingerRight2, fingerRight3,

    strings = [
      "Innovation",
      "Digital\nStrategy",
      "Social\nAmplification",
      "Future",
      "Conceptual\nCreativity",
      "Technology\nExpertise"
    ],

    initPositions = [
      { x : 400, y : 120 },
      { x : 350, y : 210 },
      { x : 400, y : 300 },
      { x : 580, y : 120 },
      { x : 630, y : 210 },
      { x : 580, y : 300 }
    ],

    finalPositions = [
      { x : 370, y : 80 },
      { x : 300, y : 210 },
      { x : 370, y : 340 },
      { x : 610, y : 80 },
      { x : 680, y : 210 },
      { x : 610, y : 340 }
    ];

  function init () {
    createGoatse();
  }

  function createGoatse() {

    var
      width = 980,
      height = 500,
      offset = 40;

    goatse = Raphael("goatse", width, height);

    brand = goatse.set();
    deploy = goatse.set();
    fingerLeft1 = goatse.set();
    fingerLeft2 = goatse.set();
    fingerLeft3 = goatse.set();
    fingerRight1 = goatse.set();
    fingerRight2 = goatse.set();
    fingerRight3 = goatse.set();

    // Deploy
    var
      deployPath,
      deployText;

    deployPath = goatse.path("M100,0L100,50 50,100 0,50 0,0C0,0 50,15 100,0");
    deployPath.attr({
      "fill" : "#FF979C",
      "stroke-width" : "0",
      "stroke-opacity" : "0",
      "transform" : "t440,300"
    });

    deployText = goatse.text(50, 35, "Deploy");
    deployText.attr({
      "fill": "#000",
      "font-family" : "Georgia",
      "font-size" : "18",
      "font-style" : "italic",
      "transform" : "t440,300"
    });

    deploy.push(
      deployPath, deployText
    );

    // Brand
    var
      brandCircle,
      brandText;

    brandCircle = goatse.circle(width*0.5, height*0.5 - offset, 110);
    brandCircle.attr({
      "fill" : "#FF979C",
      "stroke-width" : "0",
      "stroke-opacity" : "0"
    });

    brandText = goatse.text(width*0.5, height*0.5 - offset, "Your Brand");
    brandText.attr({
      "fill": "#72EA91",
      "font-family" : "Georgia",
      "font-size" : "25",
      "font-style" : "italic"
    });

    brand.push(
      brandCircle, brandText
    );

    // Fingers
    createFinger( 0, fingerLeft1 );
    createFinger( 1, fingerLeft2 );
    createFinger( 2, fingerLeft3 );
    createFinger( 3, fingerRight1 );
    createFinger( 4, fingerRight2 );
    createFinger( 5, fingerRight3 );

  }

  function createFinger( index, Rset ){

    var
      radius = 60,
      pos = initPositions[index],
      str = strings[index],
      circle = goatse.circle(pos.x, pos.y, radius),
      text = goatse.text(pos.x, pos.y, str);

    text.attr({
      "fill": "#72EA91",
      "font-family" : "Georgia",
      "font-size" : (index == 2 ? "14" : "16"),
      "font-style" : "italic"
    });
    circle.attr({
      "fill" : "#000",
      "stroke" : "#fff",
      "stroke-width" : "5",
      "opacity" : 0.5
    });
    Rset.push( circle, text );
  }

  function animateGoatse () {

    deploy.animate({
      "transform" : "t440,370"
    }, 400, ">");

    brand.animate({
      "r" : 160,
      "font-size" : 24
    }, 400, ">");

    animateFinger( 0, fingerLeft1 );
    animateFinger( 1, fingerLeft2 );
    animateFinger( 2, fingerLeft3 );
    animateFinger( 3, fingerRight1 );
    animateFinger( 4, fingerRight2 );
    animateFinger( 5, fingerRight3 );

  }

  function animateFinger ( index, Rset ) {

    Rset.animate({
      "x" : finalPositions[index].x,
      "y" : finalPositions[index].y,
      "cx" : finalPositions[index].x,
      "cy" : finalPositions[index].y
    }, 400, ">");

  }

  return {
    init : init,
    animate : animateGoatse
  };

})();


/*
  misc actions on links
  */
  GUNT.initLinks = (function(){

    var settings = {
      smooth : '#primary-nav a',
      externalLinks : 'a[rel=external]'
    };

    function init() {

      var s = settings;

      $(s.smooth).smoothScroll();

      $(s.externalLinks).click(function(e){
        e.preventDefault();
        window.open($(this).attr("href"), "_blank");
      });

    }

    return {
      init : init
    };

  })();


/*
  The gunts section
  */
  GUNT.gunts = (function(){

    var settings = {};

    function bonus() {
      setInterval(function () {
        var value;

        $('.gunts li .photo').each(function(index){
          var that = this;

          value = $(that).css('background-position-y') == '100%' ? '0%' : '100%' ;

          setTimeout(function(){
              $(that).css('background-position-y', value);
          }, Math.random() * 200);
        });
      }, 150);
    }

    function init() {

      var s = settings;

      // highlight and de-emphasise on mouseover
      $('.gunts li .photo').on({
        mouseenter: function(){
          $(this).next().removeClass("hidden");
          $('.photo').addClass('de-emphasise');
          $(this).removeClass('de-emphasise');

          // radomly select which fact to show
          $facts = $(this).parent().find('dl');
          $facts.addClass('hidden');
          var index = Math.floor(Math.random() * $facts.length);
          //console.log('index ' + index);
          $facts.eq(index).removeClass('hidden');
        },
        mouseleave: function(){
          $(this).next().addClass("hidden");
          $('.photo').removeClass('de-emphasise');
        }
      });

      // enter the password to activate bonus mode
      var
        kkeys = [],
        password = "71,85,78,84,83"; //this spells gunts

          $(window).on('keydown', function(e){
            kkeys.push( e.keyCode );
                if ( kkeys.toString().indexOf( password ) >= 0 ) {
                    location.href = "#gunts";
                    bonus();
                }
            });

      }

    return {
      init : init,
      bonus: bonus
    };

  })();


/*
  The projects section
  */
  GUNT.caseStudies = (function(){

    var settings = {};

    function init() {

      var s = settings;

      // slideshow for the case studies section
      $('.slideshow').addClass('slideshow-enabled').flexslider({
        animation: "fade",  // or 'slide'
        controlNav: false,
        slideshow: true, // <-- auto play
        controlsContainer: ".slideshow",
        prevText: "&lt; Previous project",
        nextText: "Next project &gt;",
        start: function(slider) {
          // fixes all slides being visible at start
          $('.slides li').not(':first').css('display', 'none');
        }
      });

    }

    return {
      init : init
    };

  })();

/*
  Parallax
  */

  GUNT.parallax = (function () {


    var settings = {
    header: '',     // header DOM element
    headerHeight: 335 // original header height
  };


  function init() {

    var s = settings;

    s.header = $('header');
    s.headerHeight = s.header.height();

    // avoid fat header if page loads in scrolled state
    calculate();

    // update on scroll
    $(window).scroll( function(){
      calculate();
    });

  }

  function calculate() {
    var s = settings;

    //var height = $(document).height();
    var scrollTop = $(window).scrollTop();

    //resize header
    if (scrollTop <= 0) {
      //reset - fixes quick drag to top
      s.header.css({'height': s.headerHeight});
      s.header.find('h1').css({'height': s.headerHeight});
      s.header.find('h1').css({'top': '2px'});
    }
    else if ((scrollTop < s.headerHeight) && (scrollTop < 250)) {
      s.header.height(s.headerHeight - scrollTop);

      s.header.find('h1').css({
        'top': '-' + ((scrollTop / 2) - 15) + 'px',
        'height': s.headerHeight - (( scrollTop / 2) + 18)
      });
    }
    else {
      s.header.css({
        'height': '50px'
      });

      s.header.find('h1').css({
        'top': '-109px',
        'height': '174px'
      });

    }
  }


  return {
    init : init
  };


})();



/*
  Google Maps
  */

  GUNT.gmap = (function () {


    var settings = {

    };


    function init() {

      var s = settings;

      var script = document.createElement("script");
      script.type = "text/javascript";
      script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=GUNT.gmap.loadMap";
      document.body.appendChild(script);

    }


    function loadMap() {

      var s = settings;

      s.zoom = 14;
      s.maxZoom = 14;
      s.lng = -0.081;
      s.lat = 51.5277;
      s.zoomControl = false;
      s.scaleControl = false;
      s.scrollwheel = false;
      s.disableDoubleClickZoom = true;
      s.center = new google.maps.LatLng(s.lat, s.lng);
      s.mapTypeId = google.maps.MapTypeId.ROADMAP;
      s.streetViewControl = false;
      s.overviewMapControl = false;
      s.mapTypeControl = false;
      s.styles = [
      {
        featureType: "all",
        stylers: [
        { saturation: -95 }
        ]
      }
      ];

      var map = new google.maps.Map(document.getElementById("gmap"), s);

        // setup custom marker image
        var image = new google.maps.MarkerImage('includes/img/map-marker.png',
            new google.maps.Size(181, 180), // image size
            new google.maps.Point(0,0), // image origin
            new google.maps.Point(90, 90) // image anchor
            );

        // add the marker
        marker = new google.maps.Marker({
          position: s.center,
          map: map,
          title: "Gunt London headquarters",
          icon: image
        });

    }


    return {
      init : init,
      loadMap: loadMap
    };


})();




$(document).ready(function () {

  GUNT.core.init();

});
