<div class="title title-spacing">
	<h2>Edit User</h2>
	This form has all inputs set to large, so they will be 100% in width.
</div>

<?php echo form_open('ajax/user/update', array('id'=>'form-user-update')) ?>
	<input type="hidden" id="id" name="id" readonly="true" value="<?php echo isset($UserTpl->id)? $UserTpl->id : 0;?> " >
	<div class="control-group">
    	<label class="control-label" for="inputFirstName">Group</label>
    	<div class="controls">
    		<select id="selIdGroup" name="selIdGroup" class="sel-chosen">
    		<?php
    		if (!empty($GroupTpl)) {
    			foreach ($GroupTpl as $key => $value) {
    				if (isset($UserTpl->group_id) AND $UserTpl->group_id==$value->id) {
    					echo '<option value="'.$value->id.'" selected="selected" >'.$value->name.'</option>';
    				} else {
    					echo '<option value="'.$value->id.'" >'.$value->name.'</option>';
    				}
    			}
    		}
    		?>
    		</select>
    	</div>
    </div>
	<div class="divCls-left">
	    <div class="control-group">
	    	<label class="control-label" for="inputFirstName">First name</label>
	    	<div class="controls">
	    		<input type="text" id="inputFirstName" name="inputFirstName" class="input-xlarge" placeholder="First name" value="<?php echo isset($UserTpl->first_name) ? $UserTpl->first_name : '' ?>" />
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="inputPhone">Phone</label>
	    	<div class="controls">
	    		<input type="text" id="inputPhone" name="inputPhone" class="input-xlarge" placeholder="Phone" value="<?php echo isset($UserTpl->phone) ? $UserTpl->phone : '' ?>" />
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="inputPhone">Card holder name</label>
	    	<div class="controls">
	    		<input type="text" id="inputCardHolderName" name="inputCardHolderName" class="input-xlarge" placeholder="Card holder name" value="<?php echo isset($UserTpl->card_holder_name) ? $UserTpl->card_holder_name : '' ?>" />
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="inputPhone">Card number</label>
	    	<div class="controls">
	    		<input type="text" id="inputCardNumber" name="inputCardNumber" class="input-xlarge" placeholder="Card number" value="<?php echo isset($UserTpl->card_number) ? $UserTpl->card_number : '' ?>" />
	    	</div>
	    </div>
	</div>
	<div class="divCls-right">
	    <div class="control-group">
	    	<label class="control-label" for="inputLastName">Last name</label>
	    	<div class="controls">
	    		<input type="text" id="inputLastName" name="inputLastName" class="input-xlarge" placeholder="Last name" value="<?php echo isset($UserTpl->last_name) ? $UserTpl->last_name : '' ?>">
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="paypal_email">Paypal email</label>
	    	<div class="controls">
	    		<input type="text" id="inputPaypalEmail" name="inputPaypalEmail" class="input-xlarge" placeholder="Paypal email" value="<?php echo isset($UserTpl->paypal_email) ? $UserTpl->paypal_email : '' ?>">
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="paypal_email">Card CCV Code</label>
	    	<div class="controls">
	    		<input type="text" id="inputCardCCVCode" name="inputCardCCVCode" class="input-xlarge" placeholder="Paypal email" value="<?php echo isset($UserTpl->card_ccv_code) ? $UserTpl->card_ccv_code : '' ?>">
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="paypal_email">Card expiration</label>
	    	<div class="controls">
	    		<input type="text" id="inputCardExpirationMoth" name="inputCardExpirationMoth" class="input-xlarge" placeholder="Moth" value="<?php echo isset($UserTpl->card_expiration_month) ? $UserTpl->card_expiration_month : '' ?>">
	    		<input type="text" id="inputCardExpirationYear" name="inputCardExpirationYear" class="input-xlarge" placeholder="Year" value="<?php echo isset($UserTpl->card_expiration_year) ? $UserTpl->card_expiration_year : '' ?>">
	    	</div>
	    </div>
	</div>
	<div class="divCls-all">
    	<button type="submit" class="btn btn-success">Update</button>
	</div>
<?php echo form_close() ?>
<?php echo form_open('ajax/user/changepass', array('id'=>'form-user-change-pass')) ?>
	<input type="hidden" id="id" name="id" readonly="true" value="<?php echo isset($UserTpl->id)? $UserTpl->id : 0;?> " >
	<h2>Change password</h2>
	<div>
		<div class="control-group">
	    	<label class="control-label" for="inputEmail">Email<label class="lable-required">(*)</label></label>
	    	<div class="controls">
	    		<input type="text" id="inputEmail" name="inputEmail" class="input-xlarge <?php echo isset($UserTpl->email)? 'input-xlarge' : '';?>" <?php echo isset($UserTpl->email)? 'disabled="disabled"' : '';?>  placeholder="Email" value="<?php echo isset($UserTpl->email) ? $UserTpl->email : '';?>" >
	    	</div>
	    </div>
    </div>
    <div class="control-group">
	    <label class="control-label" for="inputPassword">Old password</label>
	    <div class="controls">
	    	<input type="password" id="inputPassword" name="inputPassword" class="input-xlarge" placeholder="Password" >
	    </div>
    </div>
    <div class="divCls-left">
		<div class="control-group">
		    <label class="control-label" for="inputNewPassword">New password</label>
		    <div class="controls">
		    	<input type="password" id="inputNewPassword" name="inputNewPassword" class="input-xlarge" placeholder="Password" >
		    </div>
	    </div>
    </div>
	<div class="divCls-right">
	    <div class="control-group">
		    <label class="control-label" for="inputConfirmNewPassword">Confirm new password</label>
		    <div class="controls">
		    	<input type="password" id="inputConfirmNewPassword" name="inputConfirmNewPassword" class="input-xlarge" placeholder="Password" >
		    </div>
	    </div>
	</div>
	<div class="divCls-all">
    	<button type="submit" class="btn btn-success">Change</button>
	</div>

<?php echo form_close() ?>
<div class="clearfix"></div>