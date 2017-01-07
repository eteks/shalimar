(function ($) {

    "use strict";

    // Document ready function 
    $(function () {
        
        /*-------------------------------------
        Booking dates and time
        -------------------------------------*/
        var datePicker = $('.rt-date');
        if (datePicker.length) {
            datePicker.datetimepicker({
                format: 'Y-m-d',
                timepicker: false
            });
        }
        
        var timePicker = $('.rt-time');
        if (timePicker.length) {
            timePicker.datetimepicker({
                format: 'H:i',
                datepicker: false
            });
        }

        /*-------------------------------------
         JQuery Serch Box
         -------------------------------------*/
        $('#search-button').on('click', function (e) {
            e.preventDefault();
            $(this).prev('.search-form').slideToggle('slow');
        });


        /*-------------------------------------
        On click loadmore functionality 
        -------------------------------------*/
        $('.loadmore').on('click', 'a', function (e) {
            e.preventDefault();
            var _this = $(this),
                _parent = _this.parents('.menu-list-wrapper'),
                _target = _parent.find('.menu-list'),
                _set = _target.find('.menu-item.hidden').slice(0, 4); // Herre 2 is the limit
            if (_set.length) {
                _set.animate({opacity: 0});
                _set.promise().done(function () {
                    _set.removeClass('hidden');
                    _set.show().animate({opacity: 1}, 1000);
                });
            } else {
                _this.text('No more item to display');
            }

            return false;
        });


    });

    /*-------------------------------------
     jQuery MeanMenu initialization
     --------------------------------------*/
    $('nav#dropdown').meanmenu({siteLogo: "<a href='index.html' class='logo-mobile-menu'><img src='img/mobile-logo.png' /></a>"});

    /*-------------------------------------
     Wow js Initiation 
     -------------------------------------*/
    new WOW().init();

    /*-------------------------------------
     Jquery Scollup Initiation
     -------------------------------------*/
    $.scrollUp({
        scrollText: '<i class="fa fa-arrow-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*-------------------------------------
     Window load function
     -------------------------------------*/
    $(window).on('load', function () {

        // Page Preloader
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });

        /*-------------------------------------
         jQuery for Isotope initialization
         -------------------------------------*/
        var $container = $('#inner-isotope');

        if ($container.length > 0) {

            // Isotope initialization
            var $isotope = $container.find('.featuredContainer').isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });

            // Isotope filter
            $container.find('.isotop-classes-tab').on('click', 'a', function () {

                var $this = $(this);
                $this.parent('.isotop-classes-tab').find('a').removeClass('current');
                $this.addClass('current');
                var selector = $this.attr('data-filter');
                $isotope.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;

            });
        }
    });// end window load function

    /*-------------------------------------
     About Counter
     -------------------------------------*/
    var aboutContainer = $('.about-counter');

    if (aboutContainer.length) {

        aboutContainer.counterUp({
            delay: 50,
            time: 5000
        });

    }

    /*-------------------------------------
     Contact Form initiating
     -------------------------------------*/
    // var contactForm = $('#contact-form');
    // if (contactForm.length) {
// 
        // contactForm.validator().on('submit', function (e) {
            // var $this = $(this),
                // $target = contactForm.find('.form-response');
            // if (e.isDefaultPrevented()) {
                // $target.html("<div class='alert alert-success'><p>Please select all required field.</p></div>");
            // } else {
                // // Ajax call to load php file to process mail function
                // $.ajax({
                    // url: "vendor/php/reservation-form-process.php",
                    // type: "POST",
                    // data: contactForm.serialize(),
                    // beforeSend: function () {
                        // $target.html("<div class='alert alert-info'><p>Loading ...</p></div>");
                    // },
                    // success: function (text) {
                        // if (text == "success") {
                            // $this[0].reset();
                            // $target.html("<div class='alert alert-success'><p>Message has been sent successfully.</p></div>");
                        // } else {
                            // $target.html("<div class='alert alert-success'><p>" + text + "</p></div>");
                        // }
                    // }
                // });
                // return false;
            // }
        // });

    

  
    // var reservationForm = $('#reservation-form');
    // if (reservationForm.length) {
// 
        // reservationForm.validator().on('submit', function (e) {
            // var $this = $(this),
                // $target = reservationForm.find('.form-response');
            // if (e.isDefaultPrevented()) {
                // $target.html("<div class='alert alert-success'><p>Please select all required field.</p></div>");
            // } else {
                // // Ajax call to load php file to process mail function
                // $.ajax({
                    // url: "vendor/php/reservation-form-process.php",
                    // type: "POST",
                    // data: reservationForm.serialize(),
                    // beforeSend: function () {
                        // $target.html("<div class='alert alert-info'><p>Loading ...</p></div>");
                    // },
                    // success: function (text) {
                        // if (text == "success") {
                            // $this[0].reset();
                            // $target.html("<div class='alert alert-success'><p>Message has been sent successfully.</p></div>");
                        // } else {
                            // $target.html("<div class='alert alert-success'><p>" + text + "</p></div>");
                        // }
                    // }
                // });
                // return false;
            // }
        // });
// 
    // }

    /*-------------------------------------
     Input Quantity Up & Down initialize
     -------------------------------------*/
    // $('#quantity-holder').on('click', '.quantity-plus', function () {
// 
        // var $holder = $(this).parents('.quantity-holder');
        // var $target = $holder.find('input.quantity-input');
        // var $quantity = parseInt($target.val(), 10);
        // if ($.isNumeric($quantity) && $quantity > 0) {
            // $quantity = $quantity + 1;
            // $target.val($quantity);
        // } else {
            // $target.val($quantity);
        // }
// 
    // }).on('click', '.quantity-minus', function () {
// 
        // var $holder = $(this).parents('.quantity-holder');
        // var $target = $holder.find('input.quantity-input');
        // var $quantity = parseInt($target.val(), 10);
        // if ($.isNumeric($quantity) && $quantity >= 2) {
            // $quantity = $quantity - 1;
            // $target.val($quantity);
        // } else {
            // $target.val(1);
        // }
// 
    // });

    /*-------------------------------------
     Google Map
     -------------------------------------*/
    if ($('#googleMap').length) {

        //Map initialize
        var initialize = function () {
            var mapOptions = {
                zoom: 17,
                scrollwheel: false,
                center: new google.maps.LatLng(49.051008, 2.096607)
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),
                mapOptions);
            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map,
                title: 'SHALIMAR'
            });
        }

        // Add the map initialize function to the window load function
        google.maps.event.addDomListener(window, "load", initialize);
    }

    /*-------------------------------------
     Carousel slider initiation
     -------------------------------------*/
    $('.rc-carousel').each(function () {

        // Declared all carousel variable
        var carousel = $(this),
            loop = carousel.data('loop'),
            items = carousel.data('items'),
            margin = carousel.data('margin'),
            stagePadding = carousel.data('stage-padding'),
            autoplay = carousel.data('autoplay'),
            autoplayTimeout = carousel.data('autoplay-timeout'),
            smartSpeed = carousel.data('smart-speed'),
            dots = carousel.data('dots'),
            nav = carousel.data('nav'),
            navSpeed = carousel.data('nav-speed'),
            rXsmall = carousel.data('r-x-small'),
            rXsmallNav = carousel.data('r-x-small-nav'),
            rXsmallDots = carousel.data('r-x-small-dots'),
            rXmedium = carousel.data('r-x-medium'),
            rXmediumNav = carousel.data('r-x-medium-nav'),
            rXmediumDots = carousel.data('r-x-medium-dots'),
            rSmall = carousel.data('r-small'),
            rSmallNav = carousel.data('r-small-nav'),
            rSmallDots = carousel.data('r-small-dots'),
            rMedium = carousel.data('r-medium'),
            rMediumNav = carousel.data('r-medium-nav'),
            rMediumDots = carousel.data('r-medium-dots');

            // Call carousel main function to load carousel layout
        carousel.owlCarousel({
            loop: (loop ? true : false),
            items: (items ? items : 4),
            lazyLoad: true,
            margin: (margin ? margin : 0),
            autoplay: (autoplay ? true : false),
            autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
            smartSpeed: (smartSpeed ? smartSpeed : 250),
            dots: (dots ? true : false),
            nav: (nav ? true : false),
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            navSpeed: (navSpeed ? true : false),
            responsiveClass: true,
            responsive: {
                0: {
                    items: ( rXsmall ? rXsmall : 1),
                    nav: ( rXsmallNav ? true : false),
                    dots: ( rXsmallDots ? true : false)
                },
                480: {
                    items: ( rXmedium ? rXmedium : 2),
                    nav: ( rXmediumNav ? true : false),
                    dots: ( rXmediumDots ? true : false)
                },
                768: {
                    items: ( rSmall ? rSmall : 3),
                    nav: ( rSmallNav ? true : false),
                    dots: ( rSmallDots ? true : false)
                },
                992: {
                    items: ( rMedium ? rMedium : 5),
                    nav: ( rMediumNav ? true : false),
                    dots: ( rMediumDots ? true : false)
                }
            }
        });

    });


    /*-------------------------------------
     Window onLoad and onResize event trigger
     -------------------------------------*/
    $(window).on('load resize', function () {

        //Define the maximum height for mobile menu
        var wHeight = $(window).height(),
            mLogoH = $('a.logo-mobile-menu').outerHeight();
        wHeight = wHeight - 50;
        $('.mean-nav > ul').css('height', wHeight + 'px');

    });


    /*-------------------------------------
     Jquery Stiky Menu at window Load
     -------------------------------------*/
    $(window).on('scroll', function () {

        var s = $('#sticker'),
            w = $('.wrapper'),
            h = s.outerHeight(),
            windowpos = $(window).scrollTop(),
            windowWidth = $(window).width(),
            h1 = s.parent('.header1-area'),
            h2 = s.parent('.header2-area'),
            h3 = s.parent('.header3-area'),
            h3H = h3.find('.header-top-area').outerHeight(),
            topBar = s.prev('.header-top-area');

        if (windowWidth > 767) {
            w.css('padding-top', '');
            var topBarH, mBottom = 0;
            if (h1.length) {
                topBarH = h = 1;
                mBottom = 0;
            } else if (h2.length) {
                mBottom = h2.find('.header-bottom-area').outerHeight();
                topBarH = topBar.outerHeight();
            } else if (h3.length) {
                topBarH = topBar.outerHeight();
            }

            if (windowpos >= topBarH) {
                s.addClass('stick');
                if (h2.length) {
                    topBar.css('margin-bottom', mBottom + 'px');
                }
            } else {
                s.removeClass('stick');
                if (h2.length) {
                    topBar.css('margin-bottom', 0);
                }
            }
        }

    });
  /*-------------------------------------
     Reservation Form initiating
     -------------------------------------*/
					$('#contactname').keydown(function (e) {
					      if (e.ctrlKey || e.altKey) {
					          e.preventDefault();
					      } else {
					          var key = e.keyCode;
					          if (!((key == 8) || (key == 32) || (key == 46) || (key == 9) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
					              e.preventDefault();
					          }
					      }
					});     
					var required_register = ["contactname","email","subject","message","form-phone"];
				
					var reg_email=jQuery("#email");
					var tele=jQuery("#form-phone");
					var test=jQuery("#test");
					var errornotice = jQuery("#error");
					       
					$("#reservationForm").on('submit',function(e){
						
					    // e.preventDefault();
					    for (var i=0;i<required_register.length;i++) {
					    var input = jQuery('#'+ required_register[i]);
					    if ((input.val() == "")) 
					        {
					            input.addClass("error_input_field");					           
					            $('.error_test').css('display','block'); 
					            
					        } else {
					            input.removeClass("error_input_field");
					            $('.error_test').css('display','none'); 
					        }
					    }
					    if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(reg_email.val())) 
					    {					    	
					    reg_email.addClass("error_email_field");
					        $('.error_mail').css('display','block');
					       
					        }
					         else {
					            reg_email.removeClass("error_email_field");
					             $('.error_mail').css('display','none');
					             				             
					    }
					     if(!/([0-9 -()+])+$/.test(tele.val()))	
					     {					    	
					    	tele.addClass("error_tele_field");
					        $('.error_tele').css('display','block');
					        
					        }
					         else {
					            tele.removeClass("error_tele_field");
					             $('.error_tele').css('display','none');
					             				             
					    }	
					    				
					    //if any inputs on the page have the class 'error_input_field' the form will not submit
					    if (jQuery(":input").hasClass("error_input_field")  ) {
					         $('.error_test').css('display','block'); 
					         $('.error_mail').css('display','none'); 
					         $('.error_tele').css('display','none');
					         return false;
					    } 
					    else {
					        if(jQuery(":input").hasClass("error_email_field"))  {
					             $('.error_test').css('display','none');
					             $('.error_mail').css('display','block');
					             $('.error_tele').css('display','none');
					             return false;
					        }
					        else if (jQuery(":input").hasClass("error_tele_field")){
					        	 $('.error_test').css('display','none');
					             $('.error_mail').css('display','none');
					             $('.error_tele').css('display','block');				             
					             return false;
					        }
					        else {
					             errornotice.hide();
					             $('.error_test').css('display','none'); 
					             $('.error_mail').css('display','none');
					             $('.success').css('display','block');
					             $('.error_tele').css('display','none');	
					             $(this).unbind();
					             $(this).submit();
					        }
					    }
				
					});
					
			 /*-------------------------------------
			     Contact Form initiating
			   -------------------------------------*/			
									
					$('#name').keydown(function (e) {
					      if (e.ctrlKey || e.altKey) {
					          e.preventDefault();
					      } else {
					          var key = e.keyCode;
					          if (!((key == 8) || (key == 32) || (key == 46) || (key == 9) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
					              e.preventDefault();
					          }
					      }
					});     
					var required_register1 = ["name","contact_email","contact_subject","contact_message"];
					var reg_email1 =jQuery("#contact_email");
					
					       
					$("#contactForm").on('submit',function(e){
						
					    // e.preventDefault();
					    for (var i=0;i<required_register1.length;i++) {
					    var input = jQuery('#'+ required_register1[i]);
					    if ((input.val() == "")) 
					        {
					            input.addClass("error_input_field");					           
					            $('.error_test').css('display','block'); 
					           
					            
					        } else {
					            input.removeClass("error_input_field");
					            $('.error_test').css('display','none'); 
					        }
					    }
					    if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(reg_email1.val())) 
					    {					    	
					    reg_email1.addClass("error_email_field");
					        $('.error_mail').css('display','block');
					       
					        }
					         else {
					            reg_email1.removeClass("error_email_field");
					             $('.error_mail').css('display','none');
					            			             
					    }
					    
					    				
					    //if any inputs on the page have the class 'error_input_field' the form will not submit
					    if (jQuery(":input").hasClass("error_input_field")  ) {
					         $('.error_test').css('display','block'); 
					         $('.error_mail').css('display','none'); 
					        
					         return false;
					    } 
					    else {
					        if(jQuery(":input").hasClass("error_email_field"))  {
					             $('.error_test').css('display','none');
					             $('.error_mail').css('display','block');
					           
					             return false;
					        }
					       
					        else {
					             errornotice.hide();
					             $('.error_test').css('display','none'); 
					             $('.error_mail').css('display','none');
					             $('.success').css('display','block');
					            
					             $(this).unbind();
					             $(this).submit();
					        }
					    }
		
					});
	})(jQuery);