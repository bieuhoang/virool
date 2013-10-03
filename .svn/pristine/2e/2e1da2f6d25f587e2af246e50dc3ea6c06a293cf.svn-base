$(function(){
	$.extend(cms, {
		promo_video : {
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
			inittable : function(){
				var _this = this;
				$('.uniform', '.button-actions').uniform();
				cms.table.init(
					'#datatable',
					'ajax/mysites/admin_list',
					{
						searchitems: [
							{name: 'title', display: 'Title'}
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
				$('a.slide-show-img').click(function(){
					cms.model(
						'ajax/mysites/slideshow',
						{
							item_id : $(this).data('id')
						},
						function(data) {
							cms.popup(
								'',
								'',
								{'content' : that.initImg(data.data)}
							);
						}
					)
				})
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
							'ajax/mysites/mysiteDelete',
							{ id: cms.promo_video.param },
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
							'ajax/mysites/mysiteDelete',
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
			},
			initImg : function(data){
				var html = 'Data empty.';
				if (typeof(data)!='undefined' && data.length) {
					html = 
					('<div id="myCarousel" class="carousel slide">')+
						('<div class="carousel-inner">');
					for (var i = 0; i < data.length; i++) {
						html += 
							('<div class="item">')+
								('<img alt="" src="'+cms.helper.url.base_url()+data[i].fullurl+'" />')+
							('</div>');
					};
					html += ('</div>')+
						('</div>');
				}
				return html;
			}
		}
	})
	cms.promo_video.inittable();
	$('#navId-User').removeClass('subClosed').addClass('subOpened');
	$('#nav-Ul-Id-User').show();
	$('a#navId-User-my-site').addClass('active');
});