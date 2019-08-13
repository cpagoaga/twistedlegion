jQuery(document).ready(function($) {
  var hoverbtn = $('.et_pb_fullwidth_header').length;
    for (i = 0; i < hoverbtn; i++) {
        var btn = $(".et_pb_fullwidth_header_extended_" + i + " a.et_pb_button");
        $(btn).hover(function(){ 
           if ($(this).hasClass('animated')){
              $(this).removeClass('animated')
           }
           if ($(this).hasClass('dwd-animation')){
              $(this).removeClass('dwd-animation')
           }
        })
    }
});
