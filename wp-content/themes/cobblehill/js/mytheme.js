$(window).bind('load', function() {
   $('#wrapper').fadeIn('slow');
});

$(window).load(function() {
	$('#project-slider ul.slides img, #story-slider ul.slides img').each(function() {
		$(this).wrapAll('<li></li>');
	});
	if ($(window).width() > 767) {
	  $('#project-slider .flexslider').flexslider({
	    animation: "slide",
		directionNav: false,
		useCSS: false
	  });
	}
	  $('#story-slider .flexslider, #home-slider .flexslider, #testimonial-slider .flexslider').flexslider({
	    animation: "slide",
		directionNav: false,
		touch: true,
		pauseOnAction: true, //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
		pauseOnHover: false, //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
		useCSS: false //{NEW} Boolean: Slider will use CSS3 transitions if available
	  });
});

$(document).ready(function() {
	fadeNavitems();
	$('.page-header a').addClass('button white');
	colorTransition();
	setInputFieldFunctions();
	$('*').removeAttr( "title" );
	$('input[type="checkbox"]').addClass('customCheckbox');
	$('.customCheckbox').iCheck({
	    checkboxClass: 'icheckbox_minimal',
	    radioClass: 'iradio_minimal',
	    increaseArea: '20%' // optional
	});
	loadMap();

});

$(window).resize(function() {
	if ($(window).width() > 767) {
	  $('.flexslider').flexslider({
	    animation: "slide",
		directionNav: false,
		useCSS: false
	  });
	} else {
		//$('.flexslider').stop().flexslider();
		//$('#flexslider').removeClass('flexslider');
	}

});

$(window).scroll(function() {
	if ($(window).width() > 999) {
 		var sT = $(this).scrollTop();
        if (sT >= 10) {
            $('#header').addClass('scrolled');
			$('#header .black').hide();
			$('#header .white').css({'display':'block'});
			//$('#cat-cont').css({'position': 'fixed', 'top': 77});
        }else {
            $('#header').removeClass('scrolled');
			$('#header .black').css({'display':'block'});
			$('#header .white').hide();
			//$('#cat-cont').css({'position': 'relative', 'top': 0});
        }
	}
});


function setInputFieldFunctions(){
	$('input, textarea').each(function(){
	    var $this = $(this);
	    $this.data('placeholder', $this.attr('placeholder'))
	         .focus(function(){$this.removeAttr('placeholder');})
	         .blur(function(){$this.attr('placeholder', $this.data('placeholder'));});
	});
}


function fadeNavitems() {
   var lis = $('#nav ul li').hide();          
	$('.hamburger').click(function() {
		$('#nav').animate({'top':0 +'px'}, 500, 'swing');
		var winH = $(document).height();
		
		    var i = 0;   
		setTimeout(function() {
		(function displayImages() {
		        lis.eq(i++).fadeIn(200, displayImages);
		     })();
		}, 500); 
		if ($(window).width() < 1000) {
			$('#nav').css({'height': winH});
		}
	}); 

	$('#cat-cont .cat-sort').click(function() {
		$('#cat-cont .cat-list').slideToggle();
	});
	$('#nav .close').click(function() {
		$('#nav').animate({'top':-380 +'px'}, 500, 'swing');
		$('#nav ul li').hide();
		$('#nav').css({'height': 'auto'});
	});
}

function colorTransition() {
	originalColor = $('#footer .contact a').css('color');
	originalBg = $('#footer .social-icon').css('background-color'); 
	originalBorder = $('.button').css('border-color');
	originalBtnBg = $('.button').css('background-color'); 
	originalBtnColor = $('.button').css('color');
	$('#footer .contact a, #cat-cont .cat-list li a').hover(function() { 
		var colors = ["#ee3823","#fdb818","#2ba0a3"];  
		var rand = Math.floor(Math.random()*colors.length);
		$(this).animate({'color': colors[rand]}, 500);
	},function() {
		$(this).animate({'color': originalColor},500);
	});
	$('.social-icon').hover(function() { 
		var colors = ["#ee3823","#fdb818","#2ba0a3"];  
		var rand = Math.floor(Math.random()*colors.length);
		$(this).animate({'background-color': colors[rand]}, 500);
	},function() {
		$(this).animate({'background-color': originalBg},500);
	});
	$('#footer .signup-cont #mc-embedded-subscribe').hover(function() { 
		var colors = ["#ee3823","#fdb818","#2ba0a3"];  
		var rand = Math.floor(Math.random()*colors.length);
		$('#footer .signup-cont .arrow').animate({'background-color': colors[rand]}, 500);
	},function() {
		$('#footer .signup-cont .arrow').animate({'background-color': originalBg},500);
	});
	$('.button.white').hover(function() { 
		var colors = ["#ee3823","#fdb818","#2ba0a3"];  
		var rand = Math.floor(Math.random()*colors.length);
		$(this).animate({'background-color': colors[rand], 'color': originalBtnColor, 'border-color': colors[rand]}, 500);
	},function() {
		$(this).animate({'background-color': originalBtnBg, 'color': originalBtnColor, 'border-color': '#231f20'},300);
	});
	$('.button.black').hover(function() { 
		var colors = ["#ee3823","#fdb818","#2ba0a3"];  
		var rand = Math.floor(Math.random()*colors.length);
		$(this).animate({'background-color': colors[rand], 'color': '#231f20', 'border-color': colors[rand]}, 500);
	},function() {
		$(this).animate({'background-color': '#231f20', 'color': '#fff', 'border-color': '#fff'},300);
	});
	$('.blog-cont .entry-title a, .blog-cont .entry-meta a, .blog-cont .post-excerpt a').hover(function() { 
		var colors = ["#ee3823","#fdb818","#2ba0a3"];  
		var rand = Math.floor(Math.random()*colors.length);
		$(this).animate({'color': colors[rand]}, 300);
	},function() {
		$(this).animate({'color': '#231F20'},300);
	});
	$('#post-nav .nav-links a').hover(function() { 
		var colors = ["#ee3823","#fdb818","#2ba0a3"];  
		var rand = Math.floor(Math.random()*colors.length);
		$(this).animate({'color': colors[rand]}, 300);
		$(this).children('.mid-cont').children('.arrow').animate({'background-color': colors[rand]});
	},function() {
		$(this).animate({'color': '#231F20'},300);
		$(this).children('.mid-cont').children('.arrow').animate({'background-color': '#231F20'});
	});
	
}

function scrollToHome() {
	$('body').scrollTo($('#section1'), 1000 );
}

function loadMap() {
	google.maps.event.addDomListener(window, 'load', init);
 
     function init() {
		var myLatlng = new google.maps.LatLng(32.787508,-79.929562);
		
         var mapOptions = {
             zoom: 16,
			 scaleControl: false,
			 scrollwheel: false,
			 zoomControl: false,
			 panControl:false,
			 streetViewControl: false,
			 mapTypeControl:false,
             center: myLatlng,
             styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
         };

         var mapElement = document.getElementById('map');
         var map = new google.maps.Map(mapElement, mapOptions);
		var image = new google.maps.MarkerImage('/wp-content/themes/cobblehill/images/map-pin.png');
		var marker = new google.maps.Marker({
		      position: map.getCenter(),
		      map: map,
		      title: 'Hello World!',
			  icon: image
		  });
		var center;
		function calculateCenter() {
		  center = map.getCenter();
		}
		google.maps.event.addDomListener(map, 'idle', function() {
		  calculateCenter();
		});
		google.maps.event.addDomListener(window, 'resize', function() {
		  map.setCenter(center);
		});
     }
    
}

