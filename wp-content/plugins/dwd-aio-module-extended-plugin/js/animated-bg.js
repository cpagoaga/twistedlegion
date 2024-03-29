// Credits https://codepen.io/quasimondo/pen/lDdrF
jQuery(document).ready(function($) {
    var colors = new Array(
        [62, 35, 255], [60, 255, 60], [255, 35, 98], [45, 175, 230], [255, 0, 255], [255, 128, 0]);

    var step = 0;
    //color table indices for: 
    // current color left
    // next color left
    // current color right
    // next color right
    var colorIndices = [0, 1, 2, 3];
    //var gradientSpeed = 0.002;


    function updateGradient() {

        if ($ === undefined) return;

        var c0_0 = colors[colorIndices[0]];
        var c0_1 = colors[colorIndices[1]];
        var c1_0 = colors[colorIndices[2]];
        var c1_1 = colors[colorIndices[3]];

        var istep = 1 - step;
        var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
        var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
        var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
        var color1 = "rgb(" + r1 + "," + g1 + "," + b1 + ")";
        //var color1 = "rgba(" + r1 + "," + g1 + "," + b1 + ",0.85)";

        var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
        var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
        var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
        var color2 = "rgb(" + r2 + "," + g2 + "," + b2 + ")";
        //var color2 = "rgba(" + r2 + "," + g2 + "," + b2 + ",0.85)";

		
		var numItems = $('.dwd-aio').length;
		
		for(i=0;i<numItems;i++){

            var gradientSpeed = $(".et_pb_aio_extended_"+ i +".dwd-aio.et_pb_bg_animated.et_pb_animated_solid_bg").data('animated-gradient-speed');
            
			if(typeof gradientSpeed!=='undefined'){
                console.log(i+'='+gradientSpeed+'step='+step);
                $(".et_pb_aio_extended_"+ i +".dwd-aio.et_pb_bg_animated.et_pb_animated_solid_bg .gradient").css({
                    background: "-webkit-gradient(linear, left top, right top, from(" + color1 + "), to(" + color2 + "))"
                }).css({
                    background: "-moz-linear-gradient(left, " + color1 + " 0%, " + color2 + " 100%)"
                }).css({
                    background: "-ms-linear-gradient(left, " + color1 + " 0%, " + color2 + " 100%)"
                }).css({
                    background: "-o-linear-gradient(left, " + color1 + " 0%, " + color2 + " 100%)"
                }).css({
                    background: "-webkit-linear-gradient(left, " + color1 + " 0%, " + color2 + " 100%)"
                }).css({
                    filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='" + color1 + "', endColorstr='" + color2 + "', GradientType=1)"
                });

    			step += gradientSpeed;
    			if (step >= 1) {
    				step %= 1;
    				colorIndices[0] = colorIndices[1];
    				colorIndices[2] = colorIndices[3];

    				//pick two new target color indices
    				//do not pick the same as the current one
    				colorIndices[1] = (colorIndices[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
    				colorIndices[3] = (colorIndices[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;

    			}
            }
		}
    }

    setInterval(updateGradient, 20);
});
