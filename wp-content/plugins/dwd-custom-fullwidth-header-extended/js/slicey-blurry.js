jQuery(document).ready(function($) {
    var slicey = $(".dwd-fwe.dwd-slicey-blury .dwd-slicey-type-one"),
        sliceyboxone = $(".dwd-fwe.dwd-slicey-blury .dwd-slicey-type-one .dwd-slicey-box"),
        sliceyboxtwo = $(".dwd-fwe.dwd-slicey-blury .dwd-slicey-type-two .dwd-slicey-box"),
        logo = $(".dwd-fwe.dwd-slicey-blury .header-content .et_pb_fullwidth_logo_image"),
        title = $(".dwd-fwe.dwd-slicey-blury .header-content h1"),
        subhead = $(".dwd-fwe.dwd-slicey-blury .header-content .et_pb_fullwidth_header_subhead"),
        fancyline = $(".dwd-fwe.dwd-slicey-blury .header-content .fancyline"),
        content = $(".dwd-fwe.dwd-slicey-blury .header-content .et_pb_header_content"),
        headerimg = $(".dwd-fwe.dwd-slicey-blury .header-image img"),
        btn = $(".dwd-fwe.dwd-slicey-blury .header-content .et_pb_button"),
        scroll = $(".dwd-fwe.dwd-slicey-blury .et_pb_fullwidth_header_scroll"),
        EnterboxTween = TweenMax.staggerTo(sliceyboxone, 1.2, { force3D: false, scale: 1.1, autoAlpha: 1, delay: 0.1, ease: Power4.easeOut }, 0.2),
        leavelogo = TweenMax.from(logo, 1, { force3D: false, scale: 1.1, autoAlpha: 0, delay: 1, ease: Power4.easeIn }),
        leavetitle = TweenMax.from(title, 1, { force3D: false, scale: 1.1, autoAlpha: 0, delay: 1, ease: Power4.easeIn }),
        leavesubhead = TweenMax.from(subhead, 1, { force3D: false, scale: 1.1, autoAlpha: 0, delay: 1.15, ease: Power4.easeIn }),
        leaveline = TweenMax.from(fancyline, 1, { force3D: false, scale: 1.1, autoAlpha: 0, delay: 1.2, ease: Power4.easeIn }),
        leavecontent = TweenMax.from(content, 1, { force3D: false, scale: 1.1, autoAlpha: 0, delay: 1.3, ease: Power4.easeIn }),
        leaveimg = TweenMax.from(headerimg, 1, { force3D: false, scale: 1.1, autoAlpha: 0, delay: 1.4, ease: Power4.easeIn }),
        leavebtn = TweenMax.from(btn, 1, { force3D: false, scale: 1.1, autoAlpha: 0, delay: 1.4, ease: Power4.easeIn }),
        leavescroll = TweenMax.from(scroll, 1, { force3D: false, scale: 1.1, autoAlpha: 0, delay: 1.5, ease: Power4.easeIn }),
        //boxTween = TweenMax.staggerFromTo(sliceyboxone, 1.2, { force3D: false, scale: 0.95, autoAlpha: 0, delay: 0.1, ease: Power4.easeOut }, { force3D: false, scale: 1.1, autoAlpha: 1 }, 0.2),
        controller = new ScrollMagic.Controller();

    //$(sliceybox).add(logo).add(title).add(subhead).add(fancyline).add(content).add(headerimg).add(btn).add(scroll).css("visibility", "hidden");
    if ($('.dwd-fwe.dwd-slicey-blury').hasClass('dwd-sm-fade')) {

        var EnterboxScene = new ScrollMagic.Scene({
                triggerElement: ".et_pb_fullwidth_header_extended_" + i + ".dwd-fwe.dwd-slicey-blury .dwd-slicey-type-one .dwd-slicey-box",

                triggerHook: "onEnter",
                offset: -$(window).height() * 0.7
            })
            .setTween(EnterboxTween)
            .addTo(controller);

        var LeaveLogoScene = new ScrollMagic.Scene({
                triggerElement: '.dwd-fwe.dwd-slicey-blury',
                triggerHook: "onEnter",
                offset: 400
            })
            .setTween(leavelogo)
            .addTo(controller);

        var LeaveTitleScene = new ScrollMagic.Scene({
                triggerElement: '.dwd-fwe.dwd-slicey-blury',
                triggerHook: "onEnter",
                offset: 400
            })
            .setTween(leavetitle)
            .addTo(controller);

        var LeaveSubScene = new ScrollMagic.Scene({
                triggerElement: '.dwd-fwe.dwd-slicey-blury',
                triggerHook: "onEnter",
                offset: 400
            })
            .setTween(leavesubhead)
            .addTo(controller);

        var LeaveLineScene = new ScrollMagic.Scene({
                triggerElement: '.dwd-fwe.dwd-slicey-blury',
                triggerHook: "onEnter",
                offset: 400
            })
            .setTween(leaveline)
            .addTo(controller);

        var LeaveContentScene = new ScrollMagic.Scene({
                triggerElement: '.dwd-fwe.dwd-slicey-blury',
                triggerHook: "onEnter",
                offset: 400
            })
            .setTween(leavecontent)
            .addTo(controller);

        var LeaveIMGScene = new ScrollMagic.Scene({
                triggerElement: '.dwd-fwe.dwd-slicey-blury',
                triggerHook: "onEnter",
                offset: 400
            })
            .setTween(leaveimg)
            .addTo(controller);

        var LeaveBtnScene = new ScrollMagic.Scene({
                triggerElement: '.dwd-fwe.dwd-slicey-blury',
                triggerHook: "onEnter",
                offset: 400
            })
            .setTween(leavebtn)
            .addTo(controller);

        var LeaveScrollScene = new ScrollMagic.Scene({
                triggerElement: '.dwd-fwe.dwd-slicey-blury',
                triggerHook: "onEnter",
                offset: 400
            })
            .setTween(leavescroll)
            .addTo(controller);
    } else {
        EnterboxTween
        leavelogo
        leavetitle
        leavesubhead
        leaveline
        leavecontent
        leaveimg
        leavebtn
        leavescroll
    }

    if ($('.dwd-fwe.dwd-slicey-blury .dwd-slicey-wrap').hasClass("dwd-slicey-type-two")) {
        $.fn.parallax = function(resistance, mouse) {
            $el = $(this);
            TweenLite.to($el, 1, {
                x: -((mouse.clientX - (window.innerWidth / 2)) / resistance),
                y: -((mouse.clientY - (window.innerHeight / 2)) / resistance)
            });

        };
        TweenMax.to(".dwd-fwe.dwd-slicey-blury .dwd-slicey-type-two .dwd-slicey-box-one", 1, { force3D: false, autoAlpha: 0.2, delay: 0.1, ease: Power4.easeOut, x: "-15" });
        TweenMax.to(".dwd-fwe.dwd-slicey-blury .dwd-slicey-type-two .dwd-slicey-box-two", 1.5, { force3D: false, autoAlpha: 0.2, delay: 0.15, ease: Power4.easeOut, x: "-30" });
        $(document).mousemove(function(e) {
            $('.dwd-slicey-wrap.dwd-slicey-type-two .dwd-slicey-box-one').parallax(20, e);
            $('.dwd-slicey-wrap.dwd-slicey-type-two .dwd-slicey-box-two').parallax(40, e);
        });
    }

    function myCompleteAll() {
        TweenMax.to(".dwd-slicey-box", 1, { timeScale: 0.004, scale: 2, ease: Power4.easeOut });

    }

});
