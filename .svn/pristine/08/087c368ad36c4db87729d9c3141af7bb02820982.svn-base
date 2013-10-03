$(function(){
	$('.selec-chosen').chosen();
	$.extend(cms.modules, {
		site: {
			edit: {
				init: function() {
					this.initEvents();
				},
				initEvents: function() {
					// validate form
					cms.form(
						'#form-site-update',
						{
							validate: {
								rules: {}
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
				}
			}
		}
	});
	cms.modules.site.edit.init();
	$('#navId-User').removeClass('subClosed').addClass('subOpened');
	$('#nav-Ul-Id-User').show();
	$('a#navId-User-my-site').addClass('active');
})