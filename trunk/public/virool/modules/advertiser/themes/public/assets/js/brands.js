$(function(){
	$.extend(cms.modules, {
		advertiser : {
			initsubmit : function(){
				$.each($('form.form-inline'), function(){
					cms.form($(this), {
						validate : {
							rules : {
								'email' : {
									required : true,
									email : true
								}
							}
						},
						success: function(response){
							if (!response.status) {
								cms.jGrowl(response.msg, response.option);
							} else {
								cms.helper.url.redirect(response.msg);
							}
						}
					})
				});
			}
		}
	});
	cms.modules.advertiser.initsubmit();
});