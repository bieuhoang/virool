$(function() {
	$.extend(cms.modules, {
		itemStatus: {
			init: function() {
				this.ids = new Array();
				this.initEvents();
			},
			initEvents: function() {
				var _this = this;

				// table
				cms.table.init(
					'#datatable',
					'ajax/item/admin_status_index',
					{
						searchitems: [
							{name: 'name', display: 'Name'}
						],
						sortname: 'id',
						sortorder: 'desc'
					},
					function(resp) {
						_this.initDatatableEvents();
					}
				);

				// add events
				$('a.action-add').click(function() {
					cms.helper.url.redirect('admin/item/edit_status');
					return false;
				});

				// delete events
				$('a.action-delete').click(function() {
					$('input.uniform:checked', '#datatable tbody').each(function() {
						_this.ids.push($(this).val());
					});
					if(_this.ids.length == 0) {
						alert('Please choose at least item before delete.'); return false;
					}
					
					cms.confirm('Are you sure you want to delete item selected?', function() {
						cms.model('ajax/item/delete', {id: _this.ids}, function(resp) {
							if(resp.status) {
								cms.message(resp.msg);
								cms.table.reload();
								_this.ids = new Array();
							} else {
								alert(resp.msg);
								window.location.reload();
							}
						});
					});

					return false;
				});
			},
			initDatatableEvents: function() {
				// edit status
				$('a.edit-item', '#datatable').click(function() {
					var id = $(this).data('id');
					cms.helper.url.redirect('admin/item/edit_status/'+id);
					return false;
				});

				// change status
				$('.change-status-item').click(function() {
					var id = $(this).data('id');
					cms.model('ajax/item/change_status_status', {id: id}, function(resp) {
						if(resp.status) {
							cms.message(resp.msg);
							cms.table.reload();
						} else {
							alert(resp.msg);
							window.location.reload();
						}
					});
				});

				// delete
				$('a.delete-item', '#datatable').click(function() {
					var id = $(this).data('id');
					cms.confirm('Are you sure you want to delte this item?', function() {
						cms.model('ajax/item/delete_status', {id: id}, function(resp) {
							if(resp.status) {
								cms.message(resp.msg);
								cms.table.reload();
							} else {
								alert(resp.msg);
								window.location.reload();
							}
						});
					});
				});
			}
		}
	});

	cms.modules.itemStatus.init();
});