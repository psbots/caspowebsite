//Disable Scrolling 


var hheightGlobal = $('#scene2').height();
function endPhoneAnimationPosition() {

var hheight = $('#scene2').height();
	
	//console.log(hheight);

	var hdiff = hheight/650 * hheight/630 + 5 * hheight/650 ; 


	console.log("hdiff ",hdiff);

	if(hheight < 650)
		$('#start_cover_phone').css({
		    "transform":"translate(0%, 5%) scale(0.08) rotate(90deg)",
			
		});


	else

		$('#start_cover_phone').css({
		    "transform":"translate(0%, " + hdiff+"%) scale(0.08) rotate(90deg)",
			
		}); 


}


function startSceneAnimations() {

	var hheight1 = $('#scene2').height();

	var lastPosition = -100;

$('#start-stove-img').css({
	    "transform":"translateY(0%)"
	  	}); 



if(hheight1 < 850)
	$('#headline-texts').css({
		    "transform":"translateY(-1250%)",
		    "opacity" : 1
		  	}); 


else if(hheight1 <750)

		$('#headline-texts').css({
		    "transform":"translateY(-900%)",
		    "opacity" : 1
		  	}); 

else
	$('#headline-texts').css({
	    "transform":"translateY(-1450%)",
	    "opacity" : 1
	  	}); 

$('body').css('overflow', 'scroll');




$(function(){
	
	var $window = $(window);		//Window object
	
	var scrollTime = 0.4;			//Scroll time
	var scrollDistance = 325;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll
	
	$window.on("mousewheel DOMMouseScroll", function(event){
		
		event.preventDefault();	
										
		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		var scrollTop = $window.scrollTop();
		var finalScroll = scrollTop - parseInt(delta*scrollDistance);
			
		TweenMax.to($window, scrollTime, {
			scrollTo : { y: finalScroll, autoKill:true },
				ease: Power1.easeOut,	//For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
				autoKill: true,
				overwrite: 5							
			});
		
		
		
		
		console.log($(window).scrollTop())
	//When Browser reaches Top
	if($(window).scrollTop()==0) {
		
		downKeyFlag = 0;

		hheightGlobal = $('#scene2').height();

		$('#start-stove-img').css({
	    "transform":"translateY(100%)"
	  	}); 
		
		console.log("hgl",hheightGlobal);
		
		if(hheightGlobal < 600)
		{


			$('#start_cover_phone').css({
		    "transform":"translate(-25%, 0%) scale(1.2) rotate(0deg)"
		  	});

		}

		else {

			$('#start_cover_phone').css({
		    "transform":"translate(0%, 0%) scale(1.2) rotate(0deg)"
		  	});

		}


		$(".start-text").fadeIn("slow");
		
	}
	
	else {
		
		$(".start-text").fadeOut("fast");
		
		$('#start-stove-img').css({
	    "transform":"translateY(0%)"
	  	}); 
		
		endPhoneAnimationPosition();
		
		
	}
		
		
		
		
	});
	
	
	
	
});

//$("html").niceScroll();
//Jquery Animations
}

/*
$(window).load(function(){





});

*/

 $(window).load(function(){




 
	$(".loader").fadeOut("fast");

		$('.img-slider').bxSlider({
			  	auto: true,
				hideControlOnEnd: true,
				controls : false
	});
 
	$('body').addClass("fully-loaded")

 	$('#scene2').waypoint({
  handler: function(direction) {
   
	   $('#s2SideText').css({
		    "transform":"translate(0%,0%)",
		    "opacity" : 1
		  	}); 
	},

	offset: '18%'


});

 	var downKeyFlag = 0;

 	$(document).keydown(function(e){
    if (e.keyCode == 40 && downKeyFlag == 0) { 

    	downKeyFlag = 1;
       $(this).scrollTop(100);
		//alert("css animations")
		$(".start-text").fadeOut("fast");
		
		
	 	  $('#start_cover_phone').css({
	    "transform":"translate(0%, 0%) scale(0.08) rotate(90deg)"
	  	}).delay(2000).queue(function (next) { 
  			  //add the function
  			  endPhoneAnimationPosition();
		
  		startSceneAnimations();

  		
    });

	  }
});



	 $("html, body").one('mousewheel DOMMouseScroll scroll',function(event){
	 	//window.scrollTo(0,0);
		$(this).scrollTop(100);
		//alert("css animations")
		$(".start-text").fadeOut("fast");
		
		
	 	  $('#start_cover_phone').css({
	    "transform":"translate(0%, 0%) scale(0.08) rotate(90deg)"
	  	}).delay(2000).queue(function (next) { 
  			 

  			 endPhoneAnimationPosition(); 

		
  		startSceneAnimations();
  			  
    //next(); 
  });

	  //	startSceneAnimations();
	});
	
	


	

});




 //Waypoints Setup

