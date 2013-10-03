$(function(){
	$.extend(cms, {
		make : {
			html : function(){
				var date = new Date();
				var year = '';
				var moth = '';
				for (var i = 1; i < 13; i++) {
					moth += '<option value="'+i+'">'+i+'</option>';
				};
				for (var i = date.getFullYear(); i < (date.getFullYear()+15); i++) {
					year += '<option value="'+i+'">'+i+'</option>';
				}
				
				var html = 
					('<div id="divId-make-pupop" class="modal hide">')+
						('<div class="modal-header">')+
							(' <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>')+
							('<h3>Pay with</h3>')+
							('<div class="divCls-text-menu-make-pupop">')+
								('<ul>')+
									('<li class="active"><a href="#divId-CreditCard" class="a-cls-menu" title="" alt="">Credit Card</a></li>')+
									('<li><a href="#divId-PayPal" class="a-cls-menu" title="" alt="">PayPal</a></li>')+
									('<li><a href="#divId-Coupon" class="a-cls-menu" title="" alt="">Coupon</a></li>')+
								('</ul>')+
							('</div>')+
						('</div>')+
						('<div class="modal-body">')+
							('<div id="divId-CreditCard" class="divCls-Tab-card">')+
								('<div class="Credit-Card-Holder-Name">')+
									('<div class="divCls-label">Credit Card Holder Name</div>')+
									('<div class="divCls-element"><input type="text" id="inputId-credit-card-name" name="inputId-credit-card-name" value="" ></div>')+
								('</div>')+
								('<div class="divCls-credit-card-number">')+
									('<div class="divCls-label">Credit Card Number</div>')+
									('<div class="divCls-element"><div class="divCls-img-card"></div><input type="text" x-autocompletetype="cc-number" role="cc-number" placeholder="•••• •••• •••• ••••" id="card_number" class="span2 unknown"></div>')+
								('</div>')+
								('<div class="divCls-CVV-Code">')+
									('<div class="divCls-label">CVV Code</div>')+
									('<div class="divCls-element"><input type="text" id="card_cvv_code" name="card_cvv_code" value=""></div>')+
								('</div>')+
								('<div class="divCls-Expiration-Date">')+
									('<div class="divCls-label">Expiration Date</div>')+
									('<div class="divCls-element">')+
										('<select name="selId-expiration-moth" id="selId-expiration-moth" >'+moth+'</select>')+
										('<select name="selId-expiration-year" id="selId-expiration-year" >'+year+'</select>')+
									('</div>')+
								('</div>')+
								('<div class="divCls-text">Your credit card processed and stored securely with Stripe.com</div>')+
								('<div class="divCls-text-specify">Specify your payment amount</div>')+
								('<div class="divCls-rdo-Specify"><input type="radio" id="rdo-Specify" name="rdo-Specify" class="rdo-Specify" value="100000" /><lable>$1000 + $300 FREE BONUS (limited time offer)</lable></div>')+
								('<div class="divCls-rdo-Specify"><input type="radio" id="rdo-Specify" name="rdo-Specify" class="rdo-Specify" value="100000" /><lable>$500 + $100 FREE BONUS (limited time offer)</lable></div>')+
								('<div class="divCls-rdo-Specify"><input type="radio" id="rdo-Specify" name="rdo-Specify" class="rdo-Specify" value="100000" /><lable>$100 + $10 FREE BONUS (limited time offer)</lable></div>')+
								('<div class="divCls-rdo-Specify">')+
									('<div class="divCls-group">')+
										('<input type="radio" id="rdo-Specify" name="rdo-Specify" class="rdo-Specify" value="100000" />')+
										('<lable>Other amount:</lable>')+
									('</div>')+
									('<div class="divCls-group">')+
										('<span class="span-cls-dola">$</span><input type="text" id="txtId-Other-amount" name="txtId-Other-amount" value="300" /><span class="span-cls-number-float">.00</span>')+
									('</div>')+
								('</div>')+
								('<div class="divCls-title-text">Get up to 30% FREE bonus credit when deposit more than $100*</div>')+
								('<div class="divCls-Automatic-Billing-lable">Automatic Billing</div>')+
								('<div class="divCls-Automatic-Billing"><input type="checkbox" name="ckb-automatic-billing" id="ckb-automatic-billing" value="1" checked="checked" /><label>Keep my ads running by re-charging my card as funds expire [?]</label></div>')+
							('</div>')+
							('<div id="divId-PayPal" class="divCls-hidden divCls-Tab-card">')+
								('<div class="divCls-Paypal-title">Specify your payment amount</div>')+
								('<div class="divCls-rdo-Specify"><input type="radio" id="rdo-Specify-Paypal" name="rdo-Specify" class="rdo-Specify-Paypal" value="100000" /><lable>$1000 + $300 FREE BONUS (limited time offer)</lable></div>')+
								('<div class="divCls-rdo-Specify"><input type="radio" id="rdo-Specify-Paypal" name="rdo-Specify" class="rdo-Specify-Paypal" value="100000" /><lable>$500 + $100 FREE BONUS (limited time offer)</lable></div>')+
								('<div class="divCls-rdo-Specify"><input type="radio" id="rdo-Specify-Paypal" name="rdo-Specify" class="rdo-Specify-Paypal" value="100000" /><lable>$100 + $10 FREE BONUS (limited time offer)</lable></div>')+
								('<div class="divCls-rdo-Specify">')+
									('<div class="divCls-group">')+
										('<input type="radio" id="rdo-Specify" name="rdo-Specify" class="rdo-Specify" value="100000" />')+
										('<lable>Other amount:</lable>')+
									('</div>')+
									('<div class="divCls-group">')+
										('<span class="span-cls-dola">$</span><input type="text" id="txtId-Other-amount" name="txtId-Other-amount" value="300" /><span class="span-cls-number-float">.00</span>')+
									('</div>')+
								('</div>')+
								('<div class="divCls-title-text">Get up to 30% FREE bonus credit when deposit more than $100*</div>')+
							('</div>')+
							('<div id="divId-Coupon" class="divCls-hidden divCls-Tab-card">')+
								('<div class="divCls-Coupon-title">Enter Coupon Code</div>')+
								('<div class="divCls-Coupon-element"><input type="text" size="30" name="coupon_code" id="payment_coupon_code"></div>')+
							('</div>')+
						('</div>')+
						('<div class="modal-footer">')+
							('<button class="btn" data-dismiss="modal">Close</button>')+
							('<button class="btn btn-primary">Review Payment</button>')+
							('<lable>No hidden fees. Unused credit can be refunded.</lable>')+
						('</div>')+
					('</div>');
					return html;
			},
			pupop : function(obj){
				$(obj).modal();
			},
			inimake : function(){
				$('body').append(cms.make.html());
			}
		}
	})
	cms.make.inimake();
	$('#divId-make-pupop').modal({
		show: false
	})
	$('a.a-cls-menu').live('click', function(){
		var _this = this, divId = $(_this).attr('href');
		$(_this).parent().parent().find('li').removeClass('active');
		$(_this).parent().addClass('active');
		$('.divCls-Tab-card').removeClass('divCls-hidden').addClass('divCls-hidden');
		$(divId).removeClass('divCls-hidden');
		return false;
	})
	
})