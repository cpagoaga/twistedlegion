jQuery(document).ready(function($) {
    var numItems = $('.et_pb_fullwidth_header').length;
    for (i = 0; i < numItems; i++) {
        var scrollMagicController = new ScrollMagic.Controller();
        // Create Animations
        var logo = $(".et_pb_fullwidth_header_extended_" + i + ".dwd-sm-fade").find('.et_pb_fullwidth_logo_image'),
            title = $(".et_pb_fullwidth_header_extended_" + i + ".dwd-sm-fade").find('h1'),
            fancyline = $(".et_pb_fullwidth_header_extended_" + i + ".dwd-sm-fade").find('hr'),
            sub = $(".et_pb_fullwidth_header_extended_" + i + ".dwd-sm-fade").find('.et_pb_fullwidth_header_subhead'),
            text = $(".et_pb_fullwidth_header_extended_" + i + ".dwd-sm-fade").find('.et_pb_header_content'),
            btn = $(".et_pb_fullwidth_header_extended_" + i + ".dwd-sm-fade").find('a'),
            headerimg = $(".et_pb_fullwidth_header_extended_" + i + ".dwd-sm-fade").find('.header-image');
        if (!$('.et_pb_fullwidth_header').hasClass("dwd-slicey-blury")) {
            var tl = new TimelineMax({ pause: true });
            tl.add("start") // add timeline label
                .fromTo(logo, 0.500, { y: '30px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
                .fromTo(title, 0.500, { y: '40px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
                .fromTo(fancyline, 0.500, { y: '41px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
                .fromTo(sub, 0.500, { y: '45px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
                .fromTo(text, 0.500, { y: '60px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
                .fromTo(btn, 0.500, { y: '80px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
                .fromTo(headerimg, 0.500, { y: '80px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
            // Create the Scene and trigger when visible
            var scene = new ScrollMagic.Scene({
                    triggerElement: ".et_pb_fullwidth_header_extended_" + i + ".dwd-sm-fade",
                    offset: 150 /* offset the trigger Npx below scene's top */
                })
                .setTween(tl)
                .addTo(scrollMagicController);
        }

    }
});