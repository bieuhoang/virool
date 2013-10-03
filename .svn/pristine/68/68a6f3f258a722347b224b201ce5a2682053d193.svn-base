$(function(){
	$('.btn-delete-site').click(function(){
		var that = this;
		if (confirm('Are you sure?')) {
			cms.model(
				'ajax/mysites',
				{
					item_id : $(that).data('id')
				},
				function(){
					cms.helper.url.redirect('My-Sites');
				}
			)
		}
	})
})