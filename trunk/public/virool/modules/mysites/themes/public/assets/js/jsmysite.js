$(function(){
	$('.selec-chosen').chosen();
	cms.load(cms.helper.url.base_url() + 'assets/css/upload/jQuery.Library.FixUp.css');
	cms.load(cms.helper.url.base_url() + 'assets/css/upload/jQuery.Uploadifjy.css');
	cms.load(cms.helper.url.base_url() + 'assets/js/upload/jQuery.Swfobject.js');
	cms.load(cms.helper.url.base_url() + 'assets/js/upload/jQuery.Uploadify.v2.1.4.min.js', function(){
		$('#file_upload').uploadify({
	        'uploader'  		: cms.helper.url.base_url()+'assets/img/upload/Flash/uploadify.swf', // The path to the uploadify swf file
	        'script'    		: cms.helper.url.base_url()+'mysites/upload',//server upload php
	        'cancelImg' 		: cms.helper.url.base_url()+'assets/img/upload/cancel.png',
	        'folder'    		: cms.helper.url.base_url()+'uploads/sites',
	        'multi'     		: true,
	        'auto'      		: false,
	        'scriptData': {'idAlbums':''},
	        onSelectOnce : function(event,data) {
	            $("#file_upload").uploadifySettings('scriptData', {'idAlbums' : $('#sites_id').val()});
	        },
	        onComplete : function(a,b,c,response,e) {
	            response = JSON.parse(response);
	            if (cms.isset(response.resp) && response.resp) {
	            	var html = 
	            		('<div id="img-dele-'+response.id+'" class="element-img">')+
	            			('<img src="'+response.img+'" class="img-size-100-80" title="" alt="" />')+
	            			('<a href="javascript:;" data-id="'+response.id+'" class="dele-img dele-img-live" title="" alt=""></a>')+
	            		('</div>');
	            	$('#list-all-img').append(html);
	            	$('#tabFixUp').find('tbody').empty();
	            }
	     	}
		});
	});
	$('.dele-img-click').click(function(){
		var id = $(this).data('id');
		cms.model(
			'ajax/mysites/dele',
			{
				item_id : id
			},
			function(resp) {
				if (resp.resp) {
					cms.jGrowl(resp.msg, resp);
					$('#img-dele-'+id).remove();
				}
			}
		);
	})
	$('.dele-img-live').live('click', function(){
		var id = $(this).data('id');
		cms.model(
			'ajax/mysites/dele',
			{
				item_id : id
			},
			function(resp) {
				if (resp.resp) {
					cms.jGrowl(resp.msg, resp);
					$('#img-dele-'+id).remove();
				}
			}
		);
	})
})