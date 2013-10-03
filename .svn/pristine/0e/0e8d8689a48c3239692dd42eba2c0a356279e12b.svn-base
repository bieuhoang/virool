<div class="title">
	<h3>Settings</h3>
	Below you will find <b>Admintasia</b> table examples.
</div>

<?php echo form_open() ?>

<ul>
	<li>
		<label class="desc" for="">Site name:</label>
		<input type="text" class="field text large" id="site_name" name="site_name" value="<?php echo $option->site_name ?>">
	</li>
	<li>
		<label class="desc" for="code">Site description:</label>
		<input type="text" class="field text large" id="site_description" name="site_description" value="<?php echo $option->site_description ?>">
	</li>
	<li>
		<label class="desc" for="code">Site Off:</label>
		<select name="site_off" id="site_off">
			<?php foreach(array(0 => 'No', 1 => 'Yes') as $key => $val): ?>
			<option value="<?php echo $key ?>"<?php echo $key == $option->site_off?' selected="selected"':'' ?>><?php echo $val ?></option>
			<?php endforeach ?>
		</select>
	</li>
	<li>
		<label class="desc" for="site_off_reason">Reason:</label>
		<textarea name="site_off_reason" id="site_off_reason" cols="85" rows="7"><?php echo $option->site_off_reason ?></textarea>
	</li>
	<li>
		<input type="submit" class="ui-buttons positive" value="Submit">
	</li>
</ul>

<?php echo form_close(); ?>