//Template Name: Sanatorium - dispensary SP-METALLURG
$(window).on('load resize',function(){
	setTimeout(function(){
	var $preloader = $('#page-preloader'),
    $spinner = $preloader.find('.cssload-square');
    $spinner.fadeOut();
    $preloader.delay(300).fadeOut('slow');
	});
	if (jQuery(window).width() > 1199) {jQuery('#top-slider').css('background-image', 'url(wp-content/themes/SPMetallurg/images/zastavka.jpg)');}
	else {jQuery('#top-slider').css('background','#fefefe');}
});

$(document).ready(function(){	
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) { $.smoothScroll();}
		} catch(err) {
	}
		
	$(function(f){
    var element = f('#cur_up');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 260 ? 'In': 'Out')](900);           
    });
	});	

	$('a[href^="#"]').click( function(){
	    var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
	    $('html, body').animate({ scrollTop: $(scroll_el).offset().top-90 }, 1000);
        }
	    return false;
    });
});