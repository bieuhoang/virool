<div class="title title-spacing">
	<h2>Edit site</h2>
	This form has all inputs set to large, so they will be 100% in width.
</div>

<?php echo form_open('ajax/mysites/update', array('id'=>'form-site-update')) ?>
	<input type="hidden" id="id" name="id" readonly="true" value="<?php echo isset($Mysitestpl->id)? $Mysitestpl->id : '0';?> " >
	<?php if ( isset($userPulicsher) ) : ?>
	<div class="control-group">
    	<label class="control-label" for="selUser">Group</label>
    	<div class="controls">
    		<select id="selUser" name="selUser" class="selec-chosen">
    		<?php
    			foreach ($userPulicsher as $keyUser => $valueUser) {
    				echo '<option value="'.$valueUser->id.'" >'.$valueUser->email.'</option>';
    			}
    		?>
    		</select>
    	</div>
    </div>
	<?php endif;?>
	<div class="divCls-left">
	    <div class="control-group">
	    	<label class="control-label" for="inputFirstTitle">Title</label>
	    	<div class="controls">
	    		<input type="text" id="inputTitle" name="inputTitle" class="input-xlarge" placeholder="Title" value="<?php echo isset($Mysitestpl->title) ? $Mysitestpl->title : '' ?>" />
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="inputUrl">Url</label>
	    	<div class="controls">
	    		<input type="text" id="inputUrl" name="inputUrl" class="input-xlarge" placeholder="Url link" value="<?php echo isset($Mysitestpl->url) ? $Mysitestpl->url : '' ?>" />
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="inputcallback_url">Callback url</label>
	    	<div class="controls">
	    		<input type="text" id="inputCallbackUrl" name="inputCallbackUrl" class="input-xlarge" placeholder="Callback url" value="<?php echo isset($Mysitestpl->callback_url) ? $Mysitestpl->callback_url : '' ?>" />
	    	</div>
	    </div>
	    
	</div>
	<div class="divCls-right">
	    <div class="control-group">
	    	<label class="control-label" for="inputKeyword">Keywords</label>
	    	<div class="controls">
	    		<input type="text" id="inputKeyword" name="inputKeyword" class="input-xlarge" placeholder="Keywords" value="<?php echo isset($Mysitestpl->keywords) ? $Mysitestpl->keywords : '' ?>">
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="paypal_SignatureTemplate">Signature template</label>
	    	<div class="controls">
	    		<input type="text" id="inputSignatureTemplate" name="inputSignatureTemplate" class="input-xlarge" placeholder="Signature template" value="<?php echo isset($Mysitestpl->signature_template) ? $Mysitestpl->signature_template : '' ?>">
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="paypal_currency">Currency</label>
	    	<div class="controls">
	    		<input type="text" id="inputCurrency" name="inputCurrency" class="input-xlarge" placeholder="Currency" value="<?php echo isset($Mysitestpl->currency) ? $Mysitestpl->currency : '' ?>">
	    		<label class="lable-bang">=</label>
	    		<input type="text" id="inputCurrencyConversionRate" name="inputCurrencyConversionRate" class="input-xlarge" placeholder="Currency Conversion Rate" value="<?php echo isset($Mysitestpl->currency_conversion_rate) ? $Mysitestpl->currency_conversion_rate : '' ?>">
	    	</div>
	    </div>
	</div>
	<div class="clear"></div>
	<div class="control-group">
    	<label class="control-label" for="paypal_Categorys">Category</label>
    	<div class="controls">
    		<select id="selCategorys" name="selCategorys[]" class="selec-chosen" multiple="multiple">
    		<?php
    		if ($Categorytpl->result_count()) {
    			foreach ($Categorytpl as $keyCate => $valueCate) {
    				if (isset($Mysitestpl->categorys_id) AND in_array($valueCate->id , json_decode($Mysitestpl->categorys_id))) {
    					echo '<option value="'.$valueCate->id.'" selected="selected" >'.$valueCate->name.'</option>';
    				} else {
    					echo '<option value="'.$valueCate->id.'" >'.$valueCate->name.'</option>';
    				}
    			}
    		}
    		?>
		</select>
    	</div>
    </div>
	<div class="control-group">
    	<label class="control-label" for="paypal_platforms">Platforms</label>
    	<div class="controls">
    		<select id="selPlatforms" name="selPlatforms[]" class="selec-chosen" multiple="multiple">
    		<?php
    		if ($Platformstpl->result_count()) {
    			foreach ($Platformstpl as $keyPlat => $valuePlat) {
    				if (isset($Mysitestpl->platforms) AND in_array($valuePlat->id , json_decode($Mysitestpl->platforms))) {
    					echo '<option value="'.$valuePlat->id.'" selected="selected" >'.$valuePlat->title.'</option>';
    				} else {
    					echo '<option value="'.$valuePlat->id.'" >'.$valuePlat->title.'</option>';
    				}
    			}
    		}
    		?>
		</select>
    	</div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="paypal_Countrys">Countrys</label>
    	<div class="controls">
    		<select id="selCountrys" name="selCountrys[]" class="selec-chosen" multiple="multiple">
    		<?php
    		if ($Countrytpl->result_count()) {
    			foreach ($Countrytpl as $keyCoun => $valueCoun) {
    				if (isset($Mysitestpl->countries) AND in_array($valueCoun->id , json_decode($Mysitestpl->countries))) {
    					echo '<option value="'.$valueCoun->id.'" selected="selected" >'.$valueCoun->name.'</option>';
    				} else {
    					echo '<option value="'.$valueCoun->id.'" >'.$valueCoun->name.'</option>';
    				}
    			}
    		}
    		?>
		</select>
    	</div>
    </div>
    <div class="divCls-left">
	    <div class="control-group">
	    	<label class="control-label" for="inputDescription">Description</label>
	    	<div class="controls">
	    		<textarea id="inputDescription" name="inputDescription" class="input-xlarge" placeholder="Description" ><?php echo isset($Mysitestpl->description) ? $Mysitestpl->description : '' ?></textarea>
	    	</div>
	    </div>
	</div>
    <div class="divCls-right">
	    <div class="control-group">
	    	<label class="control-label" for="inputEncryptionMethod">Encryption method</label>
	    	<div class="controls">
	    		<label class="encryptionMethod"><input type="radio" <?php echo ( isset($Mysitestpl) AND $Mysitestpl->encryption_method=='plain' ) ? 'checked="checked"' : (isset($Mysitestpl) ? '' : 'checked="checked"') ?> name="rdoEncryptionMethod" id="rdoEncryptionMethod" value="plain">Plain</label>
	    		<label class="encryptionMethod"><input type="radio" <?php echo ( isset($Mysitestpl) AND $Mysitestpl->encryption_method=='md5' ) ? 'checked="checked"' : '' ?> name="rdoEncryptionMethod" id="rdoEncryptionMethod" value="md5">Md5</label>
	    		<label class="encryptionMethod"><input type="radio" <?php echo ( isset($Mysitestpl) AND $Mysitestpl->encryption_method=='sha1' ) ? 'checked="checked"' : '' ?> name="rdoEncryptionMethod" id="rdoEncryptionMethod" value="sha1">Sha1</label>
	    		<label class="encryptionMethod"><input type="radio" <?php echo ( isset($Mysitestpl) AND $Mysitestpl->encryption_method=='hmacmd5' ) ? 'checked="checked"' : '' ?> name="rdoEncryptionMethod" id="rdoEncryptionMethod" value="hmacmd5">Hmacmd5</label>
	    		<label class="encryptionMethod"><input type="radio" <?php echo ( isset($Mysitestpl) AND $Mysitestpl->encryption_method=='hmacsha1' ) ? 'checked="checked"' : '' ?> name="rdoEncryptionMethod" id="rdoEncryptionMethod" value="hmacsha1">Hmacsha1</label>
	    	</div>
	    </div>
	</div>
    <!-- end form -->
	<div class="divCls-all">
    	<button type="submit" class="btn btn-success"><?php echo isset($Mysitestpl) ? 'Update' : 'Added new';?></button>
	</div>
<?php echo form_close() ?>
<div class="clearfix"></div>