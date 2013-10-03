$(function(){
	$.extend(cms, {
		issuuu : {
			docId : '',
			initHtml : function(obj){
				$('.sel-chosen').chosen();
				cms.issuuu.initFlash('divId-flash');
				cms.issuuu.initevenrclick();
			},
			initevenrclick : function(){
				$('a.acls-next-page').live('click', function(){
					document.getElementById('issuuViewer-Event').goToNextPage();
					return false;
				});
				$('a.acls-prev-page').live('click', function(){
					document.getElementById('issuuViewer-Event').goToFirstPage();
					return false;
				});
			},
			initFlash : function(obj){
				var attributes = {
                    id: 'issuuViewer-Event'
                };
    
                var params = {
                    allowfullscreen: 'true',
                    allowScriptAccess: 'always',
                    menu: 'false',
                    wmode: 'transparent'
                };
    			
                var flashvars = {
                    jsAPIClientDomain: window.site.app.base_url,
                    mode: 'mini',
                    // username: data.username,
                    documentId: $('#ipDocsId').val()
                };
                swfobject.embedSWF("http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf", obj, "590", "350", "9.0.0", "swfobject/expressInstall.swf", flashvars, params, attributes);
			}
		}
	});
	cms.issuuu.initHtml();
	cms.form(
		'#form-document',
		{
			clearForm : false,
			resetForm : false,
			success : function(data){
				if (data.status) {
					cms.helper.url.redirect(data.msg);
				} else {
					cms.jGrowl(data.msg, {
						theme : 'jGrowl_error',
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
})