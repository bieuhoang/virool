$(function(){
	$('.sel-chosen').chosen();
	cms.form(
		'#form-document',
		{
			clearForm : false,
			resetForm : false,
			success : function(data){
				if (data.status) {
					cms.jGrowl(data.msg, {
						theme : data.theme,
						position : 'bottom-right'
					});
				}
			}
		}

	)
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
	$('#navId-Promote').removeClass('subClosed').addClass('subOpened');
	$('#nav-Ul-Id-Promove').show();
	$('a#navId-Promote-Videos').addClass('active');
})