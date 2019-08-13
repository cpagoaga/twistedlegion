(function($) {
    var numItems = $('.et_pb_fullwidth_header').length;
    for (i = 0; i < numItems; i++) {
        var type = $(".et_pb_fullwidth_header_extended_" + i + ".et_pb_rotator_effect .et_pb_header_description").data('rotator-type');
        var auto_speed = $(".et_pb_fullwidth_header_extended_" + i + ".et_pb_rotator_effect .et_pb_header_description").data('rotator-speed');
        $(".et_pb_fullwidth_header_extended_" + i + ".et_pb_rotator_effect .et_pb_header_description .dwd-rotator").Morphext({
            animation: type,
            separator: "|",
            speed: auto_speed
        }).show();
    }
})(jQuery);
