;$(function() {	
	$.extend(cms.modules, {
		page: {
			id: 0,
			init: function() {
				if($('#id').length) {
					this.id = parseInt($('#id').val());
				}
				// init events
				this.initEvents();
			},
			initEvents: function() {
				// init form
				cms.form('#form', {
					validate: {
						rules: {
							name: 'required',
							content: 'required'
						}
					},
					success: function(resp) {
						if(resp.status) {
							cms.message(resp.msg);
						} else {
							alert(resp.msg);
							cms.helper.url.redirect('admin/page');
						}
					}
				});
			}
		}
	});

	cms.modules.page.init();
});