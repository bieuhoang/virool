$(function() {
	cms.extend(cms.modules, {
		login: {
			init: function() {
				this.initEvents();
			},
			initEvents: function() {
				cms.load('plugins.css');
				cms.load('forms/jquery.uniform.js', function() {
					$('.uniform').uniform();
				});

				// init event
				$('form').keyup(function(e){
					if(e.which == 13) {
						$('#login-button').click();
					}
				});

				// 
				$('#login-button').click(function(e) {
					e.preventDefault(); var that = this;

					if($(this).data('submiting')) return false;
					$(this).data('submiting', 1);
					
					if($('#username').val() == '' || $('#password').val() == '') {
						$.message.error('Please enter your username and password.', 'form');
						$('#username').focus();
						$.removeData(that, 'submiting');
						return false;
					}

					cms.model(
						'admin/login',
						{
							username: $('#username').val(),
							password: $('#password').val(),
							remember: $('#remember').is(':checked')?1:0
						},
						function(resp) {
							$('.alert').remove();
							if(resp.status) {
								$.message.success(resp.msg, 'form');
								setTimeout(function() {
									cms.helper.url.redirect('dashboard');
								}, 2000);
							} else {
								$.message.error(resp.msg, 'form');
								$('form').effect("shake", { times:3 }, 100);
								$('input[type=password]').val('');
								$('#username').focus();
							}
							$.removeData(that, 'submiting');
						},
						'post',
						function() {
							$.removeData(that, 'submiting');
						}
					);
				});
			}
		}		
	});

	cms.modules.login.init();
});