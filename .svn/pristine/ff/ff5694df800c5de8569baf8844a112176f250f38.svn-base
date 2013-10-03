$(function(){
	$('.aCls-btn-click').click(function(){
		var wid = $(this).data('width'), heg = $(this).data('height');
		$('a.aCls-btn-click, a.btn-custom-a-click').removeClass('btn-primary');
		$(this).addClass('btn-primary');
		$('#promotion_embed_code').val("<iframe type='text/html' src='http://mydarling.vn/virool/api/86ed8be3c3ebea12a82c67c15de4e7b6-8b7a37fe777910ec596d084a27fc3414/500x315' width='"+wid+"' height='"+heg+"' frameborder='0' allowfullscreen='true'/>");
		return false;
	})
	$('a.btn-custom-a-click').click(function(){
		$('a.aCls-btn-click').removeClass('btn-primary');
		$('.btn-a-apply-change-size, a.btn-custom-a-click').addClass('btn-primary');
		$(this).parent().hide();
		$('.fields-container').show();
		return false;
	});
	$('.btn-small').click(function(){
		var html = $('#promotion_embed_code').val();
		var params = php.explode("src=", html);
		var param = php.explode(" ", params[1]);
		param = php.ltrim(php.rtrim(param[0], "'"), "'");
		param = php.explode('&autoswitch=1',param);
		param = param[0];
		if ( $(this).data('behavior')=='OnOffButton' ) {
			if ( $(this).hasClass('btn-primary') ) {
				$(this).removeClass('btn-primary').empty().append('Off');
				html = php.str_replace('&autoswitch=1', '', html);
			} else {
				$(this).addClass('btn-primary').empty().append('On');
				var str = param+"&autoswitch=1";
				html = php.str_replace(param, str, html);
			}
		}
		$('#promotion_embed_code').val(html);
		return false;
	})
	$('.btn-a-apply-change-size').click(function(){
		var wid = $('#custom_width').val(), heg = $('#custom_height').val();
		$('a.aCls-btn-click').removeClass('btn-primary');
		$(this).addClass('btn-primary');
		console.log(wid)
		$('#promotion_embed_code').val("<iframe src='http://mydarling.vn/virool/api/86ed8be3c3ebea12a82c67c15de4e7b6-8b7a37fe777910ec596d084a27fc3414/"+wid+"x"+heg+"' width='"+wid+"' height='"+heg+"' frameborder='0' marginwidth='0' marginheight='0' scrolling='no' allowfullscreen webkitallowfullscreen mozallowfullscreen> </iframe>");
		$('.fields-container').hide();
		$('.btn-container').show();
		return false;
	});
})