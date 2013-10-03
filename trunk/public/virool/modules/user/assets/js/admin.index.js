$(function() {
	// init module
	$.extend(cms.modules, {
		user: {
			param : [],
			indexParam : function(id){
				var that = this;
				if (that.param.length) {
					for (var i = 0; i < that.param.length; i++) {
						if ( that.param[i] == id ) {
							return i;
						}
					}
				}
				return -1;
			},
			addParam : function(id){
				var that = this;
				if (that.indexParam(id)==-1) {
					that.param.push(id);
				}
			},
			deleParam : function(id){
				var that = this, index = that.indexParam(id);
				if (index!=-1) {
					that.param.splice(index,1);
				}
			},
			init: function() {
				this.initEvents();
			},
			initEvents: function() {
				var _this = this;
				$('.uniform', '.button-actions').uniform();

				// init table
				cms.table.init(
					'#datatable',
					'ajax/user/admin_list',
					{
						searchitems: [
							{name: 'name', display: 'Name'}
						],
						sortname: 'id',
						sortorder: 'desc'
					},
					function(data) {
						_this.initDatatableEvents();
					}
				);

			},
			initDatatableEvents: function() {
				var that = this;
				// edit
				$('a.item-edit').click(function() {
					var id = parseInt($(this).data('id'));
					if(id) {
						cms.helper.url.redirect('admin/user/edit/'+id);
					} else {
						alert('User not exists');
						window.location.reload();
					}
				});
				$('#checkall').click(function(){
					if ($(this).is(':checked')) {
						$.each($('.inpCls-ckb'), function(i, e){
							that.addParam($(e).val());
							$(e).attr('checked', true);
						})
					} else {
						$.each($('.inpCls-ckb'), function(i, e){
							$(e).attr('checked', false);
						})
						that.param= [];
					}
				});
				$('.inpCls-ckb').click(function(){
					if ($(this).is(':checked')) {
						that.addParam($(this).val());
					} else {
						that.deleParam($(this).val());
					}
				});
				// delete
				$('.action-delete').click(function(){
					cms.confirm('Are you sure you want to delete ?', function() {
						cms.model(
							'ajax/user/delete',
							{ id: cms.modules.user.param },
							function(resp) {
								if(resp.status) {
									cms.message(resp.msg);
									$('#datatable').flexReload();
								} else {
									alert(resp.msg);
									window.location.reload();
								}
							}
						);
					});
				})

				$('a.delete').click(function() {
					var id = parseInt($(this).data('id')), fullname = $(this).data('fullname');
					cms.confirm('Are you sure you want to delete user: '+fullname+'?', function() {
						cms.model(
							'ajax/user/delete',
							{ id: id },
							function(resp) {
								if(resp.status) {
									cms.message(resp.msg);
									$('#datatable').flexReload();
								} else {
									alert(resp.msg);
									window.location.reload();
								}
							}
						);
					});
				});

				/**
				*
				*	Change percent
				*
				**/
				$('.btn-change-percent').live('click', function(){
					var id = $(this).data('id'), percent = $('.input-qtip-click-percent').val();
					if ( id != 0 && percent != '' )
					{
						cms.model(
							'ajax/user/changepercent',
							{
								item_id : $(this).data('id'),
								item_val : $('.input-qtip-click-percent').val()
							},
							function(data) {
								cms.jGrowl(data.msg, data);
								setTimeout(function(){
									$('#datatable').flexReload();
								}, 800);
							}
						)						
					}
				});

				//
				$('#option-group').change(function(){
					var id = $('#option-group').val();
					$('#datatable').flexOptions({
						url : cms.helper.url.site_url('ajax/user/admin_list'),
						qtype: 'group_id',
						query: id,
					}).flexReload();
					
				});
			}
		}
	});
	$('#navId-User').removeClass('subClosed').addClass('subOpened');
	$('#nav-Ul-Id-User').show();
	$('a#navId-User-List-User').addClass('active');
	cms.modules.user.init();

});