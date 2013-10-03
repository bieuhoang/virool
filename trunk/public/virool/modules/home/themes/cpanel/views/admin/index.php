<div class="title">
	<h3>Products Insert management</h3>
	Below you will find <b>Product Insert</b> table examples.
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
			<th width="15%" align="left" data-name="telephone">Phone</th>
			<th width="10%" align="left" data-name="dni">DNI</th>
			<th width="15%" align="left" data-name="product_name">Product name</th>
			<th width="10%" align="left" data-name="product_weight">Weight</th>
			<th width="15%" align="left" data-name="product_price">Price</th>
			<th width="15%" align="left" data-name="product_image">Image</th>
			<th width="15%" align="left" data-name="product_collection">Collection</th>
			<th width="8%" align="center" data-name="actions">Actions</th>
		</tr>
	</thead>
	<tbody></tbody>
</table>