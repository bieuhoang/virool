<div class="site-hero" id="contact-us-hero-unit"></div>

<div class="container" id="contact-us-page">
	<div id="about-pages-nav">
		<div class="inner">
			<ul class="nav nav-tabs">
				<li class=""><?php echo anchor('about', 'about us') ?></li>
				<li class=""><?php echo anchor('meet-the-team', 'our team') ?></li>
				<li class=""><?php echo anchor('work-at-virool', 'join our team') ?></li>
				<li><?php echo anchor('press', 'press about us') ?></li>
				<li><?php echo anchor('investors', 'investors') ?></li>
				<li class="active"><?php echo anchor('contact', 'contact us') ?></li>
			</ul>
		</div>
	</div>

	<div class="content">
		<h2 class="page-heading text-align-center">contact us</h2>
		<div class="row margin-bottom-50">
			<div class="span6">
				<div class="contact-info row">
					<div class="span3">
					<a href="https://maps.google.com/maps?q=767+Bryant+St,+San+Francisco,+CA,+USA&amp;hl=en&amp;sll=37.776358,-122.401564&amp;sspn=0.01021,0.01929&amp;oq=767+Bryant+St.+&amp;hnear=767+Bryant+St,+San+Francisco,+California+94107&amp;t=m&amp;z=16" target="_blank" title="View Map"><img alt="map" src="https://assets-host.s3.amazonaws.com/assets/contactus-map-1f912f3268809c7df1b5071590ee5807.png"></a>
					</div>
					<div class="span3">
						<div class="margin-left-15">
							<div class="address-item clearfix margin-top-10">
								<div class="address-icon"><img alt="email" src="<?php echo asset('img/pink-email-icon.png') ?>"></div>
								<div class="address-content"><a href="mailto:<?php echo config_item('email_contact') ?>"><?php echo config_item('email_contact') ?></a></div>
							</div>
							<div class="address-item clearfix margin-top-25">
								<div class="address-icon"><img alt="phone" src="<?php echo asset('img/pink-phone-icon.png') ?>"></div>
								<div class="address-content"><?php echo config_item('phone') ?></div>
							</div>
							<div class="address-item clearfix margin-top-25">
								<div class="address-icon"><img alt="address" src="<?php echo asset('img/pink-marker-icon.png') ?>"></div>
								<div class="address-content">
									<address><?php echo config_item('address') ?></address>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="span6">
			<div class="contact-form-container margin-top-10">
			<p>
			Feel free to contact us at any time. We’ll do our best to
			<br>
			respond back to you within 24 hours.
			</p>
			<div class="contact-form">
			<form accept-charset="UTF-8" action="/contact" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="hO+7y+r09CvfM0MOEVn0tWnh8zuj/1kDTTJw8inxNmQ="></div><label for="contact_name">name</label>
			<input autocomplete="off" class="span6" id="contact_name" name="contact[name]" size="30" type="text">
			<label for="contact_email">email</label>
			<input autocomplete="off" class="span6" id="contact_email" name="contact[email]" size="30" type="text">
			<label for="contact_phone_number">phone number</label>
			<input autocomplete="off" class="span6" id="contact_phone_number" name="contact[phone_number]" size="30" type="text">
			<label for="contact_subject">subject</label>
			<input autocomplete="off" class="span6" id="contact_subject" name="contact[subject]" size="30" type="text">
			<label for="user_captcha">Verification</label>
			<div class="input-append" id="captcha-field">
			<input autocomplete="off" class="span5" id="captcha" name="captcha" placeholder="" required="required" type="text"><input id="captcha_key" name="captcha_key" type="hidden" value="1e6f6f89ba890c1759132dc78bbabcb4e11c2ecd">
			<span class="add-on"><img alt="captcha" src="<?php echo asset('img/simple_captcha.jpg') ?>"></span>
			</div>
			<span class="help-block">Please type the characters you see to prove that you are human</span>

			<label for="contact_body">message</label>
			<textarea class="span6" cols="40" id="contact_body" name="contact[body]" rows="5"></textarea>
			<input class="btn btn-primary" name="commit" type="submit" value="submit">
			</form>

			</div>
			</div>
			</div>
		</div>
	</div>
</div>