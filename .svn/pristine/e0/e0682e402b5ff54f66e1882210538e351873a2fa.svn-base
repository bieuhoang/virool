$(function() {
	
	cms.modules.editStatus = {
		init: function() {
			this.id = $('#id').val(); this.id = parseInt(this.id);
			this.initEvents();
		},
		initEvents: function() {
			var _this = this;

			// color picker
			cms.load('ui/jquery.colorpicker.js', function() {
				$('#value').ColorPicker({
					onSubmit: function(hsb, hex, rgb, el) {
						$(el).val('#'+hex);
						$(el).ColorPickerHide();
					},
					onBeforeShow: function () {
						$(this).ColorPickerSetColor(this.value);
					}
				});
			});

			var formOptions = {
				validate: {
					rules: {
						name: 'required',
						value: 'required',
						sort: 'number'
					}
				},
				success: function(resp) {
					// if user is logged out
					if(cms.isset(resp.is_logged_out) && resp.is_logged_out == true) {
						alert(resp.msg);
						cms.helper.url.redirect('admin/login');
						return false;
					}

					// status?
					if(resp.status) {
						cms.message(resp.msg);
					} else {
						alert(resp.msg);
						cms.helper.url.redirect('admin/item/status');
					}
				}
			}
			if(this.id) {
				formOptions.clearForm = false;
				formOptions.resetForm = false;
			}
			// form
			cms.form('#form', formOptions);
		}
	}

	cms.modules.editStatus.init();

});