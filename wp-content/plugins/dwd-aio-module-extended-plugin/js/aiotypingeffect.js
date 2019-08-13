(function($) {
        var aio = $('.dwd-aio').length;
        //$(".dwd-aio.et_pb_typing_effect .et_pb_aio_container .dwd-typing").each(function() {
        for (i = 0; i < aio; i++) {
            var $textforscroll = $(".et_pb_aio_extended_" + i + ".dwd-aio.et_pb_typing_effect .et_pb_aio_container .dwd-typed").text();
            //var $textforscroll = $(".et_pb_aio_extended_" + i +".dwd-aio.et_pb_typing_effect .et_pb_aio_container h3").data('typing-strings');
            var typingspeed = $(".et_pb_aio_extended_" + i + ".dwd-aio.et_pb_typing_effect .et_pb_aio_container").data('typing-speed');
            var startdelay = $(".et_pb_aio_extended_" + i + ".dwd-aio.et_pb_typing_effect .et_pb_aio_container").data('typing-delay');
            var backdelay = $(".et_pb_aio_extended_" + i + ".dwd-aio.et_pb_typing_effect .et_pb_aio_container").data('typing-backdelay');
            var typingloop = $(".et_pb_aio_extended_" + i + ".dwd-aio.et_pb_typing_effect .et_pb_aio_container").data('typing-loop');
            var arr = $textforscroll.split('|');
            $(".et_pb_aio_extended_" + i + ".dwd-aio.et_pb_typing_effect .et_pb_aio_container .dwd-typing").typed({
                strings: arr,
                startDelay: startdelay,
                loop: typingloop,
                typeSpeed: typingspeed,
                backDelay: backdelay
            });
        }
    //});
})(jQuery);