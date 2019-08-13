(function($){
	var numItems = $('.dwd-aio').length;
	//var numItems = $('.et_pb_rotator_effect').length;
	for(i=0;i<numItems;i++){
		var type = $(".et_pb_aio_extended_" + i +".dwd-aio.et_pb_rotator_effect .et_pb_aio_container").data('rotator-type');
		var auto_speed = $(".et_pb_aio_extended_" + i +".dwd-aio.et_pb_rotator_effect .et_pb_aio_container").data('rotator-speed');
		$(".et_pb_aio_extended_"+ i+".dwd-aio.et_pb_rotator_effect .et_pb_aio_container .dwd-rotator").Morphext({
			animation: type,
			separator: "|",
			speed: auto_speed
		}).show();
	}
	$('.dwd-aio.dwd-hide-content').hover(
         function(){ $('.dwd-aio.dwd-hide-content .et_pb_blurb_content').addClass('animated') },
         function(){ $('.dwd-aio.dwd-hide-content .et_pb_blurb_content').removeClass('animated') }
    )
})(jQuery);
