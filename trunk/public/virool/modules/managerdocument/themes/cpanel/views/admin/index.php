<div class="title">
	<h3>Management Document</h3>
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
			<th width="20%" align="center" data-name="advertiser">Advertiser</th>
			<th width="5%" align="left" data-name="image">Image</th>
			<th width="25%" abbr="title" align="left" data-name="title">Document</th>
			<th width="5%" align="center" data-name="action">Action</th>
			<th width="4%" align="center" data-name="view">View</th>
			<th width="20%" align="left" data-name="publisher">Publisher</th>
			<th width="5%" align="left" data-name="percent">%</th>
			<th width="8%" align="center" data-name="created_at">Date</th>
			<th width="8%" align="center" data-name="actions">Actions</th>
		</tr>
	</thead>
	<tbody></tbody>
</table>