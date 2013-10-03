;$(document).ready(function() {
	$.extend(cms.modules, {
		setting: {
			init: function() {
				this.init_events();
			},
			init_events: function() {
				cms.validate('form', {
					rules: {

					},
					submitHandler: function(form) {
						var form_data = $(form).serialize();

						cms.model('ajax/setting/update', form_data, function(resp) {
							if(resp.status) {
								cms.message(resp.msg);
							}
						});
					}
				});
			}
		}
	});

	cms.modules.setting.init();
});