jQuery(function($) {
    var numItems = $('.dwd-aio').length;
    //console.log(numItems);
    for (i = 0; i < numItems; i++) {
        var pooltext = $(".et_pb_aio_extended_" + i +" .dwd-title-tag .dwd-shuffle-text").data("dwd-shuffle-text");
        $(".et_pb_aio_extended_" + i + " .dwd-title-tag .dwd-shuffle-text").shuffleLetters({
            "step": 8,
            "fps": 20,
            "pool": pooltext
        });
    }
});