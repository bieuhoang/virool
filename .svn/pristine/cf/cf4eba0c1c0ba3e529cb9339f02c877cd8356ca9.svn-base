$(function() {
	cms.validate('#form', {
		validate: {
			rules: {},
			messages: {}
		},
		success: function(resp) {
			if(resp.status) {
				cms.message('Form submited. Website redirecting...');
				cms.run(function() {
					$('#paypal-form').html(resp.formPaypal).hide();
					cms.run(function() {
						$('#paypal-form form').submit();
					}, 500);
				});
			}
		}
	});

	$('#tab-1').addClass('active');
});