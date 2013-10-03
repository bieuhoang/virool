<div class="title">
	<h3>Groups management</h3>
	Below you will find <b>Groups</b> table examples.
</div>
<?php if($this->session->flashdata('message_error')): ?>
	<div class="message error">
		<h3>Error</h3>
		<p><?php echo $this->session->flashdata('message_error') ?></p>
	</div>
<?php endif ?>

<!-- ACTIONS -->
<?php echo ci()->actions('add', 'delete') ?>

<!-- TABLE -->
<table cellpadding="0" cellspacing="0" width="100%" id="datatable">
	<thead>
		<tr>
			<th width="3%" align="center" data-name="checkbox"><input type="checkbox" id="checkall" class="uniform"></th>
			<th width="30%" abbr="name" align="left" data-name="name">Name</th>
			<th width="39%" align="left" data-name="description">Description</th>
			<th width="5%" align="center" data-name="can_view">View</th>
			<th width="5%" align="center" data-name="can_add">Add</th>
			<th width="5%" align="center" data-name="can_edit">Edit</th>
			<th width="5%" align="center" data-name="can_delete">Delete</th>
			<th width="13%" align="center" data-name="actions">Actions</th>
		</tr>
	</thead>
	<tbody></tbody>
</table>