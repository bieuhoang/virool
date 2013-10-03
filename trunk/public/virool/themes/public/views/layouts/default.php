<!DOCTYPE html>
<!--[if lt IE 7]>
<html class='no-js lt-ie9 lt-ie8 lt-ie7'></html>
<![endif]-->
<!--[if IE 7]>
<html class='no-js lt-ie9 lt-ie8'></html>
<![endif]-->
<!--[if IE 8]>
<html class='no-js lt-ie9'></html>
<![endif]-->
<!--[if gt IE 8]>
<html class='no-js'></html>
<![endif]-->
<html class='no-js'>
<head>
	<!-- / site favicon, logo and other logo-related links -->
	<link href='/favicon.ico' rel='shortcut icon' type='image/vnd.microsoft.icon'>
	<!-- / page info: title, description and keywords -->
	<title><?php echo $template['title'] ?></title>
	<meta content="Get targeted YouTube views to your videos with Virool's social video advertising platform. Have your video seeded on blogs, social games and mobile apps." name='description'>
	<meta content='virool, video seeding, youtube views, youtube traffic, targeted youtube views, social video advertising, video promotion, video ads, get more youtube views, increase youtube views, promote video, get video to go viral' name='keywords'>

	<!-- / other page meta goes here -->
	<meta charset='<?php echo config_item('charset') ?>'>
	<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
	<meta content='text/html; charset=<?php echo config_item('charset') ?>' http-equiv='Content-Type'>
	<meta content='en' http-equiv='content-language'>
	<meta content='en' name='language'>
	<meta content='width=device-width' name='viewport'>
	<!--[if lt IE 7]>
	<style media="screen" type="text/css">
	#container {
	  height:100%;
	}
	</style>
	<![endif]-->
	<?php echo $this->assets->get_styles() ?>
	<script type="text/javascript">
		window.site = <?php echo json_encode($site_config) ?>
	</script>

</head>
<body>

	<div id="container">

		<?php if (isset($template['partials']['header'])): ?>
			<?php echo $template['partials']['header'] ?>	
		<?php endif ?>

		<div id="page">
			<?php echo $template['body'] ?>
		<div>

		<?php if (isset($template['partials']['footer'])): ?>
			<?php echo $template['partials']['footer'] ?>	
		<?php endif ?>
	</div>

	<?php echo get_scripts() ?>
</body>
</html>