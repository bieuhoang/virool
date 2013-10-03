<div class="title">
	<h3>Users management</h3>
	Below you will find <b>Admintasia</b> table examples.
</div>
<div class="button-actions">
	<a href="<?php echo base_url()?>admin/user/edit" class="action-add"><span class="led-icon led-icon-add nmr"></span> Add new</a>
	<a href="javascript:;" class="action-delete"><span class="led-icon led-icon-cross nmr"></span> Delete</a>
</div>
<div class="button-actions">
	<div class="clear mt5"></div>
	<label for="">Type</label>
	<select name="type" class="uniform" id="option-group">
		<option value="">Choose type</option>
		<?php if ( $Group->result_count() ) :?>
			<?php foreach ($Group as $key => $value) : ?>
				<option value="<?php echo $value->id?>"><?php echo $value->name;?></option>
			<?php endforeach ?>
		<?php endif ?>
	</select>
	<div class="clear mb5"></div>
</div>
<table cellpadding="0" cellspacing="0" width="100%" id="datatable">
	<thead>
		<tr>
			<th width="3%" align="center" data-name="checkbox"><input type="checkbox" id="checkall" class="uniform"></th>
			<th width="20%" abbr="first_name" align="left" data-name="fullname">Fullname</th>
			<th width="30%" abbr="email" align="left" data-name="email">Email</th>
			<th width="10%" abbr="group" align="left" data-name="group">Group</th>
			<th width="15%" align="center" data-name="created_at">Created at</th>
			<th width="6%" align="center" data-name="percentage">%</th>
			<th width="8%" align="center" data-name="totalamount">Total Amount</th>
			<th width="8%" align="center" data-name="actions">Actions</th>
		</tr>
	</thead>
	<tbody></tbody>
</table>