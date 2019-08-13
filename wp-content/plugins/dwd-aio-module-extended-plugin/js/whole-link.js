jQuery(document).ready(function($) {
    var aio = $('.dwd-aio').length;
    for (i = 0; i < aio; i++) {
        var normalurl = $(".et_pb_aio_extended_" + i + ".dwd-aio.dwd-whole-link").data('dwd-link');
        var videourl = $(".et_pb_aio_extended_" + i + ".dwd-aio.dwd-whole-link").data('dwd-video');
        var video = $(".et_pb_aio_extended_" + i + ".dwd-aio");
    	if ($(video).hasClass('dwd-popup-video')) {
    		$(".et_pb_aio_extended_" + i + ".dwd-aio.dwd-whole-link .et_pb_blurb_content").wrap("<a class='dwd-whole-link-window dwd-popup-video' href='" + videourl + "'></a>");
    	} else {
        	$(".et_pb_aio_extended_" + i + ".dwd-aio.dwd-whole-link .et_pb_blurb_content").wrap("<a href='" + normalurl + "' class='dwd-whole-link-window'></a>");
    	};
        $('.dwd-aio.dwd-new-window a.dwd-whole-link-window').attr('target', '_blank');
    }
});
