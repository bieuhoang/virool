$(function(){
	$.extend(cms, {
		publication : {
			initFlash : function(id, title){
				var html = 
					('<div id="divIdModal-'+id+'" class="modal hide fade">')+
						('<div class="modal-header">')+
							('<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>')+
							('<h3>'+title+'</h3>')+
						('</div>')+
						('<div class="modal-body">')+
							('<iframe width="100%" height="300" src="//e.issuu.com/embed.html#0/'+id+'" frameborder="0" allowfullscreen></iframe>')+
						('</div>')+
						('<div class="modal-footer">')+
						('</div>')+
					('</div>');
				$('body').append(html);
			}
		}
	})
	
	$('#start-campain-form').submit(function() {
		var email = $('#user_email').val();
		if(! cms.is_email(email)) {
			cms.jGrowl('Email address is not valid',{position: 'top-right', theme : 'jGrowl_error'});
			return false;
		}
		cms.jsloading();		
		cms.model(
			'ajax/home/register',
			{
				action : 'register',
				email : $('#user_email').val()
			},
			function(resp) {
				cms.jsloading(true);
				if (!resp.status) {
					cms.jGrowl(resp.msg, resp.option);
				} else {
					cms.helper.url.redirect(resp.msg);
				}
			}
		);
		return false;
	});
	
	$('.pink-play-button').click(function(){
		var id = $(this).data('issid');
		cms.publication.initFlash(id, $(this).data('title'));
		$('#divIdModal-'+id).modal('show');
	})
	$('.carousel-slide-link').click(function(){
		var slide = $(this).data('slide-to');
		$('#musicians-carousel .carousel-inner .item').removeClass('active');
		$('#musicians-carousel .carousel-inner .item:eq('+slide+')').addClass('active');
		return false;
	})
})