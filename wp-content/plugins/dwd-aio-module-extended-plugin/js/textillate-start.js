jQuery(function($) {
	var numItems = $('.dwd-aio').length;
    $('.tlt').textillate({
        // enable looping
        loop: true,
        // sets the minimum display time for each text before it is replaced
        minDisplayTime: 1000,
        // sets the initial delay before starting the animation
        // (note that depending on the in effect you may need to manually apply 
        // visibility: hidden to the element before running this plugin)
        initialDelay: 10,
        // set whether or not to automatically start animating
        autoStart: true
    });
});
