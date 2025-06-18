function loaderFunc(){
    // hiding the loader on page load
    $(window).load(function(){
        $('.page-loader').addClass('loaded');
    });
}
function dropdownLinkClickAble(){
    if ($(window).width() > 320) {
        // $('.navbar .dropdown > a').click(function() {
        //   location.href = this.href;
        // });
        // alert("hi");
        $('#menu-item-dropdown-152').attr('href','http://itums.co.in/itums/about-us/');
        $('.dropdown-toggle').removeAttr('data-toggle').attr('data-hover','dropdown');
        $('.dropdown-toggle').click(function() { 
            alert("Hi");
            console.log('dropdown clicked');
            // var location = $(this).attr('href'); 
            // window.location.href = location; 
            // return true; 
        });
    }
}
function HomeCarouselInit(){
    
    if($('#slides').length){
        window.addEventListener('load',function(){
            // alert('document loaded');
            // to stop sliding when loaded
            $('#slides').superslides('stop');
        });
        $('#slides').superslides({
            // hashchange: true
            hashchange: false,
            delay: 5000,
            play: false,
            animation: 'fade'
          });
          
          $('#slides').on('mouseenter', function() {
            $(this).superslides('stop');
          });
          $('#slides').on('mouseleave', function() {
            $(this).superslides('start');
          });
    }
}

function testimonialInit(){

    var feedbackSlider = $('.owl-carousel-testimonials');
    if(feedbackSlider.length){

        feedbackSlider.owlCarousel({
            items: 1,
            nav: true,
            dots: true,
            autoplay: false,
            loop: true,
            mouseDrag: true,
            touchDrag: true,
            navText: ["<i class='fas fa-arrow-circle-left'></i>", "<i class='fas fa-arrow-circle-right'></i>"],
            responsive:{
                0:{
                    items:1,
                    nav:true,
                    dots: false
                },
                // breakpoint from 767 up
                767:{
                    items:1,
                    nav: true,
                    dots: false
                }
            }
            });
            feedbackSlider.on("translate.owl.carousel", function(){
                $(".feedback-slider-item h3").removeClass("animated fadeIn").css("opacity", "0");
                $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").removeClass("animated zoomIn").css("opacity", "0");
            });
        
            feedbackSlider.on("translated.owl.carousel", function(){
                $(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
                $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").addClass("animated zoomIn").css("opacity", "1");
            });
            feedbackSlider.on('changed.owl.carousel', function(property) {
                var current = property.item.index;
                var prevThumb = $(property.target).find(".owl-item").eq(current).prev().find("img").attr('src');
                var nextThumb = $(property.target).find(".owl-item").eq(current).next().find("img").attr('src');
                var prevRating = $(property.target).find(".owl-item").eq(current).prev().find('span').attr('data-rating');
                var nextRating = $(property.target).find(".owl-item").eq(current).next().find('span').attr('data-rating');
                $('.thumb-prev').find('img').attr('src', prevThumb);
                $('.thumb-next').find('img').attr('src', nextThumb);
                // $('.thumb-prev').find('span').next().html(prevRating + '<i class="fa fa-star"></i>');
                // $('.thumb-next').find('span').next().html(nextRating + '<i class="fa fa-star"></i>');
            });
            $('.thumb-next').on('click', function() {
                feedbackSlider.trigger('next.owl.carousel', [300]);
                return false;
            });
            $('.thumb-prev').on('click', function() {
                feedbackSlider.trigger('prev.owl.carousel', [300]);
                return false;
            });

    }

}
function offerTab(){

    $(document).on('click','nav.multitabs ul li a',function(){
        // alert(1);
        var tabID = $(this).attr('data-trigger');
        // alert(tabID);
        $('div#'+ tabID +'').show();
        $('.tabcontent:not(#'+ tabID +')').hide();
        $(this).addClass('active');
        $(this).parent('li').siblings('li').find('a').removeClass('active');
    });

}
function empTestimonialInit(){
    var empfeedbackSlider = $('.owl-carousel-emp-testimonials');
    if(empfeedbackSlider.length){
        empfeedbackSlider.owlCarousel({
            items: 1,
            nav: true,
            dots: true,
            autoplay: true,
            autoHeight:true,
            loop: true,
            mouseDrag: true,
            touchDrag: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            responsive:{
                // breakpoint from 480 up
                    480 : {
                    nav: false,
                    dots: true
                },
                // breakpoint from 767 up
                767:{
                    nav: true,
                    dots: true
                }
            }
        });
    }
}
function bodyScroll(){

    $("body").niceScroll({
        cursorcolor:"aquamarine",
        cursorwidth:"16px"
    });
    // $('body').css({
    //     'overflow-x':'hidden'
    // });

}
function clientInit(){
    if($('.customer-logos').length){
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }
        , 
        {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }
        , 
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2
            }
        }
        ]
    });
    }


}


function stickyHeaderInit(){

    $(window).scroll(function(){
        if ($(window).scrollTop() >= window.innerHeight) {
            $('.main-nav').addClass('fixed-header');
            $('.header-curve').addClass('header-curve-fixed');
            $('.svg-menu-path').attr('fill','rgba(0,0,0,0.5)');
            $('.main-nav').css({
                'transition':'all 0.5s'
            });
            $('#header-curve-svg').css({
                'animation':'curveAnimate',
                'animation-duration':'1s',
                'animation-fill-mode':'forwards'
            });
            $('.header-curve').css({
                'opacity':'1',
                'transition':'all 0.5s',
                'height':'auto'
            });
        }else{
            $('.main-nav').removeClass('fixed-header');
            if($('.header-curve').hasClass('header-curve-fixed')){
                $('.header-curve').removeClass('header-curve-fixed');
                $('.header-curve').css({
                    'opacity':'0',
                    'height':'0px'
                });
            }
            $('#header-curve-svg').css({
                'animation':'none',
                'animation-duration':'3s',
                'animation-fill-mode':'forwards'
            });
        }
    });

}

function bookAppointmentInit(){
    $('.appointment-section').css({
        'display':'none',
        'animation-name':'none'  
    });
    $('#video-modal-btn').css({
        'display':'none',
        'animation-name':'none'
    });
    $( window ).on( "load", function(){
        var winWidth = window.innerWidth;
        if(winWidth < 768){ // mobile screen
             	console.log('In mobile');
                 $('#appointment-mobile').hide();
                 $('#video-modal-btn-mobile').hide();
             	//$('#appointment-mobile').append('<a href="https://itums.co.in/book-appointment/"></a>');
        	$(window).scroll(function(){
        	        var winHeight = window.innerHeight;
        		var scrollTop = window.pageYOffset;
        		if(scrollTop > winHeight){
			    $('.appointment-section').css({
			        'display':'none',
			        'animation-name':'none'  
                });
			    $('#video-modal-btn').css({
			        'display':'none',
			        'animation-name':'none'  
                });
                $('#appointment-mobile').show();
                $('#video-modal-btn-mobile').show();
        		}else{
			    $('.appointment-section').css({
			        'display':'none',
			        'animation-name':'none'  
                });
			    $('#video-modal-btn').css({
			        'display':'none',
			        'animation-name':'none'  
			    });
                $('#appointment-mobile').hide();
                $('#video-modal-btn-mobile').hide();
        		}
        		
        	});
	}else{
        	console.log('In tab or desktop');
        }
    });
    $(window).on('resize',function(){
        var winWidth = window.innerWidth;
        if(winWidth < 768){
        	console.log('In mobile');
        	$(window).scroll(function(){
        	        var winHeight = window.innerHeight;
        		var scrollTop = window.pageYOffset;
        		if(scrollTop > winHeight){
			    $('.appointment-section').css({
			        'display':'none',
			        'animation-name':'none'  
			    });
        		}else{
			    $('.appointment-section').css({
			        'display':'none',
			        'animation-name':'none'  
			    });
        		}
        		
        	});
        }else{
        	console.log('In tab or desktop');
        }
    });
    $(window).scroll(function(){
        var winHeight = window.innerHeight;

        var scrollTop = window.pageYOffset;

        if(scrollTop > winHeight){

            document.getElementsByClassName('appointment-section')[0].addEventListener('mouseenter',function(){
                $('.appointment-section').css({
                    'display':'block',
                    'animation-name':'animatedAppointmentBtn',
                    'animation-duration':'2s',
                    'animation-iteration-count':'infinite'
                });
            });
            document.getElementsByClassName('appointment-section')[0].addEventListener('mouseleave',function(){
                $('.appointment-section').css({
                    'display':'block',
                    'animation-name':'none',
                    'animation-duration':'2s',
                    'animation-iteration-count':'infinite'
                });
            });
            $('.appointment-section').css({
                'display':'block',
            });
            $('#video-modal-btn').css({
                'display':'block',
            });

        }else{
            $('.appointment-section').css({
                'display':'none',
                'animation-name':'none'  
            });
            $('#video-modal-btn').css({
                'display':'none',
                'animation-name':'none'  
            });
        }
        
    });
    
}

function dropdownEffectInit(){
    // var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    // if (!isMobile) {
    $(".dropdown").on("hide.bs.collapse", function() {
        alert('hi');
        $(this).find(".dropdown-menu").first().addClass( "sliding" )
      });
      $(".dropdown").on("hidden.bs.collapse", function() {
        alert('bye');
        $(this).find(".dropdown-menu").first().removeClass( "sliding" )
      });
      $(document).click(function() {
        $(".dropdown-menu.collapse.show").collapse("hide");
      });
  // }
}

function subBannerHeight(){
    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    var subBanner = document.getElementById('sub-banner');
    // checking if the element exists on the page
    if(typeof(subBanner) != 'undefined' && subBanner != null){
        if (!isMobile) {
            var winHeight = window.innerHeight;
            var winWidth = window.innerWidth;
            subBanner.style.height = winHeight + 'px';
            subBanner.style.width = winWidth + 'px';
        }else{
            var winHeight = window.innerHeight;
            var winWidth = window.innerWidth;
            subBanner.style.height = winHeight/2 + 'px';
            subBanner.style.width = 100 + '%';
        }
    }
}

function parallaxInit(){

    $('.img-parallax').each(function(){
        var img = $(this);
        var imgParent = $(this).parent();
        function parallaxImg () {
          var speed = img.data('speed');
          var imgY = imgParent.offset().top;
          var winY = $(this).scrollTop();
          var winH = $(this).height();
          var parentH = imgParent.innerHeight();
      
      
          // The next pixel to show on screen      
          var winBottom = winY + winH;
      
          // If block is shown on screen
          if (winBottom > imgY && winY < imgY + parentH) {
            // Number of pixels shown after block appear
            var imgBottom = ((winBottom - imgY) * speed);
            // Max number of pixels until block disappear
            var imgTop = winH + parentH;
            // Porcentage between start showing until disappearing
            var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
          }
          img.css({
            top: imgPercent + '%',
            transform: 'translate(-50%, -' + imgPercent + '%)'
          });
        }
        $(document).on({
          scroll: function () {
            parallaxImg();
          }, ready: function () {
            parallaxImg();
          }
        });
      });
}

function counterInit(){
    $('.counter01').counterUp({
        delay: 10,
        time: 2000
    });
    $('.counter02').counterUp({
        delay: 10,
        time: 2000
    });
    $('.counter03').counterUp({
        delay: 10,
        time: 2000
    });
}

function projectGalleryInit(){
    if($('#lightgallery').length > 0){
        $('#lightgallery').lightGallery({
            mode: 'lg-fade',
            cssEasing : 'cubic-bezier(0.25, 0, 0.25, 1)'
        });
    }
}
function masonarygridInit(){
    $('.grid').masonry({
        // options...
        itemSelector: '.grid-item',
        columnWidth: 200
      });
}

function animatedHistory(){
    var timeline_block = $('.cd-timeline-block');
    timeline_block.each(function(){
        if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75){
            // alert("scrolled");
            $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
        }
    });

	$(window).on('scroll', function(){
		timeline_block.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
            }
            // else{
            //     $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden').removeClass('bounce-in');
            // }
		});
	});
}

function contactFormScripts(){
    if($('#contact-form').length){
    $('#contact-form').on('submit',function(e){
        e.preventDefault();
        // console.log('submitted');
        var form = $(this), 
        name = form.find('#form-1-name').val(),
        email = form.find('#form-1-email').val(),
        phone = form.find('#form-1-phone').val(),
        message = form.find('#form-1-message').val(),
        ajaxurl = form.data('url'); // path of admin-ajax.php file

        if( name === '' || email == '' || message == '' ){
            console.log('Required inputs are empty');
            return;
        }

        $.ajax({
            
            url : ajaxurl, // path of admin-ajax.php file
            type : 'post', // sending post request
            data : {
                
                name : name,
                email : email,
                phone: phone,
                message : message,
                action: 'sunset_save_user_contact_form'
                
            },
            error : function( response ){
                console.log(response);
                    $('#error_message').fadeIn().html('<h2>Sorry! there was some problem while sending your form.</h2></p>Plase try again later.</p>');
                    form.trigger("reset");
                    setTimeout(function() {
                        $('#error_message').fadeOut("slow");
                    }, 2000 );
            },
            success : function( response ){
                // console.log(response);
                if(response == 0){
                    console.log('Unable to save your message');
                }else{
                    console.log('Message saved.');
                    $('#success_message').fadeIn().html('<h2>Your Message is sent successfully.</h2></p>We sill get back to you ASAP.</p>');
                    form.trigger("reset");
                    setTimeout(function() {
                        $('#success_message').fadeOut("slow");
                    }, 2000 );
                }
            }
            
        });

    });
    }

}
// function initFormValidation(){
//   $.validate({
//     modules : 'location, date, security, file, logic, length, email, number',
//   });
// }

function hideLogoonHamburgerClick(){
    var winwidth = $(window).width();
    if(winwidth<768){
        $('.navbar-toggler').on('click',function(){
            $('#menu-headermenu').css({
                'height':'200px'
            });
            $('#menu-header-menu-02').css({
                'height':'auto'
            });
        });
    }else{
        // $('a.navbar-brand').show();
    }

}

$(document).ready(function(){
    hideLogoonHamburgerClick();
    dropdownLinkClickAble();
    loaderFunc();
    HomeCarouselInit();
    stickyHeaderInit();
    testimonialInit();
    empTestimonialInit();   
    clientInit();
    offerTab();
    // bodyScroll();
    subBannerHeight();
    parallaxInit();
    counterInit();
    projectGalleryInit();
    // masonarygridInit();
    bookAppointmentInit();
    dropdownEffectInit();
    animatedHistory();
    contactFormScripts();
    // initFormValidation();
    // initCareerFormValidation();
});