jQuery(document).ready(function($) {
    var aio = $('.dwd-aio').length;
    for (i = 0; i < aio; i++) {

        // Init ScrollMagic Controller
        var scrollMagicController = new ScrollMagic.Controller();

        // Create Animations
        var aiowrap = $(".et_pb_aio_extended_" + i + ".dwd-sm-fade"),
            icon = $(".et_pb_aio_extended_" + i + ".dwd-sm-fade").find('.et_pb_main_blurb_image'),
            title = $(".et_pb_aio_extended_" + i + ".dwd-sm-fade").find('h3'),
            fancyline = $(".et_pb_aio_extended_" + i + ".dwd-sm-fade").find('.fancyline'),
            bgtext = $(".et_pb_aio_extended_" + i + ".dwd-sm-fade").find('.background-text'),
            text = $(".et_pb_aio_extended_" + i + ".dwd-sm-fade").find('.et_pb_blurb_content p');
            button = $(".et_pb_aio_extended_" + i + ".dwd-sm-fade").find('.et_pb_blurb_content .et_pb_button');

        var tl = new TimelineMax({ pause: true });
        tl.add("start") // add timeline label
            .fromTo(aiowrap, 0.500, { y: '20px', opacity: 0,scale:.98 }, { y: 0, opacity: 1, ease: Power2.EaseInOut, scale:1 }, "start")
            .fromTo(icon, 0.500, { y: '30px', opacity: 0,scale:.98 }, { y: 0, opacity: 1, ease: Power2.EaseInOut, scale:1 }, "start")
            .fromTo(title, 0.500, { y: '40px', opacity: 0,scale:.98 }, { y: 0, opacity: 1, ease: Power2.EaseInOut, scale:1 }, "start")
            .fromTo(fancyline, 0.500, { y: '41px', opacity: 0,scale:.98 }, { y: 0, opacity: 1, ease: Power2.EaseInOut, scale:1 }, "start")
            .fromTo(bgtext, 0.500, { y: '41px',scale:.98 }, { y: 0, ease: Power2.EaseInOut, scale:1 }, "start")
            .fromTo(text, 0.500, { y: '60px', opacity: 0,scale:.98 }, { y: 0, opacity: 1, ease: Power2.EaseInOut, scale:1 }, "start")
            .fromTo(button, 0.500, { y: '65px', opacity: 0,scale:.98 }, { y: 0, opacity: 1, ease: Power2.EaseInOut, scale:1 }, "start")

        // Create the Scene and trigger when visible
        var scene = new ScrollMagic.Scene({
            triggerElement: ".et_pb_aio_extended_" + i + ".dwd-sm-fade",
            triggerHook: 'onEnter',
            offset: 100 /* offset the trigger Npx below scene's top */
        })
        .setTween(tl)
        .addTo(scrollMagicController);
    }
});