jQuery(function($) {
    var numItems = $('.et_pb_fullwidth_header').length;
    //console.log(numItems);
    for (i = 0; i < numItems; i++) {
        var pooltext = $(".et_pb_fullwidth_header_extended_" + i +" .et_pb_header_description .dwd-shuffle-text").data("dwd-shuffle-text");
        $(".et_pb_fullwidth_header_extended_" + i + " .dwd-shuffle-text").shuffleLetters({
            "step": 8,
            "fps": 20,
            "pool": pooltext
        });
    }
});