$(function(){
	$('.btn-large').collapse();

	$('.btn-large').click();

	$('.btn-large').click(function(){
		var b = $(this).find('b');
		if ($(b).hasClass('caret')) {
			$(b).removeClass('caret').addClass('caret-right');
		} else {
			$(b).removeClass('caret-right').addClass('caret');
		}
	});
	
})