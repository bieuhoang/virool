$(function(){
	$.extend(cms, {
		issuuu : {
			docId : '',
			initHtml : function(obj, data){
				var that=this, html =
				('<div class="span8">')+
					('<h4 class="margin-bottom-5">Widget Preview</h4>')+
					('<div class="divCls-frame"')+
						('<div class="divCls-Group"')+
							('<div id="divId-flash"></div>')+
							('<div class="divCls-event-flash">')+
		                		('<a href="#" class="btn btn-success acls-prev-page" >First Ppge</a>')+
		                		('<a href="#" class="btn btn-success acls-next-page" >Next page</a>')+
							('</div>')+
							('<h4 class="pricing-container margin-top-10">'+data.title+'</h4>')+
							('<div data-behavior="EmbedSettings" class="widget-settings marign-left-10 margin-top-15">')+
			                    ('<h4 class="margin-bottom-10">Embed Settings</h4>')+
			                    ('<div data-width="640" data-height="360" data-behavior="EmbedSize" class="widget-size options-row clearfix margin-left-10">')+
			                        ('<div class="setting-option">')+
			                            ('<div class="option-name pull-left">Widget Size</div>')+
			                            ('<div class="option-value pull-left margin-left-10">')+
			                                ('<div class="pull-left">')+
			                                    ('<a data-width="640" data-option_id="640x360" data-height="360" data-behavior="SizeButton" data-active="true" class="btn aCls-btn-click btn-small btn-primary" href="#">640x360</a>')+
			                                ('</div>')+
			                                ('<div class="pull-left margin-left-5">')+
			                                    ('<a data-width="560" data-option_id="560x315" data-height="315" data-behavior="SizeButton" class="btn btn-small aCls-btn-click" href="#">560x315</a>')+
			                                ('</div>')+
			                                ('<div class="pull-left margin-left-5">')+
			                                    ('<a data-width="480" data-option_id="480x270" data-height="270" data-behavior="SizeButton" class="btn btn-small aCls-btn-click" href="#">480x270</a>')+
			                                ('</div>')+
			                                ('<div class="pull-left margin-left-5">')+
			                                    ('<a data-width="300" data-option_id="300x200" data-height="200" data-behavior="SizeButton" class="btn btn-small aCls-btn-click" href="#">300x200</a>')+
			                                ('</div>')+
			                                ('<div data-width="640" data-option_id="custom" data-height="360" data-behavior="CustomSizeButton" class="custom-size pull-left margin-left-5">')+
			                                    ('<div class="btn-container"><a class="btn btn-small custom-size-btn btn-custom-a-click" href="#">Custom</a></div>')+
			                                    ('<div style="display: none;" class="fields-container">')+
			                                        ('<input type="text" value="640" style="margin-bottom: 0px;" size="4" name="custom[width]" id="custom_width" data-attr="width">x')+
			                                        ('<input type="text" value="360" style="margin-bottom: 0px;" size="4" name="custom[height]" id="custom_height" data-attr="height">')+
			                                    	('<a data-width="640" data-height="360" data-behavior="SizeButton" class="btn btn-small btn-a-apply-change-size" href="#">Apply</a>')+
			                                    ('</div>')+
			                                ('</div>')+
			                            ('</div>')+
			                        ('</div>')+
			                    ('</div>')+
			                    ('<div data-value="autoswitch=1" data-behavior="QueryOption" class="options-row clearfix margin-top-10 margin-left-10">')+
			                        ('<div class="setting-option">')+
			                            ('<div class="option-name pull-left">Auto Switch</div>')+
			                            ('<div class="option-value pull-left margin-left-10">')+
			                                ('<a data-behavior="OnOffButton" class="btn btn-small on-off-btn" href="#">Off</a>')+
			                            ('</div>')+
			                        ('</div>')+
			                    ('</div>')+
			                    ('<div data-value="without_next=1" data-behavior="QueryOption" class="options-row clearfix margin-top-10 margin-left-10">')+
			                        ('<div class="setting-option">')+
			                            ('<div class="option-name pull-left">Next Button</div>')+
			                            ('<div class="option-value pull-left margin-left-10">')+
			                                ('<a data-inverse="true" data-behavior="OnOffButton" class="btn btn-next-button btn-small on-off-btn btn-primary" href="#">On</a>')+
			                            ('</div>')+
			                        ('</div>')+
			                    ('</div>')+
			                    ('<div class="embed-code-row clearfix margin-top-15">')+
			                        ('<h4>Embed Code</h4>')+
			                        ('<div class="embed-code margin-left-10">')+
			                            ('<textarea rows="3" cols="5" readonly="readonly" name="promotion_embed_code" id="promotion_embed_code" data-behavior="EmbedCode">')+
			                            	('<iframe src="http://www.slideshare.net/slideshow/embed_code/20701365?rel=0" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"  allowfullscreen webkitallowfullscreen mozallowfullscreen> </iframe>')+
			                            ('</textarea>')+
			                        ('</div>')+
			                    ('</div>')+
			                ('</div>')+
						('</div>')+
					('</div>')+
					
				('</div>')+
				('<div class="span4">')+
					('<h4 class="margin-bottom-10">Targetting</h4>')+
					('<div class="margin-left-5">'+data.description+'</div>')+
				('</div>');
				$(obj).empty().append(html);
				setTimeout(function(){
					// $('.sel-chosen').chosen();
					cms.issuuu.initFlash('divId-flash', data);
					cms.issuuu.initevenrclick();
				},100);
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
			initFlash : function(obj, data){
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
                    username: data.username,
                    documentId: data.documentId
                };
                swfobject.embedSWF("http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf", obj, "590", "350", "9.0.0", "swfobject/expressInstall.swf", flashvars, params, attributes);
			},
			search : function(){
				var root = window.site.app;
				var docsId = window.documentId;
				if (cms.isset(docsId)) {
					$.ajax({
						url : 'http://search.issuu.com/api/2_0/document?q=documentId:'+docsId+'&jsonCallback=?',
						dataType : 'JSON',
						data : {
							format : 'json',
							responseParams : '*'
						},
						success : function(data){
							if (cms.isset(data.response)) {
								cms.issuuu.initHtml('#divId-content-document', data.response.docs[0]);
							}
						}
					})
				}
			}
		}
	});
	cms.issuuu.search();
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
	$('.aCls-btn-click').live('click', function(){
		var wid = $(this).data('width'), heg = $(this).data('height');
		$('a.aCls-btn-click, a.btn-custom-a-click').removeClass('btn-primary');
		$(this).addClass('btn-primary');
		$('#promotion_embed_code').val("<iframe src='http://www.slideshare.net/slideshow/embed_code/20701365?rel=0' width='"+wid+"' height='"+heg+"' frameborder='0' marginwidth='0' marginheight='0' scrolling='no' allowfullscreen webkitallowfullscreen mozallowfullscreen> </iframe>");
		return false;
	})
	$('a.btn-custom-a-click').live('click', function(){
		$('a.aCls-btn-click').removeClass('btn-primary');
		$('.btn-a-apply-change-size, a.btn-custom-a-click').addClass('btn-primary');
		$(this).parent().hide();
		$('.fields-container').show();
		return false;
	});
	$('.btn-small').live('click', function(){
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
	});
	$('.btn-a-apply-change-size').live('click', function(){
		var wid = $('#custom_width').val(), heg = $('#custom_height').val();
		$('a.aCls-btn-click').removeClass('btn-primary');
		$(this).addClass('btn-primary');
		console.log(wid)
		$('#promotion_embed_code').val("<iframe src='http://www.slideshare.net/slideshow/embed_code/20701365?rel=0' width='"+wid+"' height='"+heg+"' frameborder='0' marginwidth='0' marginheight='0' scrolling='no' allowfullscreen webkitallowfullscreen mozallowfullscreen> </iframe>");
		$('.fields-container').hide();
		$('.btn-container').show();
		return false;
	});
})