<div class="title">
	<h3><?php echo isset($group) ? ('Edit group: '.$group->name) : 'Add new group' ?></h3>
	Below you will find <b>Groups</b> table examples.
</div>

<?php echo form_open(site_url('ajax/group/edit'), array('id' => 'form')) ?>

<input type="hidden" name="id" id="id" value="<?php echo isset($group) ? $group->id : 0 ?>">
	<div class="control-group">
		<label class="control-label" for="inputEmail">Name:</label>
		<div class="controls">
			<input type="text" id="groupName" class="input-xlarge" name="groupName" placeholder="Email" value="<?php echo (isset($group) ? $group->name : '');?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputEmail">Description:</label>
		<div class="controls">
			<textarea id="groupDescription" class="textAarea" name="groupDescription" placeholder="Email" ><?php echo (isset($group) ? $group->description : '');?></textarea>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputEmail">Permission:</label>
		<div class="controls">
			<label class="checkbox inline">
				<input type="checkbox" id="can_add" name="can_add" value="1" <?php echo (isset($group) and $group->can_add==1) ? 'checked="checked"' : '';?> > Can add
			</label>
			<label class="checkbox inline">
				<input type="checkbox" id="can_view" name="can_view" value="1" <?php echo (isset($group) and $group->can_view==1) ? 'checked="checked"' : '';?> > Can view
			</label>
			<label class="checkbox inline">
				<input type="checkbox" id="can_edit" name="can_edit" value="1" <?php echo (isset($group) and $group->can_edit==1) ? 'checked="checked"' : '';?> > Can edit
			</label>
			<label class="checkbox inline">
				<input type="checkbox" id="can_delete" name="can_delete" value="1" <?php echo (isset($group) and $group->can_delete==1) ? 'checked="checked"' : '';?> > Can delete
			</label>
		</div>
	</div>
	<div class="control-group" >
    	<input type="submit" class="btn btn-success" value="<?php echo (isset($group) ? 'Update' : 'Added new');?>" />
	</div>
<?php echo form_close(); ?>