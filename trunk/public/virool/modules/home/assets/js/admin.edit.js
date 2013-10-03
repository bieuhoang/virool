;$(function() {	
	$.extend(cms.modules, {
		album: {
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
				cms.form('#form',{
					validate: {
						rules: {
							name: 'required'
						}
					},
					success: function(resp) {
						if(resp.status) {
							cms.message(resp.msg);
						} else {
							alert(resp.msg);
							cms.helper.url.redirect('admin/album');
						}
					}
				});
			}
		}
	});

	cms.modules.album.init();
});