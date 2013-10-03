<div class="title">
	<h3>Login histories management</h3>
	Below you will find <b>Admintasia</b> table examples.
</div>
<div class="button-actions">
	<label for="">Users</label>
	<select name="user_id" class="chz-chosen" id="user_id" style="width: 300px;" data-placeholder="Choose a user...">
		<?php foreach($users as $user): ?>
		<option value="<?php echo $user->id ?>"><?php echo $user->fullname() ?></option>
		<?php endforeach ?>
	</select>
	<div class="clear mb5"></div>
</div>
<table cellpadding="0" cellspacing="0" width="100%" id="datatable">
	<thead>
		<tr>
			<th width="3%" align="center" data-name="checkbox"><input type="checkbox" id="checkall" class="uniform"></th>
			<th width="12%" align="left" data-name="username">Username</th>
			<th width="15%" align="left" data-name="fullname">Fullname</th>
			<th width="15%" align="center" data-name="ip_address">IP address</th>
			<th width="35%" align="center" data-name="user_agent">User agent</th>
			<th width="20%" align="left" data-name="login_time">Login time</th>
		</tr>
	</thead>
	<tbody></tbody>
</table>