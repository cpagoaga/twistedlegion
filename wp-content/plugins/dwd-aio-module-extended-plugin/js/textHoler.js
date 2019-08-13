/**
 * TextHoler.js
 * https://github.com/diegodalbosco/TextHoler.js
 * MIT licensed
 *
 * Copyright (C) 2015 Diego Dal Bosco
 */

(function($) {
	$.fn.textHoler = function(options) {
		var settings = $.extend({
			repeat: "repeat"
		}, options );
		if(typeof options.background == 'undefined') { 
			console.log("Damn! I need an image to use for the background!");
			return this;
		} else {
			var img = "url(" + options.background + ") ";
		}
		this.css('background', img+settings.repeat+" center center").css('-webkit-background-clip', 'text').css('background-clip', 'text').css('-moz-background-clip', 'text').css('background-size', 'cover').css('-webkit-background-size', 'cover').css('-moz-background-size', 'cover').css('-o-background-size', 'cover');
		return this;
	};
}(jQuery));