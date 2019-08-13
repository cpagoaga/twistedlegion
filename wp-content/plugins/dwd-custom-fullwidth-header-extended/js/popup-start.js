jQuery(document).ready(function($) {
    $("a.dwd-popup-content").magnificPopup({
        type: 'inline',
        // Delay in milliseconds before popup is removed
        removalDelay: 500,
        fixedContentPos: true,
        closeOnBgClick: true,
        midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        mainClass: 'mfp-with-zoom dwd-custom-popup-one-styles', // this class is for CSS animation below
        prependTo: '#page-container',
        zoom: {
            enabled: true, // By default it's false, so don't forget to enable it
            duration: 500, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function
        }
    });
    $("a.dwd-popup-content").click(function() {
        $(".mfp-bg").addClass($(".dwd-fw-popup").attr('id'));
    });
});
