jQuery(function () {

    // add class for youtube video
    jQuery('a[href*="youtube.com/watch\?v\="]').addClass('js-btn-video').wrapInner( "<span class='play-btn-text'></span>");;

    // magnificPopup
    $(document).ready(function() {
        $('.js-btn-video').magnificPopup({type:'iframe'});
    });


    // owl carousel sponsors
    jQuery('.owl-carousel').owlCarousel({
        loop: true,
        margin: 32,
        nav: true,
        dots: true,
        smartSpeed: 500,
        autoplay: true,
        navContainer: '.owl-nav-outside',
        navText: '',
        stagePadding: 17,
        responsive:{
            0: {
                items:1
            },
            912: {
                items:2
            },
            1280: {
                items:3
            }
        }
    });

    // find the highest of the featured item
    var maxHeight = -1;
    var win = jQuery(window); //this = window

    if (win.width() >= 998) {

        jQuery('.js-featureditem-heightset').each(function() {
            maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
        });

        jQuery('.js-featureditem-heightset').each(function() {
            jQuery(this).css('min-height', maxHeight + 'px');
        });

    } else if (win.width() <= 998) {
        jQuery('.js-featureditem-heightset').each(function() {
            jQuery(this).css('min-height', '0px');
        });
    }

    $(function() {
        $(window).resize(function() {
            var win = jQuery(this); //this = window

            if (win.width() >= 998) {
                var maxHeight = -1;

                jQuery('.js-featureditem-heightset').each(function() {
                    maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
                });

                jQuery('.js-featureditem-heightset').each(function() {
                    jQuery(this).css('min-height', maxHeight + 'px');
                });
            } else if (win.width() <= 998) {
                jQuery('.js-featureditem-heightset').each(function() {
                    jQuery(this).css('min-height', '0px');
                });
            }
        });
    });

    // remove data-toggle and expand dropdowns on mobile
    jQuery('#main-menu-mobile').find('a').removeAttr('data-toggle');

    // Auto target _blank external links
    targetBlankExternalLinks();

    // Remove WP Block element iframe classes
    if (jQuery('.wp-block-embed-youtube').length) {
        jQuery('.wp-block-embed-youtube').removeClass().addClass('embed-responsive-item');
    }

    // Scrolling anchors
    jQuery('.scrollable-anchor').on('click', function (e) {
        e.preventDefault();

        jQuery('html,body').animate({
            scrollTop: jQuery(this.hash).offset().top
        }, 1000);
    });
});

var trackEvent = function (name, options) {
    trackGA(name, options);
    trackPixel(name, options);
};

var trackGA = function (name, options) {
    if (typeof gtag !== 'undefined') {
        gtag('event', name, {
            'event_category': options.category,
            'event_label': options.label,
            'value': options.value || 0
        });
    }
};

var trackPixel = function (name, options) {
    if (typeof gtag !== 'undefined') {
        fbq('track', 'Lead', {
            'event_category': options.category,
            'event_action': name,
            'value': options.value || 0,
            'currency': 'CAD'
        });
    }
};

var targetBlankExternalLinks = function () {
    var internalLinkRegex = new RegExp('^((((http:\\/\\/|https:\\/\\/)(www\\.)?)?'
        + window.location.hostname
        + ')|(localhost:\\d{4})|(\\/.*))(\\/.*)?$', '');

    jQuery('a').filter(function () {
            var href = jQuery(this).attr('href');
            return !internalLinkRegex.test(href);
        })
        .each(function () {
            jQuery(this).attr('target', '_blank');
        });
};