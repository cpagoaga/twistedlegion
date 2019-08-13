jQuery(function($) {
    var textgifItems = $('.dwd-aio').length;
    for (i = 0; i < textgifItems; i++) {
        var gifbg = $(".et_pb_aio_extended_" + i + " .aio-wrap .et_pb_aio_container").attr('data-textgif-bg');
        $(".et_pb_aio_extended_" + i + " .aio-wrap .et_pb_aio_container h3.textgif").textHoler({
            background: gifbg,
            repeat: "repeat"
        });
    }
});