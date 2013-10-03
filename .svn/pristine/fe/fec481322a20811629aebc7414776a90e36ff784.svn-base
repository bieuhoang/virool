<div class="title">
	<h3><?php echo isset($status) ? ('Edit status: '.$status->name) : 'Add new status' ?></h3>
	Below you will find <b>Status</b> table examples.
</div>

<?php echo form_open(site_url('ajax/item/edit_status'), array('id' => 'form')) ?>

<input type="hidden" name="id" id="id" value="<?php echo isset($status) ? $status->id : 0 ?>">
<ul>
	<li>
		<label class="desc" for="">Name:</label>
		<input type="text" class="field text large" id="name" name="name" value="<?php echo isset($status) ? $status->name : '' ?>">
	</li>
	<li>
		<label class="desc" for="value">Color:</label>
		<input type="text" class="field text small" id="value" name="value" value="<?php echo isset($status) ? $status->value : '' ?>">
	</li>
	<li>
		<label class="desc" for="sort">Sort:</label>
		<input type="text" class="field text small" id="sort" name="sort" value="<?php echo isset($status) ? $status->sort : '' ?>">
	</li>
	<li>
		<input type="submit" class="ui-buttons positive" value="Submit">
	</li>
</ul>

<?php echo form_close(); ?>