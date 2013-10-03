(function($) {
	cms.muser = {};
	cms.muser.signup = {
		init: function() {
			this.initEvents();
		},
		initEvents: function() {
			var _this = this;
			$('.advertiser, .publisher', '.question').click(function() {
				var className = $(this).attr('class');
				if($(this).hasClass('active')) {
					return false;
				}
				$('.advertiser, .publisher', '.question').removeClass('active').find('span').removeClass('gray');
				$(this).addClass('active').find('span').addClass('gray');
				$('.advertiser-form, .publisher-form').hide();
				$('.'+className+'-form').show();
			});

			// advertiser form
			$.each(['#advertiser-form', '#publisher-form'], function(id, el) {
				cms.form(el, {
					validate: {
						rules: {
							'user[email]': {
								required: true,
								email: true
							},
							'user[password]': 'required'
						},
						messages: {
							'user[email]': {
								required: '',
								email: ''
							},
							'user[password]': ''
						}
					},
					url: cms.helper.url.site_url('ajax/user/signup'),
					success: function(resp) {
						cms.jGrowl(resp.msg, resp);
						if (resp.status) {
							setTimeout(function(){
								cms.helper.url.redirect(resp.url);
							}, 1000)
						}
					}
				});
			});
		}
	}
	cms.muser.signup.init();

})(jQuery);