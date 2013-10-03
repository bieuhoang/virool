$(function(){
	$('.selec-chosen').chosen();

	$('a.aclsslide').live('click', function(){
		var id = $(this).data('id'), _this= this;
		$.each($(this).parent().parent().find('li'), function(){
			if ( $(this).hasClass('active') ) {
				$(this).removeClass('active');
			}
		});
		$(_this).parent().addClass('active');
		$('.divCls-Tab').removeClass('active');
		$('#dicCls-Slideshow-img-'+id).addClass('active');
	});
	$('a.aCls-table-left').live('click', function(){
		var _this = this, id = $(_this).data('id');
		$('ul.ulCls-Content-left li').removeClass('active');
		$(_this).parent().addClass('active');
		$('div.cls-table').removeClass('active');
		$('div#divIdTable-'+id).addClass('active');
	});
	$('a.aclsslide-facebook').live('click', function(){
		var id= $(this).data('id');
		$('.slideshow-img-facebook > ul  li').removeClass('active');
		$('.divCls-Tab-network').removeClass('active');
		$('#dicCls-Slideshow-network-img-'+id).addClass('active');
		$(this).parent().addClass('active');
	});
		
})