<div class="signup">
	<div class="gray-bar">
		<div class="container">
		<div class="with-top-padding">
			<h1>Sign Up</h1>
				<div class="question">
					<h2>What would you like to do with Virool?</h2>
					<div class="buttons">
						<ul>
						<li class="advertiser">
							<span class="gray">
								I have a video that i want to promote
								<br>
								&nbsp; &nbsp; with your service
							</span>
						</li>
						<li class="publisher active">
							<span>
								I have a site/blog/app/game
								<br>
								&nbsp; &nbsp; that i want to make money on
							</span>
						</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="forms">
		<div class="container">
			<div class="form-caption advertiser-form" style="display: none;">
				<span class="gray-label">Do you want your video to get more targeted views? (Signup is free, min video promo budget is just $10)</span>
				<br>
				<span class="gray-label">Sign up as</span>
				<span class="gray-label bold">Advertiser:</span>
				<div class="form-container">
					<form id="advertiser-form" accept-charset="UTF-8" action="<?php echo site_url('user/register_new_user') ?>" class="form-inline" data-remote="true" method="post">
						<input id="user_kind" name="user_kind" type="hidden" value="advertiser">
						<div class="account-form margin-top-15" role="account_form">
							<div class="page-inline-form">
								<input autocomplete="off" class="span4" id="advertiser_email" name="user[email]" placeholder="Email Address" size="30" style="margin-left: 0;" type="text">
								<input autocomplete="off" class="span4" id="advertiser_password" name="user[password]" placeholder="Password" size="30" type="password">
								<input class="lightblue span2" data-disable-with="Submitting form..." name="commit" style="width: 350px;" type="submit" value="start my campaign">
							</div>
						</div>
					</form>

				</div>
			</div>
			<div class="form-caption publisher-form" style="">
				<span class="gray-label">We will pay you for publishing our videos on your site, blog, game or app. (You can withdraw money daily )</span>
				<br>
				<span class="gray-label">Sign up as</span>
				<span class="gray-label bold">Publisher:</span>
				<div class="form-container">
					<form id="publisher-form" accept-charset="UTF-8" action="<?php echo site_url('user/register_new_user') ?>" class="form-inline" data-remote="true" method="post">
						<input id="user_kind" name="user_kind" type="hidden" value="publisher">
						<div class="account-form margin-top-15" role="account_form">
							<div class="page-inline-form">
								<input autocomplete="off" class="span4" id="publisher_email" name="user[email]" placeholder="Email Address" size="30" style="margin-left: 0;" type="text">
								<input autocomplete="off" class="span4" id="publisher_password" name="user[password]" placeholder="Password" size="30" type="password">
								<input class="btn btn-primary span2" data-disable-with="Submitting form..." name="commit" style="width: 350px;" type="submit" value="start making money">
							</div>
						</div>
					</form>
				</div>
			</div>
			<p style="padding-top: 10px">
				Already have account?
				<a href="<?php echo site_url('login') ?>">Login now</a>
			</p>
		</div>
	</div>
</div>