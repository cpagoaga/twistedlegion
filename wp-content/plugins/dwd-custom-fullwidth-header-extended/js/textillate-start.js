jQuery(function($) {
    var numItems = $('.et_pb_fullwidth_header').length;
    for (i = 0; i < numItems; i++) {
        var checkloop = $(".et_pb_fullwidth_header_extended_" + i + " h1.tlt").attr('data-textillate-loop');
        var texttype = $(".et_pb_fullwidth_header_extended_" + i + " h1.tlt").attr('data-textillate-type');
        var timing = $(".et_pb_fullwidth_header_extended_" + i + " h1.tlt").attr('data-textillate-time');
        if (checkloop == 'false') {
            $(".et_pb_fullwidth_header_extended_" + i + " h1.tlt").textillate({
                // enable looping
                loop: false,
                // sets the minimum display time for each text before it is replaced
                minDisplayTime: timing,
                // sets the initial delay before starting the animation
                // (note that depending on the in effect you may need to manually apply 
                // visibility: hidden to the element before running this plugin)
                initialDelay: 10,
                // set whether or not to automatically start animating
                autoStart: true,
                type: texttype
            });

            $(".et_pb_fullwidth_header_extended_" + i + " h1.tlt").on('inAnimationEnd.tlt', function() {
                $(".tlt").textillate('out');
            });
        } else {
            $(".et_pb_fullwidth_header_extended_" + i + " h1.tlt").textillate({
                // enable looping
                loop: true,
                // sets the minimum display time for each text before it is replaced
                minDisplayTime: timing,
                // sets the initial delay before starting the animation
                // (note that depending on the in effect you may need to manually apply 
                // visibility: hidden to the element before running this plugin)
                initialDelay: 10,
                // set whether or not to automatically start animating
                autoStart: true,
                type: texttype
            });
        }
    }
});
