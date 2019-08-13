(function($){
    var numItems = $('.et_pb_fullwidth_header').length;
    //console.log(numItems);
    for (i = 0; i < numItems; i++) {
        var $textforscroll = $(".et_pb_fullwidth_header_extended_" + i +".et_pb_typing_effect .dwd-typed").text();
        var typingspeed = $(".et_pb_fullwidth_header_extended_" + i +" .et_pb_header_description").data('typing-speed');
        var startdelay = $(".et_pb_fullwidth_header_extended_" + i +" .et_pb_header_description").data('typing-delay');
        var backdelay = $(".et_pb_fullwidth_header_extended_" + i +" .et_pb_header_description").data('typing-backdelay');
        var typingloop = $(".et_pb_fullwidth_header_extended_" + i +" .et_pb_header_description").data('typing-loop');
        var arr = $textforscroll.split('|');
        $(".et_pb_fullwidth_header_extended_" + i + ".et_pb_typing_effect .dwd-typing").typed({
            strings: arr,
            startDelay: startdelay,
            loop: typingloop,
            typeSpeed: typingspeed,
            // timedelay before backspacing
            backDelay: backdelay,
            contentType: 'html'
        });
    }
})(jQuery);