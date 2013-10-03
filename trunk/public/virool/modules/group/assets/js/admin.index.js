$(function() {
	cms.modules.admin = {
		init: function() {
			this.ids = new Array();
			this.initEvents();
		},
		initEvents: function() {
			var _this = this;

			// table
			cms.table.init(
				'#datatable',
				'ajax/group/admin_index',
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
				cms.helper.url.redirect('admin/group/edit');
			});

			// delete events
			$('a.action-delete').click(function() {
				$('input.uniform:checked', '#datatable tbody').each(function() {
					_this.ids.push($(this).val());
				});
				if(_this.ids.length == 0) {
					alert('Please choose at least group before delete.'); return false;
				}
				
				cms.confirm('Are you sure you want to delete group selected?', function() {

					cms.model('ajax/group/delete', {id: _this.ids}, function(resp) {
						if(resp.status) {
							cms.message(resp.msg);
							$('#datatable').flexReload();
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
			// edit
			$('a.edit-item', '#datatable').click(function() {
				var id = $(this).data('id');
				cms.helper.url.redirect('admin/group/edit/'+id);
			});

			// delete
			$('a.delete-item', '#datatable').click(function() {
				var id = $(this).data('id');
				cms.confirm('Are you sure you want to delete this group?', function() {
					cms.model('ajax/group/delete', {id: id}, function(resp) {
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

			// change status
			$('a.change-status').click(function() {
				var id = $(this).data('id'), action = $(this).data('action');
				cms.model('ajax/group/change_status', {
					id: id,
					action: action
				}, function(resp) {
					if(resp.status) {
						cms.message(resp.msg);
						cms.table.reload();
					} else {
						alert(resp.msg);
						window.location.reload();
					}
				});
			});
		}
	}
	$('#navId-User').removeClass('subClosed').addClass('subOpened');
	$('#nav-Ul-Id-User').show();
	$('a#navId-User-Group').addClass('active');
	cms.modules.admin.init();
});