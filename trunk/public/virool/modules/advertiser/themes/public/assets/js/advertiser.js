$(function(){
	$('#analytics-slides').bxSlider({
	    slideWidth: 520,
	    minSlides: 1,
	    moveSlides: 1,
	    controls: false,
	    slideMargin: 10
	});
	$('#promotion-carousel').bxSlider({
	    slideWidth: 1060,
	    minSlides: 2,
	    
	    moveSlides: 1,
	    slideMargin: 10,
	    pager : false
	});
	$('#start-campain-form').submit(function() {
		var email = $('#user_email').val();
		if(! cms.is_email(email)) {
			cms.jGrowl('Email address is not valid',{position: 'top-right', theme : 'jGrowl_error'});
			return false;
		}
		cms.jsloading();		
		cms.model(
			'ajax/home/register',
			{
				action : 'register',
				email : $('#user_email').val()
			},
			function(resp) {
				cms.jsloading(true);
				if (!resp.status) {
					cms.jGrowl(resp.msg, resp.option);
				} else {
					cms.helper.url.redirect(resp.msg);
				}
			}
		);
		return false;
	});
})