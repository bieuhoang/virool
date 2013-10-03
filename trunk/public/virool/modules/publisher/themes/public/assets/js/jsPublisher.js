$(function(){
	$('#relevant-content-slides').bxSlider({
	    slideWidth: 520,
	    minSlides: 1,
	    moveSlides: 1,
	    controls: false,
	    auto : true,
	    speed : 2,
	    mode : 'fade'
	});
	$('#user_sites_attributes').focus(function(){
		$('#divId-user_sites_attributes').show(500);
	});
	$('#new_user').submit(function() {
		var email = $('#user_email').val(), capchar = $('#user_captcha').val(), message = '';
		if (capchar=='') {
			cms.jGrowl('Please enter capchar.',{position: 'top-right', theme : 'jGrowl_error'});
			return false;
		}
		if ($('#user_captcha_key').val()!=capchar) {
			cms.jGrowl('Captcha is not correct.',{position: 'top-right', theme : 'jGrowl_error'});
			return false;
		}
		if ($('#user_sites_attributes').val()=='') {
			message = 'Sites url can\'t be blank.';
		}
		if (email=='') {
			if (cms.isset(message)) {
				message += '<br/>Email can\'t be blank.';
			} else {
				message = 'Email can\'t be blank.';
			}
		}
		if ($('#user_password').val()=='') {
			if (cms.isset(message)) {
				message += '<br/>Password can\'t be blank.';
			} else {
				message = 'Password can\'t be blank.';
			}
		}
		if(! cms.is_email(email)) {
			if (cms.isset(message)) {
				message += '<br/>Email address is not valid.';
			} else {
				message = 'Email address is not valid.';
			}
		}
		if (cms.isset(message)) {
			cms.jGrowl(message,{position: 'top-right', theme : 'jGrowl_error'});
			return false;
		}
		cms.jsloading();		
		cms.model(
			'ajax/publisher/register',
			{
				action 	: 'register',
				option 	: {
					capchar 	: capchar,
					capchar_root: $('#user_captcha_key').val()
				},
				user 	: {
					'email' : $('#user_email').val(),
					'url' 	: $('#user_sites_attributes').val(),
					'pass' 	: $('#user_password').val(),
					'group' : 'Publisher'
				}
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