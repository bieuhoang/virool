$(function() {
	$.extend(cms.modules, {
		page: {
			init: function() {
				this.ids = new Array();
				this.initEvents();
			},
			initEvents: function() {
				var _this = this;
				cms.table.init(
					'#datatable',
					'ajax/page/admin_index',
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
					cms.helper.url.redirect('admin/page/edit');
				});

				// delete events
				$('a.action-delete').click(function() {
					$('input.uniform:checked', '#datatable tbody').each(function() {
						_this.ids.push($(this).val());
					});
					if(_this.ids.length == 0) {
						alert('Please choose at least page before delete.'); return false;
					}
					
					cms.confirm('Are you sure you want to delete page selected?', function() {

						cms.model('ajax/page/delete', {id: _this.ids}, function(resp) {
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
					cms.helper.url.redirect('admin/page/edit/'+id);
				});

				// delete
				$('a.delete-item', '#datatable').click(function() {
					var id = $(this).data('id');
					cms.confirm('Are you sure you want to delte this page?', function() {
						cms.model('ajax/page/delete', {id: id}, function(resp) {
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

	cms.modules.page.init();
});