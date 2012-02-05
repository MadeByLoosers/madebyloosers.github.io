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

		GUNT.startupRoutine.init();

		GUNT.gmap.init();

		setTimeout(function () {
			GUNT.parallax.init();
		}, 1000);

	};


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

	};


	function outputSystemMessage( msg ) {

		var s = settings;

		s.delay += (Math.floor(Math.random()*11) * 100);

		setTimeout(function () {
			
			console.log(msg);

		}, s.delay);

	};


	return {
		init : init
	};


})();



/* 
	Parallax
*/

GUNT.parallax = (function () {

	
	var settings = {
		header: '', 		// header DOM element
		headerHeight: 335 	// original header height
	};


	function init() {

		var s = settings;

		s.header = $('header');
		s.headerHeight = s.header.height();

		bind();

	};


	function bind() {
		
		var s = settings;

		$(window).scroll( function () {
			
			//var height = $(document).height();
			var scrollTop = $(window).scrollTop();

			//resize header
			if (scrollTop == 0) {
				//reset - fixes quick drag to top
				s.header.css({'height': s.headerHeight});
				s.header.find('h1').css({'top': '0', 'height': s.headerHeight});

			}
			else if ((scrollTop < s.headerHeight) && (scrollTop < 280)) {
				
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
					'top': '-125px',
					'height': '174px'
				});

			}

		});

	};


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
		script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyD9FCIq1OHIO4tPaV-euoM5W90SL6wb1yA&sensor=false&callback=GUNT.gmap.loadMap";
		document.body.appendChild(script);

	};


	function loadMap() {

		var s = settings;

		s.zoom = 17;
		s.center = new google.maps.LatLng(51.5277, -0.081);
		s.mapTypeId = google.maps.MapTypeId.ROADMAP;

		var map = new google.maps.Map(document.getElementById("gmap"), s);

	};


	return {
		init : init,
		loadMap: loadMap
	};


})();




$(document).ready(function () {
	
	GUNT.core.init();

});
























