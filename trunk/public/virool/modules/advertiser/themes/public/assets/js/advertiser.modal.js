$(function(){
	$.extend(cms.modules, {
		advertiser : {
			initFlash : function(id, title){
				var html = 
					('<div id="divIdModal-'+id+'" class="modal hide fade">')+
						('<div class="modal-header">')+
							('<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>')+
							('<h3>'+title+'</h3>')+
						('</div>')+
						('<div class="modal-body">')+
							('<iframe width="100%" height="400" src="https://www.youtube.com/embed/'+id+'" frameborder="0" allowfullscreen></iframe>')+
						('</div>')+
						('<div class="modal-footer">')+
						('</div>')+
					('</div>');
				$('body').append(html);
			},
			initsubmit : function(){
				$.each($('form.form-inline'), function(){
					cms.form($(this), {
						validate : {
							rules : {
								'email' : {
									required : true,
									email : true
								}
							}
						},
						success: function(response){
							if (!response.status) {
								cms.jGrowl(response.msg, response.option);
							} else {
								cms.helper.url.redirect(response.msg);
							}
						}
					})
				});
			}
		}
	})
	cms.modules.advertiser.initsubmit();	
	$('.pink-play-button').click(function(){
		var id = $(this).data('ytid');
		cms.modules.advertiser.initFlash(id, $(this).data('title'));
		$('#divIdModal-'+id).modal('show');
	})

	$('.carousel-slide-link').click(function(){
		var slide = $(this).data('slide-to');
		$('#musicians-carousel .carousel-inner .item').removeClass('active');
		$('#musicians-carousel .carousel-inner .item:eq('+slide+')').addClass('active');
		return false;
	})
	
})