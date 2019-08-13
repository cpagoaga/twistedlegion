(function($) {
    $.fn.parallax = function(resistance, mouse) {
        $el = $(this);
        TweenLite.to($el, 0.2, {
            x: -((mouse.clientX - (window.innerWidth / 2)) / resistance),
            y: -((mouse.clientY - (window.innerHeight / 2)) / resistance)
        });

    };

    $(document).mousemove(function(e) {
        if ($(window).width() > 768) {
            $('.dwd-interactive-bg').parallax(-30, e);
            $('.dwd-fwe .header-content').parallax(150, e);
            if ($('dwd-fwe.dwd-slicey-blury.dwd-interactive')) {
                $('.dwd-fwe.dwd-slicey-blury .header-content').parallax(0, e);
                $('.dwd-fwe.dwd-slicey-blury .dwd-interactive-bg').parallax(0, e);
                $('.dwd-fwe.dwd-slicey-blury .dwd-slicey-box').parallax(150, e);
            }
        }
    });

}(jQuery));
