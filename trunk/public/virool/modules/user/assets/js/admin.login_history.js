$(function() {
	// init module
	$.extend(cms.modules, {
		userLoginHistory: {
			init: function() {
				this.initEvents();
			},
			initEvents: function() {
				var _this = this;

				// init table
				cms.table.init(
					'#datatable',
					'ajax/user/login_history_index',
					{
						sortname: 'id',
						sortorder: 'desc'
					},
					function(data) {
						_this.initDatatableEvents();
					}
				);
			},
			initDatatableEvents: function() {

			}
		}
	});

	cms.modules.userLoginHistory.init();

});