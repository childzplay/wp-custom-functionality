jQuery(document).ready(function($) {

// Sticky Navigation Menu Bar
    var lastScrollTop = 0;
    var navBottom = $('.scrollhide-nav').position().top + $('.scrollhide-nav').height();
    jQuery(window).scroll(function() { 
        var scroll = $(window).scrollTop();

        // Check if scroll is not within the nav menu area 
        if (scroll >= 400 ) {

            // Hide secondary menu
            $(".secondary-menu-row").addClass("hidden");

            // Hide and show the menu according to scrolling behaviour
            if ( scroll > lastScrollTop ) {
                // Scrolling down
                $(".scrollhide-nav").addClass("hidden");
            }
            else {
                // Scrolling up
                $(".scrollhide-nav").addClass("sticky-size");
                $(".scrollhide-nav").removeClass("hidden");
            }

        }
        else {
            // Show main navigation regardless of scrolling actions
            $(".scrollhide-nav").removeClass("hidden sticky-size");
            // Show secondary menu
            $(".secondary-menu-row").removeClass("hidden");
        }
        lastScrollTop = scroll;
    });

}
