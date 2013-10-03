$(function(){
	if ($(window).scrollTop() < 70) {
		$('.container-fixed').css({
			'position': 'absolute',
			'top': '90px'
		});
	}
	$(window).scroll(function(){
		if ($(window).scrollTop() < 70) {
			$('.container-fixed').css({
				'position': 'absolute',
    			'top': '90px'
			});
		} else {
			$('.container-fixed').css({
				'position': 'fixed',
    			'top': '20px'
			});
		}
	})
	$('a.aCls-action-user').click(function(){
		var _this = this;
		$.each($(_this).parent().parent().children('li'), function(){
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			}
		})
		$(_this).parent().addClass('active');
	});
	$('a#edit-card').toggle(function(){
		$('#card-inputs').show(500);
	}, function(){
		$('#card-inputs').hide(500);
	});
	cms.form('#form_personal', {
		url : 'personal',
		clearForm: false,
		resetForm: false,
		success : function(respone){
			cms.message(respone.msg);
		}
	})
	cms.form('#form_changepass', {
		url : 'changepass',
		validate : {
			rules: {
                current_password: { 
                		required: true
                	},
                password: {
                	required: true,
                	minlength : 6
                },
				password_confirmation: { equalTo: '#user_password' }
            }
		},
		success : function(data) {
			cms.jGrowl(data.msg, data);
		}
	})
	cms.form('#form_changecard', {
		url : 'changecard',
		clearForm:false,
		resetForm : false,
		validate : {
			rules : {
				card_name : {required: true},
				card_number : {required: true},
				card_code : {required: true}
			}
		},
		success : function(data){
			cms.jGrowl(data.msg, data);
		}
	})
	$('.btn-publicsher-add-document').on('click', function() {
		var that = this, action = ($(that).attr('rel') == 'Add' ? 'Remove' : 'Add');
		cms.model('ajax/promotevideo/publicsheradd',
		{
			item_id : $(that).data('id'),
			action : $(that).attr('rel')
		},
		function(data) {
			if (data.resp)
			{
				$(that).parent().parent().parent().remove();
			}
			else
			{
				cms.jGrowl(data.msg, data)
			}
		})
		return false;
	})
})