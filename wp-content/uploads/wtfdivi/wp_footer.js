jQuery(function($){var offset=550;var $header=$('#main-header');var addclass=$.fn.addClass;$.fn.addClass=function(){var result=addclass.apply(this,arguments);if($(window).scrollTop()<offset){$header.removeClass('et-fixed-header');}
return result;}
$header.removeClass('et-fixed-header');$('body').waypoint({handler:function(d){$header.toggleClass('et-fixed-header',(d==='down'));},offset:-offset});});