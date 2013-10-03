<div class="container">
	<div class="login-form margin-top-30 margin-bottom-50">
		<h2 class="page-heading text-align-center">Welcome Back!</h2>
		<div class="row">
			<div class="span6 offset3">
				<form accept-charset="UTF-8" action="<?php echo site_url('user/login') ?>" autocomplete="on" method="post">					
					<label for="user_devise_login">Email</label>
					<input class="span6 required email" id="user_devise_login" name="user_devise_login" size="30" type="text">

					<label for="user_password">Password</label>
					<input class="span6 required password" id="user_password" name="user_password" size="30"  type="password">

					<label class="checkbox" for="user_remember_me">
						<input name="user[remember_me]" type="hidden" value="0">
						<input id="user_remember_me" name="user[remember_me]" type="checkbox" value="1" style="float: none;">
						remember me
					</label>
					<input class="btn btn-primary span2" name="commit" type="submit" value="Login">
					<a href="<?php echo site_url('forgot_password') ?>" class="btn btn-link">Forgot Your Password?</a>

					<p style="padding-top: 10px">Don't have account yet? <a href="<?php echo site_url('signup') ?>">Sign up now!</a></p>
				</form>

			</div>
		</div>
	</div>
</div>