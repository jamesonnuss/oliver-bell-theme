jQuery( document ).ready(function($) {
    /* Sticky Header on Load */
    var scrollPosition = window.pageYOffset;
    if (scrollPosition >= 50) {
        $('header.header').addClass('sticky');
    } else {
        $('header.header').removeClass('sticky');
    }
    $(window).scroll(function() {
        /* Sticky Header on Scroll */
        var scrollPosition = window.pageYOffset;
        if (scrollPosition >= 50) {
            $('header.header').addClass('sticky');
        } else {
            $('header.header').removeClass('sticky');
        }
    }).scroll();
    $('.anchor-button').on( "click", function() {
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 800);
        return false;
    })
    function mainMenu(){
        if ($(window).innerWidth() > 752) {
            $('ul#menu-main-menu').superfish();
            $("button.menu-icon").removeClass('active-menu');
        } else {
            $('ul#menu-main-menu').superfish('hide');
            $('ul#menu-main-menu').find('li.sfHover').removeClass('sfHover');
            $('ul#menu-main-menu').superfish('destroy');
        }
    }
    $("button.menu-icon").on( "click", function() {
        event.stopImmediatePropagation();
        $(this).toggleClass('active-menu');
        $('#menu-main-menu').slideToggle('medium', function() {
            if ($(this).is(':visible'))
                $(this).css('display','flex');
        });
    });
    $('#menu-main-menu').on('click', function(event) {
        event.stopImmediatePropagation();
    });
    $(document).on("mousedown, touchstart, click",function(event){
        if($('button.menu-icon').hasClass('active-menu')) {
            $('#menu-main-menu').slideToggle('medium');
            $("button.menu-icon").toggleClass('active-menu');
        }
    });
    mainMenu();
	var resizeTimer;
	jQuery(window).on('resize', function(e) {
	    clearTimeout(resizeTimer);
	    var windowsize = jQuery(window).width();
	    resizeTimer = setTimeout(function() {
	           mainMenu();
	    }, 250);
	});
});
