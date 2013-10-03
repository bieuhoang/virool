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
						'#form-user-add',
						{
							validate: {
								rules : {
									'inputEmail' : {
										required : true,
										email : true
									},
									'inputPassword' : {
										required : true,
										minlength : 6
									},
									'inputConfirmPassword' : {
										equalTo: '#inputPassword'
									},
									'inputPaypalEmail' : {
										email : true
									}
								}
							},
							success: function(resp) {
								if(resp.resp) {
									cms.jGrowl(resp.msg, resp);
								} else {
									alert(resp.msg);
								}
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
	$('a#navId-User-Add-News').addClass('active');
});