<div class="title">
	<h3>Videos management.</h3>
</div>
<div class="button-actions">
	<a href="javascript:;" class="action-add"><span class="led-icon led-icon-add nmr"></span> Add new</a>
	<a href="javascript:;" class="action-delete"><span class="led-icon led-icon-cross nmr"></span> Delete</a>
</div>
<div class="button-actions">
	<div class="clear mt5"></div>
	<label for="">Type</label>
	<select name="type" class="uniform" id="option-group">
		<option value="">Choose type</option>
		<?php
			if ( isset($Groupstpl) AND $Groupstpl->result_count() )
			{
				foreach ($Groupstpl as $key => $value) {
					echo '<option value="'.$value->id.'">'.$value->name.'</option>';
				}
			}
		?>
	</select>
	<div class="clear mb5"></div>
</div>
<table cellpadding="0" cellspacing="0" width="100%" id="datatable">
	<thead>
		<tr>
			<th width="3%" align="center" data-name="checkbox"><input type="checkbox" id="checkall" class="uniform"></th>
			<th width="5%" align="left" data-name="image">Image</th>
			<th width="47%" abbr="title" align="left" data-name="title">Title</th>
			<th width="5%" align="center" data-name="view">Views</th>
			<th width="20%" align="center" data-name="user_id">User</th>
			<th width="10%" align="left" data-name="group_id">Group</th>
			<th width="10%" align="center" data-name="actions">Actions</th>
		</tr>
	</thead>
	<tbody></tbody>
</table>