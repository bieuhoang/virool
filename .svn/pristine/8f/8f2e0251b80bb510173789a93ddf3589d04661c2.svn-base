$(function(){
	$.extend(cms, {
		Issuu : {
			inicheck : true,
			total : 0,
			startIndex : 0,
			pageSize : 10,
			param : [],
			setParam : function(data){
				this.param = data;
			},
			initData : function(){
				var that = this,html = '', response = that.param.response;
				// console.log(response.docs.length);return false;
				if (typeof(response)!='undefined' && response.docs.length) {
					for (var i = 0; i < response.docs.length; i++) {
						html += 
							('<a href="'+window.site.app.base_url+'Promote-Document/'+response.docs[i].documentId+'" title="" alt="">')+
								('<div class="divCls-Group-issuu">')+
										('<img src="http://image.issuu.com/'+response.docs[i].documentId+'/jpg/page_1_thumb_large.jpg" title="" alt="" />')+
										('<div class="divCls-title">'+response.docs[i].title+'</div>')+
								('</div>')+
							('</a>');
					};
				}
				if (this.inicheck)
				{
					var phantrnang = that.pagination(response.numFound, 0, 'Next');
					this.inicheck = false;
				}
				$('#results').empty().append(html);
				$('#results').after(phantrnang);
			},
			pagination : function(count, page, type){
				this.total = count;
				page = (page < 0 ) ? 0 : page;
				var that = this, html ='', total=0, start=0, stop = 10;
				start = page*10;
				stop = page*10 + 10;
				stop = (stop > count/100) ? count/100 : stop ;
				if (count)
				{
					
					html += 
						('<div class="pagination pagination-centered">')+
							('<ul>')+
								('<li><a class="pagination-prev" data-page="'+start+'" href="#">Prev</a></li>');
						for (var i = start; i < stop; i++) {
					html += 	('<li class="'+(type=='Next' ? (i==start ? 'active' : '') : (i==(stop-1) ? 'active' : ''))+'" ><a class="pagination-ele-i" href="javascript:;" data-page="'+(i*10)+'" >'+(i+1)+'</a></li>');
							};
					html+=		('<li><a class="pagination-next" data-page="'+stop+'" href="#">Next</a></li>')+
							('</ul>')+
						('</div>');
				}
				return html;
			},
			setKeyword : function(str) {
				if (str.indexOf('http://')!=-1) {
					str = php.str_replace('http://','', str);
				}
				if (str.indexOf('https://')!=-1)
				{
					str = php.str_replace('http://','', str);
				}
				if (str.indexOf('issuu.com/')!=-1)
				{
					str = php.explode('/', str);
					str = typeof(str[1])=='undefined' ? str[0] : 'username:'+str[1];
				}
				return str;
			},
			search : function(){
				var query = $('#inputIdValSearch').val(), that = this;
				query = cms.Issuu.setKeyword(query);
				$.ajax({
					url : 'http://search.issuu.com/api/2_0/document?q='+query+'&pageSize='+that.pageSize+'&startIndex='+that.startIndex+'&responseParams=*&jsonCallback=?',
					// url : "http://search.issuu.com/api/2_0/document?q=Uno+4th+issue&jsonCallback=?",
					dataType : 'json',
					type : 'post',
					beforeSend : function() {
						cms.jsloading();
					},
					success : function(data){
						cms.Issuu.setParam(data);
						cms.Issuu.initData();
						cms.jsloading(1);
					}
				});
			},
			even : function() {
				var that =this;
				$('.pagination-ele-i').live('click', function(){
					$(this).parent().parent().find('li').removeClass('active');
					$(this).parent().addClass('active');
					that.startIndex = $(this).data('page');
					that.search();
					return false;
				});
				$('.pagination-next').live('click', function(e){
					e.preventDefault();
					var ele = '', _this = this;
					$.each($('.pagination-ele-i'), function(){
						var parent = $(this).parent();
						if ( parent.hasClass('active') && parent.next().text() != 'Next' ) {
							parent.parent().find('li').removeClass('active');
							parent.next().addClass('active');
							that.startIndex = parent.next().find('a').data('page');
							that.search();
							return false;
						}
						else if ( parent.hasClass('active') && parent.next().text() == 'Next' )
						{
							if ( parseInt($(_this).data('page')) == parseInt(parent.text()) )
							{
								page = parseInt($(_this).data('page'))/10;
								that.startIndex = $(_this).data('page');
								that.search();
								$('.pagination-centered').empty().append(cms.Issuu.pagination(cms.Issuu.total,page, 'Next'));
								return false;
							}
						}
					})
					return false;
				});
				$('.pagination-prev').live('click', function(e){
					e.preventDefault();
					var ele = '', _this = this;
					$.each($('.pagination-ele-i'), function(){
						var parent = $(this).parent()
						if ( parent.hasClass('active') && parent.prev().text() != 'Prev' ) {
							parent.parent().find('li').removeClass('active');
							parent.prev().addClass('active');
							that.startIndex = parent.prev().find('a').data('page');
							that.search();
							return false;
						}
						else if ( parent.hasClass('active') && parent.prev().text() == 'Prev' )
						{
							if ( parseInt($(_this).data('page')) == parseInt(parent.text())-1 )
							{
								page = parseInt($(_this).data('page'))/10-1;
								if ( page < 0 ) return false;
								that.startIndex = page*10;
								that.search();
								$('.pagination-centered').empty().append(cms.Issuu.pagination(cms.Issuu.total,page, 'Prev'));
								return false;
							}
						}
					})
					return false;
				});
			}
		}
	})
	$('.inputCls-button-search').click(function(){
		cms.Issuu.search();
		return false;
	});
	$(window).on('keyup', function(e){
        e.preventDefault();
        if (e.which == 13) cms.Issuu.search();
    });
    cms.Issuu.even();
})