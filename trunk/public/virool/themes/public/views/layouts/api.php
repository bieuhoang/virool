<!DOCTYPE html>
<html >
<head>
	<title><?php echo $template['title'] ?></title>
	<meta content="Get targeted YouTube views to your videos with Virool's social video advertising platform. Have your video seeded on blogs, social games and mobile apps." name='description'>
	<meta content='virool, video seeding, youtube views, youtube traffic, targeted youtube views, social video advertising, video promotion, video ads, get more youtube views, increase youtube views, promote video, get video to go viral' name='keywords'>
	<script type="text/javascript">
		window.site = <?php echo json_encode($site_config) ?>;
		var jsoption = <?php echo json_encode($Param) ?>;
	</script>
	<style type="text/css">
		body {
			height: 100%;
		    margin: 0;
		    padding: 0;
		    width: 100%;
		}
		#id-display-document{
			width: "<?php echo !empty($width) ? $width : 400?>px";
			height: "<?php echo !empty($height) ? $height : 300?>px";
		    margin: 0;
		    padding: 0;
		}
	</style>
<?php echo $this->assets->get_styles() ?>
</head>
<body>
	<?php echo $template['body'] ?>	
	<?php echo get_scripts() ?>
</body>
</html>