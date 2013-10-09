$(function(){
	$.extend(cms, {
		issuuu : {
			docId : '',
			categorys: window.categorys,
			countries : window.countries,
			initHtml : function(obj, data){
				var that=this, html =
				('<legend><span>Design your campaign</span></legend>')+
				('<div class="divCls-frame"')+
					('<div class="divCls-Group"')+
						('<div id="divId-flash"></div>')+
						('<div class="divCls-event-flash">')+
	                		('<a href="#" class="btn btn-success acls-prev-page" >First Ppge</a>')+
	                		('<a href="#" class="btn btn-success acls-next-page" >Next page</a>')+
						('</div>')+
					('</div>')+
				('</div>')+
				/*('<form action="'+window.site.app.base_url+'Promote-Document" method="post" >')+*/
				('<input type="hidden" id="ipDocsId" name="ipDocsId" value="'+data.documentId+'" readonly="true" />')+
				('<table id="tableIssuu">')+
					('<tr>')+
						('<td class="td-lable" vvalign="top">Title</td>')+
						('<td><input type="text" name="txtTitle" id="txtTitle" value="'+data.title+'" /></td>')+
					('</tr>')+
					('<tr>')+
						('<td class="td-lable" valign="top" >Description</td>')+
						('<td><textarea title="" alt="" name="textaDescription" id="textaDescription" >'+data.description+'</textarea></td>')+
					('</tr>')+
					('<tr>')+
						('<td class="td-lable" valign="middel">Link Url</td>')+
						('<td><input type="text" name="txtlinkurl" id="txtlinkurl" value=""  placeholder="URL link to your song, fan page, site" /></td>')+
					('</tr>')+
					('<tr>')+
						('<td class="td-lable" valign="middel">Link Title</td>')+
						('<td><input type="text" name="txtLinkTitle" id="txtLinkTitle" value="" placeholder="Visit our site, download our song, buy our product" /></td>')+
					('</tr>')+
				('</table>')+
				('<legend><span>Targeting</span></legend>')+
				('<div class="divCls-group-form-left">')+
					('<div class="divCls-group">')+
						('<div class="divCls-lable">Ad Placements [?]</div>')+
						('<div class="divCls-element">')+
							('<input type="radio" class="rdoCls-Placements" checked="checked" id="campaign_platform_list_blogsgamesmobilesocialvirtual_currency" name="platform_list" role="platforms-all-radio" value="blogs,games,mobile,social,virtual_currency">All')+
							('<input type="radio" class="rdoCls-Placements" id="campaign_platform_list_blogsgamesmobilesocialvirtual_currency" name="platform_list" role="platforms-specific-radio" value="blogs,games,mobile,social,virtual_currency">Let me choose...')+
						('</div>')+
					('</div>')+
					('<div class="divCls-group">')+
						('<div class="divCls-lable">Keyword</div>')+
						('<div class="divCls-element">')+
							('<select id="selId-keyword" class="sel-chosen" name="selIdkeyword[]" multiple="true" >');
								for (var i = 0; i < data.tag.length; i++) {
									html += ('<option value="'+data.tag[i]+'" selected="selected" >'+data.tag[i]+'</option>');
								};
					html +=	('</select>')+
						('</div>')+
					('</div>')+
					('<div class="divCls-group">')+
						('<div class="divCls-lable">Categorys</div>')+
						('<div class="divCls-element">')+
							('<select role="category-select" name="selCategory[]" multiple="true" id="selCategory" data-placeholder="Choose Categorys..." class="sel-chosen" >');
							for (var i = 0; i < that.categorys.length; i++) {
					html +=		('<option value="'+that.categorys[i].id+'">'+that.categorys[i].title+'</option>');
							}
					html +=	('</select>')+
						('</div>')+
					('</div>')+
					('<div class="divCls-group">')+
						('<div class="divCls-lable">Countries [?]</div>')+
						('<div class="divCls-element">')+
							('<select role="country-select" name="selCountries[]" multiple="true" id="selCountries" data-placeholder="Choose countries..." class="sel-chosen" >');
							for (var i = 0; i < that.countries.length; i++) {
					html +=		('<option value="'+that.countries[i].id+'">'+that.countries[i].title+'</option>');
							}
					html +=	('</select>')+
						('</div>')+
					('</div>')+
					('<div class="divCls-group">')+
						('<div class="divCls-lable">Gender [?]</div>')+
						('<div class="divCls-element">')+
							('<input type="radio" class="rdoCls-Gender" checked="checked" id="campaign_gender_a" name="gender" value="all">All')+
							('<input type="radio" class="rdoCls-Gender" id="campaign_gender_m" name="gender" value="males">Males')+
							('<input id="campaign_gender_f" class="rdoCls-Gender" type="radio" name="gender" value="females">Females')+
						('</div>')+
					('</div>')+
					('<div class="divCls-group">')+
						('<div class="divCls-lable">Ages [?]</div>')+
						('<div class="divCls-element">')+
							('<input type="checkbox" class="ckbCls-Age" checked="checked" id="ckb_ages" name="ckb_ages" value="1">')+
						('</div>')+
					('</div>')+
				('</div>')+
				('<div class="divCls-group-form-right">')+
					('<div id="divId-Content-box">')+
						('<div class="divCls-Content-box-left">')+
							('<h4>Ad Placements</h4>')+
							('<ul class="ulCls-Content-left">')+
								('<li class="active"><a class="aCls-table-left" data-id="0" href="javascript:;">Blogs/Sites</a></li>')+
								('<li><a class="aCls-table-left" data-id="1" href="javascript:;">Games</a></li>')+
								('<li><a class="aCls-table-left" data-id="2" href="javascript:;">Mobile</a></li>')+
								('<li><a class="aCls-table-left" data-id="3" href="javascript:;">Social Networks </a></li>')+
								('<li><a class="aCls-table-left" data-id="4" href="javascript:;">Virtual Currency </a></li>')+
							('</ul>')+
						('</div>')+
						('<div class="divCls-Content-Right">')+
							('<div id="divIdTable-0" class="cls-table active">')+
								('<h4>Blog Preview</h4>')+
								('<div class="divCls-img">')+
									('<img class="img-tab0" src="http://image.issuu.com/'+data.documentId+'/jpg/page_1_thumb_large.jpg" title="" alt="" />')+
								('</div>')+
								('<div class="slideshow-img">')+
									('<ul>')+
										('<li class="active"><a class="aclsslide" href="javascript:;" data-id="1" >[1]</a></li>')+
										('<li><a class="aclsslide" href="javascript:;" data-id="2" >[2]</a></li>')+
										('<li><a class="aclsslide" href="javascript:;" data-id="3" >[3]</a></li>')+
									('</ul>')+
									('<div class="slideshow-img-content">')+
										('<div id="dicCls-Slideshow-img-1" class="divCls-Tab active"></div>')+
										('<div id="dicCls-Slideshow-img-2" class="divCls-Tab"></div>')+
										('<div id="dicCls-Slideshow-img-3" class="divCls-Tab"></div>')+
									('</div>')+
								('</div>')+
							('</div>')+
							('<div id="divIdTable-1" class="cls-table">')+
								('<h4>Online Game Preview</h4>')+
								('<div >')+
									('<div class="divCls-window-game"></div>')+
									('<img class="img-tab1" src="http://image.issuu.com/'+data.documentId+'/jpg/page_1_thumb_large.jpg" title="" alt="" />')+
								('</div>')+
							('</div>')+
							('<div id="divIdTable-2" class="cls-table">')+
								('<h4>Mobile Preview</h4>')+
								('<div >')+
									('<div class="divCls-window-iphone"></div>')+
									('<img class="img-tab2" src="http://image.issuu.com/'+data.documentId+'/jpg/page_1_thumb_large.jpg" title="" alt="" />')+
								('</div>')+
							('</div>')+
							('<div id="divIdTable-3" class="cls-table">')+
								('<h4>Social Networks Preview</h4>')+
								('<div class="divCls-img">')+
									('<img class="img-tab3" src="http://image.issuu.com/'+data.documentId+'/jpg/page_1_thumb_large.jpg" title="" alt="" />')+
								('</div>')+
								('<div class="slideshow-img-facebook">')+
									('<ul>')+
										('<li class="active"><a class="aclsslide-facebook" href="javascript:;" data-id="1" >[1]</a></li>')+
										('<li><a class="aclsslide-facebook" href="javascript:;" data-id="2" >[2]</a></li>')+
										('<li><a class="aclsslide-facebook" href="javascript:;" data-id="3" >[3]</a></li>')+
									('</ul>')+
									('<div class="slideshow-img-content">')+
										('<div id="dicCls-Slideshow-network-img-1" class="divCls-Tab-network active"></div>')+
										('<div id="dicCls-Slideshow-network-img-2" class="divCls-Tab-network"></div>')+
										('<div id="dicCls-Slideshow-network-img-3" class="divCls-Tab-network"></div>')+
									('</div>')+
								('</div>')+
							('</div>')+
							('<div id="divIdTable-4" class="cls-table">')+
								('<h4>Virtual Currency Preview</h4>')+
								('<div >')+
									('<div class="divCls-window-virtual"></div>')+
									('<img class="img-tab4" src="http://image.issuu.com/'+data.documentId+'/jpg/page_1_thumb_large.jpg" title="" alt="" />')+
								('</div>')+
							('</div>')+
						('</div>')+
					('</div>')+
				('</div>')+
				('<legend><span>Set Budget & Pricing</span></legend>')+
				('<div class="divCls-group">')+
					('<div class="divCls-lable"> Pricing</div>')+
					('<div class="divCls-element">')+
						('<label>Pay per View (CPV)</label>')+
					('</div>')+
				('</div>')+
				('<div class="divCls-group">')+
					('<div class="divCls-lable">Budget (USD) [?]</div>')+
					('<div class="divCls-element">')+
						('<span class="input-prepend"><span class="add-on">$</span><input type="text" id="campaign_unformatted_budget" name="unformatted_budget" role="budget-value"  value="500.00"></span>')+
						('<select id="campaign_budget_kind" name="budget_kind" role="budget-kind" style="width: 95px;"><option value="lifetime" selected="selected">Lifetime</option><option value="per_day">Per day</option></select>')+
						('<div class="budget-hint help-block" role="budget-hint">What is the most you want to spend over the campaign\'s scheduled time period? (min $10.00)</div>')+
					('</div>')+
				('</div>')+
				('<div class="divCls-group">')+
					('<div class="divCls-lable">Max Bid (¢) </div>')+
					('<div class="divCls-element">')+
						('<input type="text" value="13" style="width: 58px;" size="30" role="bid-value" name="unformatted_max_bid" id="campaign_unformatted_max_bid" class="popoverable" data-original-title="" title="">')+
					('</div>')+
				('</div>')+
				('<div class="divCls-clear"></div>')+
				('<div id="divId-Footer-document">')+
					('<input id="btt-success" name="btt-success" type="submit" class="btn btn-success" value="Save" />')+
				('</div>');
				$(obj).empty().append(html);
				setTimeout(function(){
					$('.sel-chosen').chosen();
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
				var param = php.explode('/', root.current_url);
				var docsId = param[param.length-1];
				if (cms.isset(docsId)) {
					$.ajax({
						url : 'http://search.issuu.com/api/2_0/document?q=documentId:'+docsId+'&jsonCallback=?',
						dataType : 'JSON',
						data : {
							format : 'json',
							responseParams : '*'
						},
						success : function(data){
							console.log(data);
							if (cms.isset(data.response)) {
								cms.issuuu.initHtml('#divId-content-document', data.response.docs[0]);
							}
						},
                                                error: function(x, t, m){
                                                    var error_list = new Array("error", "abort", "timeout", "parsererror");
                                                        if(error_list.indexOf(t) !== -1)
                                                        {     
                                                                cms.issuuu.search();
                                                                //alert('Looking back, it seems we can not find what you are looking for or network is slow. Please try agian');
                                                                //request.abort();
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