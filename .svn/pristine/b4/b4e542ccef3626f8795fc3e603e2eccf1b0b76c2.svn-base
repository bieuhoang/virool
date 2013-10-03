$(function(){
	$.extend(cms, {
		promo_video : {
			inittable : function(){
				var _this = this;
				$('.uniform', '.button-actions').uniform();
				cms.table.init(
					'#datatable',
					'ajax/promotevideo/admin_list',
					{
						searchitems: [
							{name: 'title', display: 'Title'},
							{name: 'email', display: 'User'},
							{name: 'group', display: 'Group'}
						],
						sortname: 'id',
						sortorder: 'desc'
					},
					function(data) {
					}
				);

				// events
				//
				$('#option-group').change(function(){
					var id = $('#option-group').val();
					$('#datatable').flexOptions({
						url : cms.helper.url.site_url('ajax/promotevideo/admin_list'),
						qtype: 'group_id',
						query: id,
					}).flexReload();
					
				});
			}
		}
	})
	cms.promo_video.inittable();
	$('#navId-Promote').removeClass('subClosed').addClass('subOpened');
	$('#nav-Ul-Id-Promove').show();
	$('a#navId-Promote-Videos').addClass('active');
})