$(function() {
	cms.validate('#form', {
		validate: {
			rules: {
				'form[name]': 'required',
				'form[surname]': 'required',
				'form[email]': {
					required: true,
					email: true,
				},
				'form[company]': 'required'
			},
			messages: {}
		},
		success: function(resp) {
			if(resp.status) {
				alert('Form submited');
			}
		}
	});

	$('#tab-2').addClass('active');
});