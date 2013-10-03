var api = {
	dataDetails: '',
	configs : {
		apikey : 'AIzaSyCx_M6pMkN-g62cr9wfaShBMVFPg0qhr7c',
		pageNext : '',
		pagePre : ''
	},
	setApikey : function(api){
		this.configs.apikey = api;
	},
	getApikey : function(){
		return this.configs.apikey;
	},
	setpage : function(opt){
		this.configs.pageNext = (typeof(opt.next)!='undefined' ? opt.next : '');
		this.configs.pagePre = (typeof(opt.pre)!='undefined' ? opt.pre : '');
	},
	jsload : function(){
		var _this = this;
		_this.jsloading();
		gapi.client.setApiKey(this.getApikey());
		gapi.client.load('youtube', 'v3', function () {
	    	_this.listVideo('');
	    });
	},
	jsNext : function(){
		var _this = this;
		_this.jsloading();
		gapi.client.setApiKey(this.getApikey());
		gapi.client.load('youtube', 'v3', function () {
	    	_this.listVideo('Next');
	    });
	},
	jsPre : function(){
		var _this = this;
		_this.jsloading();
		gapi.client.setApiKey(this.getApikey());
		gapi.client.load('youtube', 'v3', function () {
	    	_this.listVideo('Pre');
	    });
	},
	explode : function(key, string, index){
		index = typeof(index)=='undefined' ? 0 : 1;
		if (string.indexOf(key)!=-1) {
			var data = php.explode(key, string);
			return data[index];
		}
		return string;
	},
	setKeyQuery : function(key){
		var paramkey = this.explode('v=', key, 1);
		paramkey = this.explode('&', paramkey);
		paramkey = this.explode('-', paramkey);
		return paramkey;
	},
	listVideo : function(option){
		var _this = this, query = $('#inputIdValSearch').val();
		query = _this.setKeyQuery(query);
		if (query==''){
			_this.jsloading(true);
			return false;
		}
		option = ( option=='' ? '' : (option=='Next' ? _this.configs.pageNext : _this.configs.pagePre) );
        var request = gapi.client.youtube.search.list({
        	q: query,
        	part: 'id',
        	pageToken : option,
        	maxResults: 25
        });
        request.execute(function(response) {
			param = [];
			_this.setpage({'next': (typeof(response.nextPageToken)!='undefined' ? response.nextPageToken : ''), 'pre': (typeof(response.prevPageToken)!='undefined' ? response.prevPageToken : '') });
			if (typeof(response.items)=='undefined') {
				_this.jsloading(true);return false;
        	}
			$.each(response.items, function() {
				param.push(this.id.videoId);
			});
			_this.getVideoMetadata(param);
        });
	},
	getVideoMetadata : function(videoIds){
		var _this = this;
		var request = gapi.client.youtube.videos.list({
			id: videoIds.join(','),
			part: 'id,snippet,statistics,contentDetails, player'
		});
		request.execute(function(response) {
			if ('error' in response) {
				console.log(response.error.message);
				return false;
			} else {
				_this.jsloading(true);
				_this.initHtml(response.items)
			}
		});
	},
	VideoDetails : function(videoId) {
		var _this = this;
			var request = gapi.client.youtube.videos.list({
				id : videoId,
				part : "id,snippet,statistics,status,player,contentDetails"
			});
			request.execute(function(response) {
				if ('error' in response) {
					console.log(response.error.message);
					return false;
				} else {
					_this.dataDetails = (typeof(response.items[0])!='undefined' ? response.items[0] : '');
					_this.initVideoDetails();
				}
			});
	},
	initVideoDetails : function(){
		var data = this.dataDetails;
		if (data!='') {
			var html = 
				('<div class="divCls-group-form">')+
					('<span>Design your campaign</span>')+
					('<div class="control-group">')+
						('<label class="control-label">Video</label>')+
						('<div class="controls">'+data.player.embedHtml+'</div>')+
					('</div>')+
				('</div>');
			$('#results').empty().append(html);
		} else {
			console.log('Data empty.');
		}
	},
	initHtml : function(data){
		var _this = this;
		var table = document.createElement('table');
		$(table).attr('id', 'tableIdListvideo');
		var thead = 
			('<thead>')+
				('<tr>')+
					('<td class="tdCls-stt">STT</td>')+
					('<td class="tdCls-img">Images</td>')+
					('<td class="tdCls-title">Title</td>')+
					('<td class="tdCls-duration">Duration</td>')+
					('<td class="tdCls-views">Views</td>')+
					('<td class="tdCls-action"></td>')+
				('</tr>')+
			('</thead>');
		$(table).append(thead);
		var tbody = document.createElement('tbody');
		$.each(data, function(i, e){
			
			var tm = this.contentDetails.duration.replace('PT', '').toLowerCase();
			var tm = tm.replace('h', 'h ');
			var tm = tm.replace('m', 'm ');
			var tm = tm.replace('s', 's ');
			var tr = document.createElement('tr');
			var td = 
				('<td class="tdCls-stt">'+(i+1)+'</td>')+
				('<td class="tdCls-img"><img class="thumbnail" src="'+this.snippet.thumbnails.default.url+'" /></td>')+
				('<td class="tdCls-title">'+this.snippet.title+'</td>')+
				('<td class="tdCls-duration">'+tm+'</td>')+
				('<td class="tdCls-views">'+this.statistics.viewCount+'</td>')+
				('<td class="tdCls-action"><a href="javascript:;" class="aCls-Preview" data-ytid="'+this.id+'" data-text="'+this.player.embedHtml+'">Preview</a></td>');
			$(tr).append(td);
			$(tbody).append(tr);
		});
		$(table).append(tbody);
		$('#results').empty().append(table);
		$('#results').append('<div id="divId-Next-Pre"><a href="javascript:;" id="aId-Pre">Pre</a><a href="javascript:;" id="aId-Next" >Next</a></div>')
		_this.initeven();
	},
	initeven: function(){
		$('#tableIdListvideo tbody tr').hover(function(){
			$(this).css({'background': '#F5F5F5'});
		}, function(){
			$(this).css({'background': '#FFFFFF'});
		});
	},
	jsloading : function(opt){
		if (typeof(opt)=='undefined') {
			$('body').append('<div id="divId-loading"><div class="divId-loading"></div></div>');
		} else {
			if (typeof($('#divId-loading')[0])!='undefined') {
				$('#divId-loading').remove();
			}
		}
	}
}
$(function(){
	$(window).on('keyup', function(e){
        if (e.which == 13) api.jsload();
        e.preventDefault();
    });
	$('#buttonSearch').click(function(){
		api.jsload();
	})
	$('a#aId-Next').live('click', function(){
		api.jsNext();
	})
	$('a#aId-Pre').live('click', function(){
		api.jsPre();
	})
	$('.btt-user-video').live('click', function(){
		window.location.href = window.site.app.current_url+'/'+$(this).data('ytid');
	})
	$('a.aCls-Preview').live('click', function(){
		var text = '<div id="divId-Priview">PRIVIEW</div><object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/'+$(this).data('ytid')+'"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/'+$(this).data('ytid')+'" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object><div class="divCls-buton"><button type="button" role="select-video-btn" data-ytid="'+$(this).data('ytid')+'" class="btt-user-video">Use This Video</button></div>';
		cms.load('jquery.fancybox.css');
		cms.load('ui/jquery.fancybox.js', function() {
			$.fancybox({
                content: text
            });
		});
		return false;
	})
})
function jsLoad(){
	api.jsload();
}