<div class="title">
	<h3>Pages management</h3>
	Below you will find <b>Pages</b> table examples.
</div>
<?php if($this->session->flashdata('message_error')): ?>
	<div class="message error">
		<h3>Error</h3>
		<p><?php echo $this->session->flashdata('message_error') ?></p>
	</div>
<?php endif ?>

<!-- ACTIONS -->
<?php echo ci()->actions('add', 'delete') ?>

<table cellpadding="0" cellspacing="0" width="100%" id="datatable">
	<thead>
		<tr>
			<th width="3%" align="center" data-name="checkbox"><input type="checkbox" id="checkall" class="uniform"></th>
			<th width="30%" abbr="name" align="left" data-name="name">Name</th>
			<th width="40%" align="left" data-name="content">Content</th>
			<!-- <th width="50%" align="left" data-name="author">Created by</th> -->
			<th width="15%" align="left" data-name="created_at">Created at</th>
			<th width="10%" align="center" data-name="actions">Actions</th>
		</tr>
	</thead>
	<tbody></tbody>
</table>