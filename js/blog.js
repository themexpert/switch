/*!
 * Switch v1.0 (http://themesgrove.com)
 * Copyright 2014 ThemesGrove.
 * Licensed under MIT
 */
"use strict";
// Window Ready

jQuery(function($) {

    // Nice Scroll
    $("html").niceScroll({
        cursorcolor : "#555",
        cursorwidth : "10px" ,
        cursorminheight : "200" ,
        zindex: 9999 ,
        cursorborder: "none"    ,
        cursorborderradius : "0" ,
        autohidemode: false,
    });

    // Preloader
    jQuery('#status').fadeOut(); // will first fade out the loading animation
    jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    //jQuery('body').delay(350).css({'overflow':'visible'});


   //WOW Scroll Spy
    var wow = new WOW({
    //disabled for mobile
        mobile: false
    });
    wow.init(); 

});
