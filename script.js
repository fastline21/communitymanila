jQuery(document).ready(function() {
    if (jQuery('#wpadminbar').length) {
        jQuery('nav').css({'margin-top':'32px'});
    }
    jQuery('.collapse').on('show.bs.collapse', function() {
        jQuery('.collapse').not(this).collapse('hide');
    });
    jQuery('nav a[href^="#"]').on('click', function(event) {
        var target = jQuery(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            jQuery('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 500);
            jQuery(this).addClass('active');
        }
    });
    var offset = 500;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});