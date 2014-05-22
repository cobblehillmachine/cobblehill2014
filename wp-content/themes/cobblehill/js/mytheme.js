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
	$('#nav .close').click(function() {
		$('#nav').animate({'top':-380 +'px'}, 500, 'swing');
		$('#nav ul li').hide();
	});
	$('.page-header a').addClass('button white');
	colorTransition();
	setInputFieldFunctions();
	$('*').removeAttr( "title" );


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
			$('#header .white').show();
			//$('#cat-cont').css({'position': 'fixed', 'top': 77});
        }else {
            $('#header').removeClass('scrolled');
			$('#header .black').show();
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
		    var i = 0;   
		setTimeout(function() {
		(function displayImages() {
		        lis.eq(i++).fadeIn(200, displayImages);
		     })();
		}, 500); 
	}); 

	$('#cat-cont .cat-sort').click(function() {
		$('#cat-cont .cat-list').slideToggle();
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
	
}

function scrollToHome() {
	$('body').scrollTo($('#section1'), 1000 );
}
