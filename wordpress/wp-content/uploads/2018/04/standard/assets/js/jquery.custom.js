
(function($){ //create closure so we can safely use $ as alias for jQuery

    $(document).ready(function(){

        "use strict";

        /*-----------------------------------------------------------------------------------*/
        /*  Superfish Menu
        /*-----------------------------------------------------------------------------------*/
        // initialise plugin
        var example = $('.sf-menu').superfish({
            //add options here if required
            delay:       100,
            speed:       'fast',
            autoArrows:  false  
        }); 

        /*-----------------------------------------------------------------------------------*/
        /*  bxSlider
        /*-----------------------------------------------------------------------------------*/
        $('.bxslider').show().bxSlider({
            auto: true,
            preloadImages: 'all',
            pause: '6000',
            autoHover: true,
            adaptiveHeight: true,
            mode: 'fade',
            onSliderLoad: function(){ 
                $(".bxslider").css("display", "block");
                $(".bxslider").css("visibility", "visible");  
                $('#featured-content .featured-slide .entry-header').fadeIn("100");
                $('#featured-content .featured-slide .gradient').fadeIn("100");                       
            }
        });
        /*-----------------------------------------------------------------------------------*/
        /*  Slick Mobile Menu
        /*-----------------------------------------------------------------------------------*/
        $('#primary-menu').slicknav({
            prependTo: '#slick-mobile-menu',
            allowParentLinks: true,
            label: 'Menu'            
        });   

        /*-----------------------------------------------------------------------------------*/
        /*  Back to Top
        /*-----------------------------------------------------------------------------------*/
        // hide #back-top first
        $("#back-top").hide();

        $(function () {
            // fade in #back-top
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn('200');
                } else {
                    $('#back-top').fadeOut('200');
                }
            });

            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });                                     

        /*-----------------------------------------------------------------------------------*/
        /*  Mobile Menu & Search
        /*-----------------------------------------------------------------------------------*/

        /* Mobile Menu */
        $('.menu-icon-open').click(function(){

            $('.mobile-menu').slideDown('fast', function() {});
            $('.menu-icon-open').toggleClass('active');
            $('.menu-icon-close').toggleClass('active');  

            $('.mobile-search').slideUp('fast', function() {});
            $('.search-icon > .genericon-search').removeClass('active');
            $('.search-icon > .genericon-close').removeClass('active');

        });

        $('.menu-icon-close').click(function(){

            $('.mobile-menu').slideUp('fast', function() {});
            $('.menu-icon-open').toggleClass('active');
            $('.menu-icon-close').toggleClass('active');

            $('.mobile-search').slideUp('fast', function() {});
            $('.search-icon > .genericon-search').removeClass('active');
            $('.search-icon > .genericon-close').removeClass('active');            

        });

        /* Mobile Search */
        $('.search-icon > .genericon-search').click(function(){

            $('.mobile-search').slideDown('fast', function() {});
            $('.search-icon > .genericon-search').toggleClass('active');
            $('.search-icon > .genericon-close').toggleClass('active');

            $('.mobile-menu').slideUp('fast', function() {});
            $('.menu-icon-open').removeClass('active');
            $('.menu-icon-close').removeClass('active');

        });

        $('.search-icon > .genericon-close').click(function(){

            $('.mobile-search').slideUp('fast', function() {});
            $('.search-icon > .genericon-search').toggleClass('active');
            $('.search-icon > .genericon-close').toggleClass('active');

            $('.mobile-menu').slideUp('fast', function() {});
            $('.menu-icon-open').removeClass('active');
            $('.menu-icon-close').removeClass('active');            

        });        

    });

})(jQuery);