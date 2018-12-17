// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'

jQuery(document).ready(function($){
	
		

	
	 /* Modernizr - check if browser supports webp. 
     --------------------------------------------------------------------------------------- */
    
 
    
/*
     Modernizr.on('webp', function (result) {


	   $('img.webp_compression').each(function () {
	    
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

  		 
			// console.log(result);
	
		});
*/
		

			
			function checkWidthbg() {
				
				var windowWidthbg = $(window).width();
				
				if (windowWidthbg > 767) {
					
						// only load section one parallax images when page load is bigger than 767 px wide (to save on lighthouse audit)
		        
/*
		      	$('.layer').each(function () {
	  		
							if ($(this).attr('data-bg')) {
		  		
								var mybackground = $(this).data('bg');
		  		
								$(this).css('background-image', 'url(' + mybackground + ')');
		  		
	  					}
	  				
	  				});
*/
	  				
	  				
	  				$('.updated_layer').each(function () {
	  		
							if ($(this).attr('data-updated')) {
		  		
								var updatedimg = $(this).data('updated');
		  		
								$(this).attr('src', updatedimg);
		  		
	  					}
	  				
	  				});
	  				
	  		}
	  		

	  		
	  		Modernizr.on('webp', function (result) {
		  		
		  		
		  		$('.webp_bg_compression').each(function () {
			  		
			  		
			  		if(windowWidthbg < 767) {
					
					
							// background images
							
							if (result) {
	  		
								if ($(this).attr('data-webpsecone')) {
		  		
									var imgBg = $(this).data('webpsecone');
		  		
									$(this).css('background-image', 'url(' + imgBg + ')');
		  		
	  						}
	  		
	  					}
	  	
	  	
							else {
		  	
								if ($(this).attr('data-jpgsecone')) {
		  		
									var imgBg = $(this).data('jpgsecone');
		  		
									$(this).css('background-image', 'url(' + imgBg + ')');
		  		
	  						}
		  	
	  					}
	  						  					
					
						} //767
				
				
				
						
			  	
			  	}); // each '.webp_bg_compression'
			  	
			  	
			  	
			  	
			  	//images
			  	
			  	if(windowWidthbg < 767) {
			  	
			  		$('img.co').each(function () {
	  					
	  					
	  					if (result) {
	  		
								if ($(this).attr('data-webpcomobile')) {
		  		
									var mobileco = $(this).data('webpcomobile');
		  		
									$(this).attr('src', mobileco);
		  		
	  						}
	  		
	  					}
	  	
	  	
							else {
		  	
								if ($(this).attr('data-jpgcomobile')) {
		  		
									var mobileco = $(this).data('jpgcomobile');
		  		
									$(this).attr('src', mobileco);
		  		
	  						}
		  	
	  					}
	  					
	  					
	  					}); // each 
	  					
	  					} // 767
	  					
	  					
	  					
	  					if(windowWidthbg < 414) {
			  	
			  		$('img.co').each(function () {
	  					
	  					
	  					if (result) {
	  		
								if ($(this).attr('data-webpcosmall')) {
		  		
									var mobileco = $(this).data('webpcosmall');
		  		
									$(this).attr('src', mobileco);
		  		
	  						}
	  		
	  					}
	  	
	  	
							else {
		  	
								if ($(this).attr('data-jpgcosmall')) {
		  		
									var mobileco = $(this).data('jpgcosmall');
		  		
									$(this).attr('src', mobileco);
		  		
	  						}
		  	
	  					}
	  					
	  					
	  					}); // each 
	  					
	  					} // 414
		  		
		  		
		  }); // modernizr
	  			  		
	  		
			
		}; // checkWidthbg
			
		
		checkWidthbg();
		
		
		
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
		
		createWaypoint('sec_three_trigger', '.sec_three_right', 'visible', 400, null, false);
		
		createWaypoint('section_five', '#section_five', 'visible', 200, null, true);
		
		createWaypoint('section_six', '#section_six', 'visible', 200, null, false);
		
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
      fade:false,
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





	
/*


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
*/






window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          window.oRequestAnimationFrame      ||
          window.msRequestAnimationFrame     ||
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();

(function(win, d) {

  var $ = d.querySelector.bind(d);

 
  var blob2 = $('#para_two');
  var blob3 = $('#para_three');


  //var mainBG = $('#para_one');

  var ticking = false;
  var lastScrollY = 0;

  function onResize () {
    updateElements(win.pageYOffset);
  }

  function onScroll (evt) {

    if(!ticking) {
      ticking = true;
      requestAnimFrame(updateElements);
      lastScrollY = win.pageYOffset;
    }
  }

  function updateElements () {

    var relativeY = lastScrollY / 1500;

		prefix(blob2.style, "Transform", "translate3d(0px," +
      pos(0, 500, relativeY, 0) + 'px, 0)');

    prefix(blob3.style, "Transform", "translate3d(0px," +
      pos(0, 300, relativeY, 0) + 'px, 0)');


    ticking = false;
  }

  function pos(base, range, relY, offset) {
    return base + limit(0, 1, relY - offset) * range;
  }

  function prefix(obj, prop, value) {
    var prefs = ['webkit', 'Moz', 'o', 'ms'];
    for (var pref in prefs) {
      obj[prefs[pref] + prop] = value;
    }
  }

  function limit(min, max, value) {
    return Math.max(min, Math.min(max, value));
  }

  (function() {

    updateElements(win.pageYOffset);

    
    blob2.classList.add('force-show');
    blob3.classList.add('force-show');

  })();

  //win.addEventListener('resize', onResize, false);
  win.addEventListener('scroll', onScroll, false);

})(window, document);



  
}); // document ready