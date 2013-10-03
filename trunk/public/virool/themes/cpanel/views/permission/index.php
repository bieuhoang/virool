<?php if($this->session->flashdata('message_error')): ?>
	<h3>Error:</h3>
	<p><?php echo $this->session->flashdata('message_error') ?></p>
<?php endif ?>
<?php if($this->session->flashdata('message_info')): ?>
	<h3>Error:</h3>
	<p><?php echo $this->session->flashdata('message_info') ?></p>
<?php endif ?>
<?php if($this->session->flashdata('message_warning')): ?>
	<h3>Error:</h3>
	<p><?php echo $this->session->flashdata('message_warning') ?></p>
<?php endif ?>