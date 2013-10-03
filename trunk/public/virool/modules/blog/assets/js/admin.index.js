$(function() {
	$.extend(cms.modules, {
		home: {
			init: function() {
				this.ids = new Array();
				// active menu
				$('#product_insert').addClass('sfHover2');
				this.initEvents();
			},
			initEvents: function() {
				var _this = this;
				cms.table.init(
					'#datatable',
					'ajax/home/admin_index',
					{
						searchitems: [
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
					cms.helper.url.redirect('admin/home/edit');
				});

				// delete events
				$('a.action-delete').click(function() {
					$('input.uniform:checked', '#datatable tbody').each(function() {
						_this.ids.push($(this).val());
					});
					if(_this.ids.length == 0) {
						alert('Please choose at least home before delete.'); return false;
					}
					
					cms.confirm('Are you sure you want to delete home selected?', function() {

						cms.model('ajax/home/delete', {id: _this.ids}, function(resp) {
							// check if user logout
							if(cms.isset(resp.is_logged_out) && resp.is_logged_out == true) {
								alert(resp.msg);
								cms.helper.url.redirect('admin/login');
								return false;
							}

							// check status?
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
					cms.helper.url.redirect('admin/home/edit/'+id);
				});

				// delete
				$('a.delete-item', '#datatable').click(function() {
					var id = $(this).data('id');
					cms.confirm('Are you sure you want to delte this home?', function() {
						cms.model('ajax/home/delete', {id: id}, function(resp) {
							// check if user logout
							if(cms.isset(resp.is_logged_out) && resp.is_logged_out == true) {
								alert(resp.msg);
								cms.helper.url.redirect('admin/login');
								return false;
							}

							// check status?
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

	cms.modules.home.init();
});