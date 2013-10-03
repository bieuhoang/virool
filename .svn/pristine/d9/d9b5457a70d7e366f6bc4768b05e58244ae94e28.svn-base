$(function(){
	$.extend(cms, {
		promo_video : {
			param : [],
			indexParam : function(id){
				var that = this;
				if (that.param.length) {
					for (var i = 0; i < that.param.length; i++) {
						if ( that.param[i] == id ) {
							return i;
						}
					}
				}
				return -1;
			},
			addParam : function(id){
				var that = this;
				if (that.indexParam(id)==-1) {
					that.param.push(id);
				}
			},
			deleParam : function(id){
				var that = this, index = that.indexParam(id);
				if (index!=-1) {
					that.param.splice(index,1);
				}
			},
			inittable : function(){
				var _this = this;
				$('.uniform', '.button-actions').uniform();
				cms.table.init(
					'#datatable',
					'ajax/managerdocument/admin_list',
					{
						searchitems: [
							{name: 'title', display: 'Title'}
						],
						sortname: 'id',
						sortorder: 'desc'
					},
					function(data) {
						_this.initDatatableEvents();
					}
				);
			},
			initDatatableEvents: function() {
				cms.load('ui/jquery.qtip.min.js');
				cms.load('jquery.qtip.css', function() {
					$('a.tip').qtip({
						content: false,
                        position: {
                            my: 'bottom center',
                            at: 'top center',
                            viewport: $(window)
                        },
                        style: {
                            classes: 'ui-tooltip-tipsy'
                        }
					});
				});
				
				/**
				*
				*	Change percent
				*
				**/
				$('.btn-change-percent').live('click', function(){
					var id = $(this).data('id'), percent = $('.input-qtip-click-percent').val();
					if ( id != 0 && percent != '' )
					{
						cms.model(
							'ajax/managerdocument/changepercent',
							{
								item_id : $(this).data('id'),
								item_val : $('.input-qtip-click-percent').val()
							},
							function(data) {
								cms.jGrowl(data.msg, data);
								setTimeout(function(){
									$('#datatable').flexReload();
								}, 800);
							}
						)						
					}
				});
				var that = this;
				$('a.edit-item').click(function(){
					cms.model(
						'ajax/managerdocument/changeaction',
						{
							item_id : $(this).data('id')
						},
						function(data) {
							cms.jGrowl(data.msg, data);
							setTimeout(function(){
								$('#datatable').flexReload();
							}, 800);
						}
					)
				});
				$('a.pause-item').click(function(){
					cms.model(
						'ajax/managerdocument/actionpause',
						{
							item_id : $(this).data('id')
						},
						function(data) {
							cms.jGrowl(data.msg, data);
							setTimeout(function(){
								$('#datatable').flexReload();
							}, 800);
						}
					)
				});
				$('a.stop-item').click(function(){
					cms.model(
						'ajax/managerdocument/actionstop',
						{
							item_id : $(this).data('id')
						},
						function(data) {
							cms.jGrowl(data.msg, data);
							setTimeout(function(){
								$('#datatable').flexReload();
							}, 800);
						}
					)
				});
				$('a.play-item').click(function(){
					cms.model(
						'ajax/managerdocument/actionstart',
						{
							item_id : $(this).data('id')
						},
						function(data) {
							cms.jGrowl(data.msg, data);
							setTimeout(function(){
								$('#datatable').flexReload();
							}, 800);
						}
					)
				});
				$('a.delete-item').click(function() {
					var id = parseInt($(this).data('id'));
					cms.confirm('Are you sure ?', function() {
						cms.model(
							'ajax/managerdocument/removeaction',
							{ item_id : id },
							function(resp) {
								cms.jGrowl(resp.msg);
								$('#datatable').flexReload();
								
							}
						);
					});
				});
			},
			initImg : function(data){
				var html = 'Data empty.';
				if (typeof(data)!='undefined' && data.length) {
					html = 
					('<div id="myCarousel" class="carousel slide">')+
						('<div class="carousel-inner">');
					for (var i = 0; i < data.length; i++) {
						html += 
							('<div class="item">')+
								('<img alt="" src="'+cms.helper.url.base_url()+data[i].fullurl+'" />')+
							('</div>');
					};
					html += ('</div>')+
						('</div>');
				}
				return html;
			}
		}
	})
	cms.promo_video.inittable();
	$('#navId-Promote').removeClass('subClosed').addClass('subOpened');
	$('#nav-Ul-Id-Promove').show();
	$('a#navId-User-Manage').addClass('active');
});