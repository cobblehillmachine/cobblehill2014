$(document).ready(function() {
	fadeNavitems();
	$('#nav .close').click(function() {
		$('#nav').animate({'top':-380 +'px'}, 500, 'swing');
		$('#nav ul li').hide();
	});
	$('.page-header a').addClass('button white');
	colorTransition();
	setInputFieldFunctions();


});

$(window).resize(function() {


});


function setInputFieldFunctions(){
	$('input, textarea').each(function(){
	    var $this = $(this);
	    $this.data('placeholder', $this.attr('placeholder'))
	         .focus(function(){$this.removeAttr('placeholder');})
	         .blur(function(){$this.attr('placeholder', $this.data('placeholder'));});
	});
}

function centerItem(item,iWidth,iHeight){  
   windowWidth = $(window).width();
   windowHeight = $(window).height();
   var w = windowWidth - iWidth; 
   var h = windowHeight - iHeight;
   $(item).css({
       'left': w/2,
       'top':h/2
   });   
}

$(window).scroll(function() {
	if ($(window).width() > 999) {
 		var sT = $(this).scrollTop();
        if (sT >= 80) {
            $('#header').addClass('scrolled');
			$('#header .black').hide();
			$('#header .white').show();
        }else {
            $('#header').removeClass('scrolled');
			$('#header .black').show();
			$('#header .white').hide();
        }
	}
});

function fadeNavitems() {
   // Hide the elements initially
   var lis = $('#nav ul li').hide();
         
   // When some anchor tag is clicked. (Being super generic here)      
   $('.hamburger').click(function() {
	$('#nav').animate({'top':0 +'px'}, 500, 'swing');
      var i = 0;
     
	setTimeout(function() {
		(function displayImages() {
	         lis.eq(i++).fadeIn(400, displayImages);
	      })();
	}, 500);  
  

   }); 
}

function colorTransition() {
	originalColor = $('#footer .contact a').css('color');
	originalBg = $('#footer .social-icon').css('background-color'); 
	originalBorder = $('.button').css('border-color');
	originalBtnBg = $('.button').css('background-color'); 
	originalBtnColor = $('.button').css('color');
	$('#footer .contact a').hover(function() { 
		var colors = ["#ee3823","#fdb818","#2ba0a3"];  
		var rand = Math.floor(Math.random()*colors.length);
		$(this).animate({'color': colors[rand]}, 1000);
	},function() {
		$(this).animate({'color': originalColor},500);
	});
	$('#footer .social-icon').hover(function() { 
		var colors = ["#ee3823","#fdb818","#2ba0a3"];  
		var rand = Math.floor(Math.random()*colors.length);
		$(this).animate({'background-color': colors[rand]}, 1000);
	},function() {
		$(this).animate({'background-color': originalBg},500);
	});
	$('#footer .signup-cont #mc-embedded-subscribe').hover(function() { 
		var colors = ["#ee3823","#fdb818","#2ba0a3"];  
		var rand = Math.floor(Math.random()*colors.length);
		$('#footer .signup-cont .arrow').animate({'background-color': colors[rand]}, 1000);
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
	
}

function scrollToHome() {
	$('body').scrollTo($('#section1'), 1000 );
}
