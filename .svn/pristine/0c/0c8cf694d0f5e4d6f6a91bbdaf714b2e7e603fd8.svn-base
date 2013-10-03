(function($) {
		cms.form('form', {
			url : 'user/login',
			validate : {
				rules: {
	                user_devise_login: { 
	                		required: true,
	                		email : true
	                	},
	                user_password: { required: true }
	            }
			},
			success : function(respone){
				if ( respone.status ) {
					setTimeout(function() {
						cms.helper.url.redirect('user');
					}, 200);
				}
			}
		});
})(jQuery);