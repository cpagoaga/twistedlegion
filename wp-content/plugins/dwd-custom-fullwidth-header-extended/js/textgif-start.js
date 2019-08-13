jQuery(function($) {
	var textgifItems = $('.et_pb_fullwidth_header').length;
    for(i=0;i<textgifItems;i++){
        var gifbg = $(".et_pb_fullwidth_header_extended_" + i +" .et_pb_header_description").data('textgif-bg');
        $(".et_pb_fullwidth_header_extended_"+ i+" .et_pb_header_description h1.textgif").textHoler({
            background: gifbg,
            repeat: "repeat"
        });
    }
});