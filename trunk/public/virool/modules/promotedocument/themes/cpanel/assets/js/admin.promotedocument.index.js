$(function(){
	$.extend(cms, {
		promo_video : {
			inittable : function(){
				var _this = this;
				$('.uniform', '.button-actions').uniform();
				cms.table.init(
					'#datatable',
					'ajax/promotedocument/admin_list',
					{
						searchitems: [
							{name: 'title', display: 'Title'}
						],
						sortname: 'id',
						sortorder: 'desc'
					},
					function(data) {
					}
				);

				$('select.filter').change(function() {
					var _params = [];
					$('select.filter').each(function() {
						var name = $(this).attr('name');
						var val = $(this).find('option:selected').val();
						_params.push({
							name: name,
							value: val
						});
					});
					cms.table.reload({
						params: _params
					});
				});
			}
		}
	})
	cms.promo_video.inittable();
	$('#navId-Promote').removeClass('subClosed').addClass('subOpened');
	$('#nav-Ul-Id-Promove').show();
	$('a#navId-User-Document').addClass('active');
});