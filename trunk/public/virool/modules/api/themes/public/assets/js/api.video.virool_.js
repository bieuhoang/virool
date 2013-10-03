$(function() {
		var VApi = {
			urlpost : 'http://mydarling.vn/virool/posttoken/'
		};
		var docload = false, _this = this;
		$(document).ready(function() {
			docload = true;
		});
		$.fn.ViroolApi = function(p) {
			return this.each(function() {
				
				if (!docload) {
					var t = this;
					$(document).ready(function() {
						$.addApi(t, p);
					})
				} else {
					$.addApi(this, p);
				}
			});
		}
		$.addApi = function(t, p) {
			var pa = $.extend({
					width : 400,
					height : 300,
					click : false
				}, p);
			var fn = {
				init : function() {
					fn.jsPlay(pa);
				},
				jsPlay : function(response) {
					if ( response.type === '86ed8be3c3ebea12a82c67c15de4e7b6' )
					{
						this.jwplayer(response);
					}
					else if ( response.type === '3536216fecbf795b6699da93a654aa82' )
					{
						this.jwobject(response);
					}
				},
				jwplayer : function(data) {
					var that = this;
					jwplayer(t).setup({
				        file: data.url,
				        width : pa.width,
				        height: pa.height,
				        events: {
				        	onPlay : function() {
				        		if (pa.click) return false;
				        		data.action = 'set-key';
				        		that.request(VApi.urlpost, data, 
				        			function(resp){
				        				that.request(VApi.urlpost,
				        					{
				        						action : 'check-key',
				        						key : data.key ,
				        						'token' 	: pa.token,
				        					}
				        				)
				        			});
				        		pa.click = true;
				        	}
				        }
				    });
				},
				jwobject : function(data) { // isssuu
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
	                    jsAPIClientDomain: VApi.clientDomain,
	                    mode: 'mini',	                    
	                    documentId: data.documentId
	                };
	                
	                swfobject.embedSWF("http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf", $(t).attr("id"), "590", "350", "9.0.0", "swfobject/expressInstall.swf", flashvars, params, attributes, that.myCallback(data));
				},
				myCallback : function(resp) {
					var that = this;
					setTimeout(function() {
						document.getElementById("issuuViewer-Event").addEventListener("click", function(){
							if (pa.click) return false;
							that.request(VApi.urlpost,
	        					{
	        						action : 'check-key',
	        						key : resp.key ,
	        						'token' 	: pa.token,
	        					}
	        				)
	        				pa.click = true;
						});
					}, 500);
				},
				even : function() {},
				request : function(url, data, callback) {
					$.ajax({
						url : url,
						type: 'post',
						dataType : 'json',
					    data : data,
					    success: function(json) {
					       if (typeof callback === "function") {
                                var t = typeof json.time_post == "undefined" ? 200 : 60000;
                                setTimeout(function () {
                                        callback(json)
                                }, t)
                            }
					    }
					});
				}
			};
			fn.init();
		}
})