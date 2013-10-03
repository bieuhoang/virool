$(function(){
	cms.form(
		'#form-activate',
		{
			validate: {
				rules: {
					user_password : {
						required : true
					},
					user_password_confirmation : {
						equalTo : "#user_password"
					}
				}
			},
			success: function(resp) {
				if (!resp.status) {
					cms.jGrowl(resp.msg, resp.option);
					return false;
				}
				cms.helper.url.redirect(resp.msg);
			}
		}
	);
})