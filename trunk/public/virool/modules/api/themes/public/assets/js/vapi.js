// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {

	player = new YT.Player('player', {
		height: cms.isset(jsoption.height, 390),
		width: cms.isset(jsoption.width, 640),
		videoId: jsoption.idyou,
		events: {
			'onReady': onPlayerReady,
			'onStateChange': onPlayerStateChange
		}
	});
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
	event.target.pauseVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
	if (event.data == YT.PlayerState.PLAYING && !done) {
		jsoption.action = 'set-key';
		cms.modules.VApi.request(jsoption,
			function(resp){
				cms.modules.VApi.request(
					{
						action : 'check-key',
						key : jsoption.key ,
						'token' 	: jsoption.token,
					}
				)
			}
		);
		done = true;
	}
}
function stopVideo() {
	player.stopVideo();
}

$(function(){
	$.extend(cms.modules, {
		VApi : {
			url : 'http://mydarling.vn/virool/posttoken',
			init : function(opt) {				
				var that = this;
				if ( cms.isset(opt) && cms.isset(opt.type) )
				{
					switch (opt.type)
					{
						case '86ed8be3c3ebea12a82c67c15de4e7b6':
							that.video.init();
						break;
						case '3536216fecbf795b6699da93a654aa82':
							that.documents.init(jsoption);
						break;
					}
				}
			},
			video :
			{
				init : function() {
					this.loadlibs();
				},
				loadlibs : function() {
      				// 2. This code loads the IFrame Player API code asynchronously.
      				var tag = document.createElement('script');

      				tag.src = "https://www.youtube.com/iframe_api";
      				var firstScriptTag = document.getElementsByTagName('script')[0];
      				firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
				}
			},
			documents :
			{
				init : function(resp) {
					this.loadlibs(resp);	
				},
				loadlibs : function(data) {
					var that = this;
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
	                    mode: 'mini',	                    
	                    documentId: data.documentId
	                };
	                swfobject.embedSWF("http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf", 'player', cms.isset(data.width, 590), cms.isset(data.height, 350), "9.0.0", "swfobject/expressInstall.swf", flashvars, params, attributes, that.myCallback(data));
				},
				myCallback : function(resp) {
					var that = this;
					setTimeout(function() {
						document.getElementById("issuuViewer-Event").addEventListener("click", function(){
							if (resp.check) return false;
							cms.modules.VApi.request(
								{
	        						action : 'check-key',
	        						key : resp.key ,
	        						'token' : resp.token,
	        					}
	        				)
	        				resp.check = true;
						});
					}, 500);
				}
			},
			request : function(data, callback) {
				$.ajax({
					url : cms.modules.VApi.url,
					type: 'post',
					dataType : 'json',
				    data : data,
				    success: function(json) {
				       if (typeof callback === "function") {
                            var t = typeof json.time_post == "undefined" ? 200 : 30000;
                            setTimeout(function () {
                                    callback(json)
                            }, t)
                        }
				    }
				});
			}
		}
	});
});