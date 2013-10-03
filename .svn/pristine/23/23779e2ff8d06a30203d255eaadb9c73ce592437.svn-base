<div class="container">
	<div class="container-fixed">
		<ul>
			<li><?php echo anchor('user/account#personal-info', '<i class="icon-chevron-right pull-right"></i>Personal Info', array('class'=>'aCls-action-user')) ?></li>
			<li><?php echo anchor('user/account#change-password', '<i class="icon-chevron-right pull-right"></i>Change Password', array('class'=>'aCls-action-user')) ?></li>
			<li class="active"><?php echo anchor('user/account#billing', '<i class="icon-chevron-right pull-right"></i>Recurring Billing', array('class'=>'aCls-action-user')) ?></li>
		</ul>
	</div>
	<div class="container-content">
		<div id="personal-info">
			<?php echo form_open('user/personal', array('id'=>'form_personal')) ?>
				<legend><span>Personal Info</span></legend>
				<!-- <div class="control-group">
					<label for="user_username" class="control-label">Username</label>
					<div class="controls"><input type="text" size="30" readonly="readonly" name="user[username]" value="<?php echo $Usertpl->user ?>" id="user_username" class="span3"></div>
				</div> -->
				<div class="control-group">
					<label for="user_first_name" class="control-label">First name</label>
					<div class="controls"><input type="text" size="30" name="user[first_name]" id="user_first_name" value="<?php echo $Usertpl->first_name; ?>" class="span3"></div>
				</div>
				<div class="control-group">
					<label for="user_last_name" class="control-label">Last name</label>
					<div class="controls"><input type="text" size="30" name="user[last_name]" value="<?php echo $Usertpl->last_name; ?>" id="user_last_name" class="span3"></div>
				</div>
				<div class="control-group">
					<label for="user_email" class="control-label">Email</label>
					<div class="controls"><input type="text" value="<?php echo $Usertpl->email; ?>" size="30" name="user[email]" id="user_email" class="span3" readonly="true"></div>
				</div>
				<div class="control-group">
					<label for="user_phone_number" class="control-label">Phone number</label>
					<div class="controls">
						<input type="tel" size="30" name="user[phone_number]" id="user_phone_number" value="<?php echo $Usertpl->phone; ?>" class="span3">
						<span class="help-block">Example: +1 415 123 45 67</span>
					</div>
				</div>
				<div class="control-group">
					<label for="user_paypal_address" class="control-label">PayPal email</label>
					<div class="controls"><input type="text" size="30" name="user[paypal_email]" id="user_paypal_address" value="<?php echo $Usertpl->paypal_email; ?>" class="span3"></div>
				</div>
				<div class="control-group">
					<label for="user_billing_address_attributes_address" class="control-label">Address line 1</label>
					<div class="controls"><input type="text" size="30" name="user[billing_address_attributes][address]" value="<?php echo $Usertpl->address_1; ?>" id="user_billing_address_attributes_address" class="span3"></div>
				</div>
				<div class="control-group">
					<label for="user_billing_address_attributes_address2" class="control-label">Address line 2</label>
					<div class="controls"><input type="text" size="30" name="user[billing_address_attributes][address2]" value="<?php echo $Usertpl->address_2; ?>" id="user_billing_address_attributes_address2" class="span3"></div>
				</div>
				<div class="control-group">
					<label for="user_billing_address_attributes_state" class="control-label">State</label>
					<div class="controls"><input type="text" size="30" name="user[billing_address_attributes][state]" value="<?php echo $Usertpl->state; ?>" id="user_billing_address_attributes_state" class="span3"></div>
				</div>
				<div class="control-group">
					<label for="user_billing_address_attributes_country" class="control-label">Country</label>
					<div class="controls">
						<select name="user[billing_address_attributes][country]" id="user_billing_address_attributes_country" class="span3">
							<?php
								$stroption = '';
								$strfirst = '<option value="">Please Select</option>';
								if ($Country->result_count()) {
									foreach ($Country as $key => $value) {
										if ($value->id==$Usertpl->country_id) {
											$strfirst ='<option value="'.$value->id.'" >'.$value->name.'</option>';
										} else {
											$stroption .='<option value="'.$value->id.'" >'.$value->name.'</option>';
										}
									}
								}
								echo $strfirst.$stroption;
							?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label for="user_billing_address_attributes_zip" class="control-label">Zip / Post Code</label>
					<div class="controls"><input type="text" size="30" name="user[billing_address_attributes][zip]" value="<?php echo $Usertpl->zip_post_code; ?>" id="user_billing_address_attributes_zip" class="span3"></div>
				</div>
				<div class="control-group">
					<div class="controls"><input type="submit" value="Update Account" name="commit" class="btn btn-primary"></div>
				</div>
			<?php echo form_close();?>
		</div>
		<div id="change-password">
			<?php echo form_open('user/changpass', array('id'=>'form_changepass')) ?>
				<legend><span>Change Password</span></legend>
				<div class="control-group">
					<label for="user_current_password" class="control-label">Current password<span class="span-sao">(*)</span></label>
					<div class="controls"><input type="password" size="30" name="current_password" id="user_current_password" class="span3"></div>
				</div>
				<div class="control-group">
					<label for="user_password" class="control-label">New password<span class="span-sao">(*)</span></label>
					<div class="controls"><input type="password" size="30" name="password" id="user_password" class="span3"></div>
				</div>
				<div class="control-group">
					<label for="user_password_confirmation" class="control-label">Confirm password<span class="span-sao">(*)</span></label>
					<div class="controls"><input type="password" size="30" name="password_confirmation" id="user_password_confirmation" class="span3"></div>
				</div>
				<div class="control-group">
					<div class="controls"><input type="submit" value="Change" name="commit" class="btn btn-primary"></div>
				</div>
			<?php echo form_close();?>
		</div>
		<div id="billing">
			<?php echo form_open('user/changecard', array('id'=>'form_changecard')) ?>
				<legend><span>Recurring Billing</span></legend>
				<div class="control-group">
					<label for="user_on_recurring_billing" class="control-label user_on_recurring_billing">Recurring billing</label>
					<div style="margin-top: 2px; margin-left: 110px;" class="controls">
						<input type="checkbox" value="1" name="user_recurring_billing" id="user_on_recurring_billing" <?php echo !empty($Usertpl->recurring_billing) ? 'checked="checked"' : '' ?> class="span-3">
						<span style="color: #999997; font-size: small; float: left">
							Your card will be charged every time your funds expire to prevent your campaigns from suspending.
						</span>
					</div>
				</div>
				<div class="control-group">
					<div style="margin-top: 6px" class="controls">
						<span>Card information</span>
						<span>No credit card information</span>
						<span style="padding-left: 20px" id=""><a id="edit-card" href="#">Change Card</a></span>
					</div>
				</div>
				<div style="display: none;" id="card-inputs">
					<div class="control-group">
						<label for="card_name" class="control-label">Card Holder Name<span class="span-sao">(*)</span></label>
						<div style="margin-top: 6px" class="controls"><input type="text" value="<?php echo $Usertpl->card_holder_name ;?>" style="padding: 2px 4px; font-size: 13px;" id="card_name" name="card_name"></div>
					</div>
					<div class="control-group">
						<label for="card_number" class="control-label">Card Number<span class="span-sao">(*)</span></label>
						<div style="margin-top: 6px" class="controls"><input type="text" value="<?php echo $Usertpl->card_number ;?>" style="padding: 2px 4px; font-size: 13px;" maxlength="16" id="card_number" name="card_number"></div>
					</div>
					<div class="control-group">
						<label for="card_code" class="control-label">CVV Code<span class="span-sao">(*)</span></label>
						<div style="margin-top: 6px" class="controls"><input type="text" value="<?php echo $Usertpl->card_ccv_code ;?>" style="padding: 2px 4px; font-size: 13px;width: 50px;" maxlength="4" length="4" id="card_code" name="card_code"></div>
					</div>
					<div class="control-group">
						<label for="card_month" class="control-label">Expiration Date</label>
						<div style="margin-top: 6px" class="controls">
							<span style="float:left">
								<select style="width: 130px" id="card_month" name="card_month">
									<?php 
										$htmlMonth_first = '';
										$htmlMonth = '';
										foreach ($Carmonthtpl as $key => $value) {
											if (!empty($Usertpl->card_expiration_month) and $Usertpl->card_expiration_month==$key) {
												$htmlMonth_first = $value;
											} else {
												$htmlMonth .= $value;
											}
										}
										echo $htmlMonth_first.$htmlMonth;
									?>
								</select>
							</span>
							<span style="float:left">
								<select style="width: 70px; margin-left: 4px;" id="card_year" name="card_year">
									<?php 
										$htmlYear_first = '';
										$htmlYear = '';
										for ($y = intval(date('Y')) ; $y< (intval(date('Y'))+16); $y++ ) {
											if (!empty($Usertpl->card_expiration_year) and $Usertpl->card_expiration_year==$y) {
												$htmlYear_first = '<option value="'.$y.'">'.$y.'</option>';
											} else {
												$htmlYear .= '<option value="'.$y.'">'.$y.'</option>';
											}
										}
										echo $htmlYear_first.$htmlYear;
									?>
								</select>
							</span>
							<span style="color:#999997;float:left;font-size: small;padding-top:10px;" class="hint">Virool does NOT store your Credit Card info and processes it securely.</span>
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls"><input type="submit" value="Save" name="commit" id="save-card-button" class="btn btn-primary"></div>
				</div>
				<div id="form-spinner" class="display-none">
					<span style="color:green">Processing your request... Please wait and don't close this page yet!</span>
					<img src="https://assets-host.s3.amazonaws.com/assets/ajax-loader-f63bd02ed8dd66b805c921125ed5b604.gif" alt="Ajax-loader">
				</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>