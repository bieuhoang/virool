(function($) {

	$('#see-what-the-buzz').click(function() {
		cms.load('jquery.fancybox.css');
		cms.load('ui/jquery.fancybox.js', function() {
			$.fancybox({
				content: 'Content of fancybox',
				width: 400,
				height: 300,
				autoDimensions: false,
				title: 'See what the buzz is about'
			});
		});
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

})(jQuery);