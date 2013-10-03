$(function() {

	cms.validate('#form', {
		validate: {
			rules: {},
			messages: {}
		},
		success: function(resp) {
			if(resp.status == false) {
				alert(resp.msg);
				return false;
			} else {
				window.addFieldCount = 1;
				$('.form-group').each(function(el, index) {
					if(index > 0) {
						$(el).remove();
					}
				});
				alert(resp.msg);
			}
		}
	});
});