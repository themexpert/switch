/*!
 * Switch v1.0 (http://themesgrove.com)
 * Copyright 2014 ThemesGrove.
 * Licensed under MIT
 */
"use strict";
// Window Ready
jQuery(window).load(function() {

    // Preloader
    jQuery('#status').fadeOut(); // will first fade out the loading animation
    jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    //jQuery('body').delay(350).css({'overflow':'visible'});

    // init Isotope
    var container = jQuery('.portfolio-container').isotope({
        itemSelector: '.portfolio-container li',
        layoutMode: 'fitRows'
        
    });

    // bind filter button click
    jQuery('.portfolio-filter').on( 'click', 'li', function() {
        var filterValue = jQuery( this ).attr('data-filter');
        container.isotope({ filter: filterValue });
        // Assign active class
        jQuery(this).siblings().removeClass('active');
        jQuery(this).addClass('active');
    }); 
});

// Document Ready
jQuery(function($) {
    // Smooth Scroll init
    smoothScroll.init();
	// Portfolio hover direction
	$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

    // Magnefic pop up for lightbox
    $('.test-popup-link').magnificPopup({type:'image'});

    // Hero area auto height adjustment
    $('#hero-unit .carousel-inner') .css({'height': (($(window).height()))+'px'});
    $(window).resize(function(){
        $('#hero-unit .carousel-inner') .css({'height': (($(window).height()))+'px'});
    });

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

    // Owl carousel
    $("#testimonial-slider").owlCarousel(
    {
        items :1,
        autoPlay : true,
    });

   //WOW Scroll Spy
    var wow = new WOW({
    //disabled for mobile
        mobile: false
    });
    wow.init();

});



jQuery(document).ready(function(){
    var mycontainer = jQuery('#projects');
    mycontainer.isotope({ 
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'liniar',
            queue: false,
        }
    }); 

    jQuery('#projects-filter a').click(function(){ 
        var selector = jQuery(this).attr('data-filter'); 
        mycontainer.isotope({ 
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'liniar',
                queue: false,
            } 
        }); 
      return false; 
    });
});
