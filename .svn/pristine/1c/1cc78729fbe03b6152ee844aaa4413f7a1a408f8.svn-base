$(function(){
	$.extend(cms.modules, {
		user: {
			edit: {
				init: function() {
					this.initEvents();
				},
				initEvents: function() {
					// validate form
					cms.form(
						'#form-user-update',
						{
							validate: {
								rules: {
									'inputPaypalEmail' : {
										'email' : true
									},
									'inputCardExpirationMoth' : {
										min : 1,
										max : 12
									},
									'inputPaypalEmail' : {
										email : true
									}
								}
							},
							clearForm: false,
							resetForm: false,
							success: function(resp) {
								if(resp.resp) {
									cms.jGrowl(resp.msg, resp);
								}
							}
						}
					);
					cms.form(
						'#form-user-change-pass',
						{
							validate : {
								rules : {
									'inputPassword' : {
										required : true
									},
									'inputNewPassword' : {
										required : true
									},
									'inputConfirmNewPassword' : {
										equalTo: '#inputNewPassword'
									}
								}
							},
							clearForm: false,
							resetForm: false,
							success: function(resp) {
								cms.jGrowl(resp.msg, resp);
							}
						}
					);
				}
			}
		}

	});
	cms.load(window.site.app.base_url+'assets/css/plugins.css');
	cms.load(window.site.app.base_url+'assets/js/forms/jquery.chosen.min.js', function(){
		$('.sel-chosen').chosen();
	});
	cms.modules.user.edit.init();
	$('#navId-User').removeClass('subClosed').addClass('subOpened');
	$('#nav-Ul-Id-User').show();
	$('a#navId-User-List-User').addClass('active');
});