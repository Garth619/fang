// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'

jQuery(document).ready(function($){
	
		

	
	 /* Modernizr - check if browser supports webp. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
     Modernizr.on('webp', function (result) {
	    
	    $('#section_one img').each(function () {
	    
				if (result) {
    
					if ($(this).attr('data-webp')) {
          
          	var img = $(this).data('webp');
          
						$(this).attr('src', img);
        	
        	}
        	
        }
  
	 			else {
		 			
		 			if ($(this).attr('data-jpg')) {
          
          	var img = $(this).data('jpg');
          
						$(this).attr('src', img);
        	
        	}
    
    		}
  		
  		});
  		
  		
  		// background images (one time load, does not reflect media queries or window width..yet)
  		
  		if (result) {
	  		
	  		var sectionOne = '#section_one';
	  		
	  		if ($(sectionOne).attr('data-webpbg')) {
		  		
		  		var imgBg = $(sectionOne).data('webpbg');
		  		
		  		$(sectionOne).css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
	  		
	  	}
	  	
	  	
	  	else {
		  	
		  	if ($('#section_one').attr('data-jpgbg')) {
		  		
		  		var imgBg = $('#section_one').data('jpgbg');
		  		
		  		$('#section_one').css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
		  	
	  	}
  		
			// console.log(result);
	
		});


		 /* Nav
     --------------------------------------------------------------------------------------- */
     
     
     
     	
     	var windowWidth = $(window).width();
     
     
     
     	function checkWidthcase() {
         
         if (windowWidth > 1100) {
             
           
           	// these classes are added to the menu dahsboard under CSS Classes for each menu item
           
         		$('.about_nav').clone().appendTo('.nav_col.two ul.menu');
         		$('.att_nav').clone().appendTo('.nav_col.three ul.menu');
         		$('.pa_nav').clone().appendTo('.nav_col.four ul.menu');
         	   		
         		
         }       
         
  		};
     	
     
     checkWidthcase();
     
     
     
     $('.menu_wrapper').on('click', function(e) {
	     
	     	$('nav').addClass('open');
	     	
	     	$('html, body').addClass('fixed');
       
     });
     
     
     $('.close').on('click', function(e) {
       
     	$('nav').removeClass('open');
     	
     	$('html, body').removeClass('fixed');
     
     });
     


    /* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
		
		
		$('body, #internal_trigger').addClass('visible');

    createWaypoint('section_one', '.sticky_header', 'visible', -300, null, true);
    
    createWaypoint('section_two', '#section_two', 'visible', 100, null, false);
		
		createWaypoint('internal_trigger', '.sticky_header', 'visible', -300, null, true);
		
		createWaypoint('sec_three_trigger', '.sec_three_right', 'visible', 300, null, false);
		
		createWaypoint('section_five', '#section_five', 'visible', 200, null, true);
		
		createWaypoint('section_six', '#section_six', 'visible', 100, null, true);
		
		createWaypoint('about_img_trigger', '#about_img_trigger', 'visible', 250, null, false);



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    jQuery(function() {
      jQuery('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = jQuery(this.hash);
          target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            jQuery('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		 /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    function wistiaLoad() {
      jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        console.log('wistia load:', textStatus); // Success
      });
    }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)


		
		/* Live Chat - Call function when script needs to be loaded either by hover, click or waypoints
   --------------------------------------------------------------------------------------------------- */ 
   
   
   
   function livechatLoad() {
	   if(my_data.live_chat) {
      jQuery.getScript(my_data.live_chat, function(data, textStatus, jqxhr) {
        console.log('Live Chat load:', textStatus); // Success
      });
      // alert( my_data.live_chat);
      }
    }
   
   
   // createWaypoint('section_one', null, null, -100, livechatLoad, false);




    /* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      jQuery('img').each(function () {
        
        if (jQuery(this).attr('data-src')) {
          
          var img = jQuery(this).data('src');
          
          jQuery(this).attr('src', img);
        
        }
      
      });

      // background images
      
      jQuery('div, section').each(function () {
       
        if (jQuery(this).attr('data-src')) {
          
          var backgroundImg = jQuery(this).data('src');
          
          jQuery(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    createWaypoint('section_two', null, null, '100%', loadImages, false);
    
    createWaypoint('internal_trigger', null, null, '100%', loadImages, false);
    
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */


/*
$('.sec_three_slider').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
	arrows:true,
	prevArrow:".arrow_left",
	nextArrow:".arrow_right",
	responsive: [
    {
      breakpoint: 1450,
      settings: {
      slidesToShow: 5,
      slidesToScroll: 5,
     }
   },
   {
      breakpoint: 1100,
      settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      dots:true,
     }
   },
   {
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots:true,
     }
   }
	]
 });
 
*/
 
 
 
 
 $('.sec_one_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  mobileFirst: true,
	arrows:false,
	dots:true,
	responsive: [
    {
      breakpoint: 767,
      settings: "unslick",
    }
	]
 });
 
 
 
 
 
 $('.sec_five_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:true,
	fade:true,
	prevArrow:".sec_five_button_left",
	nextArrow:".sec_five_button_right",
	responsive: [
    {
      breakpoint: 1066,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows:false,
      adaptiveHeight: true,
      dots:true,
     }
   }
	]
 });
 
 
 
 // sidebar
 
 
 $('.sidebar_wrapper ul.menu > li.menu-item-has-children > a').on('click', function(e) {
	 
	 $(this).next('ul.sub-menu').slideToggle(300);
	 
	 $(this).toggleClass('active');
   
 });
 
 
 $('.sidebar_wrapper ul.menu > li.current-menu-ancestor > a').addClass('active');
   

 	// banner class check
 
 
 	if (!$('.internal_banner')[0]){
   	
   	$('header').addClass('no-banner'); // except about page has a banner but its using the "no-banner" header. so i said add "no-banner" to that template as an exception
   	
   	$('body.page-template-template-home header').removeClass('no-banner');
   
  }
  

 /* Contact Page Iframe toggle
--------------------------------------------------------------------------------------- */
 
 
 
 $('.map_button').on('click', function(e) {
	 
	 $('.map_button').removeClass('active');
	 
	 $(this).addClass('active');
   
 });
 
 
  $('.map_left').on('click', function(e) {
	 
	 $('iframe#boulder').removeClass('fadein');
	 
	 $('iframe#denver').addClass('fadein');
   
 	});
 	
 	
 	$('.map_right').on('click', function(e) {
	 
	 $('iframe#boulder').addClass('fadein');
	 
	 $('iframe#denver').removeClass('fadein');
   
 	});
 

	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");




/* Section One Parallax Scrolling
--------------------------------------------------------------------------------------- */


// https://medium.com/@PatrykZabielski/how-to-make-multi-layered-parallax-illustration-with-css-javascript-2b56883c3f27

// https://dribbble.com/shots/4585245-Adventure

// https://tympanus.net/Development/SegmentEffect/index6.html



window.addEventListener('scroll', function(event) {
  var depth, i, layer, layers, len, movement, topDistance, translate3d;
  topDistance = this.pageYOffset;
  layers = document.querySelectorAll("[data-type='parallax']");
  for (i = 0, len = layers.length; i < len; i++) {
    layer = layers[i];
    depth = layer.getAttribute('data-depth');
    movement = -(topDistance * depth);
    translate3d = 'translate3d(0, ' + movement + 'px, 0)';
    layer.style['-webkit-transform'] = translate3d;
    layer.style['-moz-transform'] = translate3d;
    layer.style['-ms-transform'] = translate3d;
    layer.style['-o-transform'] = translate3d;
    layer.style.transform = translate3d;
  }
});



  
}); // document ready