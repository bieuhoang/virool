$(function(){
	$('.selec-chosen').chosen();
	cms.load(cms.helper.url.base_url() + 'assets/css/upload/jQuery.Library.FixUp.css');
	cms.load(cms.helper.url.base_url() + 'assets/css/upload/jQuery.Uploadifjy.css');
	cms.load(cms.helper.url.base_url() + 'assets/js/upload/jQuery.Swfobject.js');
	cms.load(cms.helper.url.base_url() + 'assets/js/upload/jQuery.Uploadify.v2.1.4.min.js', function(){
		var site_digest_method = 'plain';
		$('.encryptionMethod').click(function(){
			$.each($('.encryptionMethod'), function(){
				if ($(this).is(':checked')) {
					site_digest_method  = $(this).val();
				}
			})
		})
		$('#file_upload').uploadify({
	        'uploader'  		: cms.helper.url.base_url()+'assets/img/upload/Flash/uploadify.swf', // The path to the uploadify swf file
	        'script'    		: cms.helper.url.base_url()+'mysites/ajaxadd',//server upload php
	        'cancelImg' 		: cms.helper.url.base_url()+'assets/img/upload/cancel.png',
	        'folder'    		: cms.helper.url.base_url()+'uploads/sites',
	        'multi'     		: true,
	        'auto'      		: false,
	        'scriptData': {
	        	'site_name':'',
            	'site_url':'',
            	'site_description':'',
            	'site_platform_list':'',
            	'site_countries':'',
            	'site_categorys':'',
            	'site_keywords':'',
            	'site_currency_name':'',
            	'site_currency_conversion_rate':'',
            	'site_callback_url':'',
            	'site_signature_template':'',
            	'site_digest_method':'',
            	'token_id':''
	        },
	        onSelectOnce : function(event,data) {
	            $("#file_upload").uploadifySettings('scriptData', {
	            	'site_name' 					: $('#site_name').val(),
	            	'site_url' 						: $('#site_url').val(),
	            	'site_description' 				: $('#site_description').val(),
	            	'site_platform_list'			: $('#site_platform_list').val(),
	            	'site_countries' 				: $('#site_countries').val(),
	            	'site_categorys' 				: $('#site_categorys').val(),
	            	'site_keywords' 				: $('#site_keywords').val(),
	            	'site_currency_name' 			: $('#site_currency_name').val(),
	            	'site_currency_conversion_rate' : $('#site_currency_conversion_rate').val(),
	            	'site_callback_url' 			: $('#site_callback_url').val(),
	            	'site_signature_template' 		: $('#site_signature_template').val(),
	            	'site_digest_method'			: site_digest_method,
	            	'token_id'						: $('#token_id').val()
	            });
	        },
	        onComplete : function(a,b,c,response,e) {
	        	cms.jsloading(true);
	            response = JSON.parse(response);
	            if (cms.isset(response.resp) && response.resp) {
	            	setTimeout(function(){
	            		cms.helper.url.redirect('My-Sites');
	            	}, 200)
	            }
	     	}
		});
	});
	$('a#ahrefUploadFyUpload').click(function(e){
		e.preventDefault();
		cms.jsloading();
	})
})