<div class="title">
	<h3>Statuses management</h3>
	Below you will find <b>Statuses</b> table examples.
</div>

<!-- MESSAGES -->
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
			<th width="47%" align="left" data-name="name">Name</th>
			<th width="25%" align="center" data-name="color">Color</th>
			<th width="10%" align="center" data-name="sort">Sort</th>
			<th width="10%" align="center" data-name="actions">Actions</th>
		</tr>
	</thead>
	<tbody></tbody>
</table>