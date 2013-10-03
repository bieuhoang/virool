;$(function() {	
	$.extend(cms.modules, {
		group: {
			id: 0,
			init: function() {
				if($('#id').length) {
					this.id = parseInt($('#id').val());
				}
				// init events
				this.initEvents();
			},
			initEvents: function() {
				// form
				cms.form('#form', {
					validate: {
						rules: {
							name: 'required'
						}
					},
					clearForm: false,
					resetForm: false,
					success: function(resp) {
						if(resp.status) {
							cms.message(resp.msg);
						} else {
							alert(resp.msg);
							cms.helper.url.redirect('admin/group');
						}
					}
				});
			}
		}
	});
	$('#navId-User').removeClass('subClosed').addClass('subOpened');
	$('#nav-Ul-Id-User').show();
	$('a#navId-User-Group').addClass('active');
	cms.modules.group.init();
});