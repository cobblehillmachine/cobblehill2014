$(document).ready(function() {
	fadeNavitems();
	$('#nav .close').click(function() {
		$('#nav').animate({'top':-380 +'px'}, 500, 'swing');
		$('#nav ul li').hide();
	});

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

	// var scrollTop = $(this).scrollTop();
	// var topDistance = $('#header').offset().top;
	// 
	//     if ($('body').scrollTop() > 0){ 
	//         $('#header').removeClass('scrolled');
	//     } else {
	// 		$('#header').addClass('scrolled');
	// 		$('#header .black').hide();
	// 		$('#header .white').show();
	// }

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
