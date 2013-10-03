$(function() {
	$.extend(cms.modules, {
		page: {
			init: function() {
				this.submiting = false;
				cms.load('jquery.fancybox.css');
				cms.load('ui/jquery.fancybox.js');
				this.initEvents();
			},
			initEvents: function() {
				var _this = this;
				// edit event
				$('a.edit-page').click(function() {
					var id = $(this).data('id');
					cms.popup(cms.helper.url.site_url('admin/page/edit_popup/'+id), function() {
						_this.initEditEvents();
					}, {
						onCleanup: function() {
							if(cms.isset(tinyMCE)) {
								tinyMCE.activeEditor.remove();
							}
						}
					});
					/*$.fancybox({
						href: cms.helper.url.site_url('admin/page/edit_popup/'+id),
						centerOnScroll: true,
						autoDimensions: false,
						width: '99%',
						height: '99%',
						title: 'Edit page #'+id,
						onComplete: function() {
							_this.initEditEvents();
						},
						onCleanup: function() {
							if(cms.isset(tinyMCE)) {
								tinyMCE.activeEditor.remove();
							}
						}
					});*/
				});
			},
			initEditEvents: function() {
				var _this = this;
				cms.helper.wysiwyg('#tinymce-content');
				cms.form('form', {
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
							window.location.reload();
						}
					}
				});
			}
		}
	});

	cms.modules.page.init();
});