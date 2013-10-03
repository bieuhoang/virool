<div class="title">
	<h3>Franchise management</h3>
	Below you will find <b>Franchise</b> table examples.
</div>
<?php if($this->session->flashdata('message_error')): ?>
	<div class="message error">
		<h3>Error</h3>
		<p><?php echo $this->session->flashdata('message_error') ?></p>
	</div>
<?php endif ?>

<table cellpadding="0" cellspacing="0" width="100%" id="datatable">
	<thead>
		<tr>
			<th width="3%" align="center" data-name="checkbox"><input type="checkbox" id="checkall" class="uniform"></th>
			<th width="29%" align="left" data-name="fullname">Fullname</th>
			<th width="15%" align="left" data-name="company">Company</th>
			<th width="10%" align="left" data-name="city">City</th>
			<th width="15%" align="left" data-name="population">Population</th>
			<th width="10%" align="left" data-name="province">Province</th>
			<th width="15%" align="left" data-name="code_postal">Code Postal</th>
			<th width="15%" align="left" data-name="telephone">Telephone</th>
			<th width="15%" align="left" data-name="email">Email</th>
			<th width="15%" align="left" data-name="message">Message</th>
		</tr>
	</thead>
	<tbody></tbody>
</table>