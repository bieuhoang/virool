<div class="title">
	<h3>Sites management</h3>
	Below you will find <b>Admintasia</b> table examples.
</div>
<div class="button-actions">
	<a href="<?php echo base_url()?>admin/mysites/edit" class="action-add"><span class="led-icon led-icon-add nmr"></span> Add new</a>
	<a href="javascript:;" class="action-delete"><span class="led-icon led-icon-cross nmr"></span> Delete</a>
</div>
<div class="button-actions">
	<div class="clear mt5"></div>
	<label for="">Type</label>
	<select name="type" class="uniform" id="">
		<option value="">Choose type</option>
		<option value="1">Administrator</option>
		<option value="2">Member</option>
	</select>
	<div class="clear mb5"></div>
</div>
<table cellpadding="0" cellspacing="0" width="100%" id="datatable">
	<thead>
		<tr>
			<th width="3%" align="center" data-name="checkbox"><input type="checkbox" id="checkall" class="uniform"></th>
			<th width="21%" abbr="title" align="left" data-name="title">Title</th>
			<th width="40%" abbr="url" align="left" data-name="url">Sites</th>
			<th width="10%" abbr="user_id" align="left" data-name="user_id">User</th>
			<th width="15%" align="center" data-name="created_at">Created at</th>
			<th width="11%" align="center" data-name="actions">Actions</th>
		</tr>
	</thead>
	<tbody></tbody>
</table>