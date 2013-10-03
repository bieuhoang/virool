
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title><?php echo isset($template['title']) ? $template['title'] : 'Virool' ?></title>
<!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
<?php echo $this->assets->get_styles(); ?>
<script type="text/javascript">
	window.site = <?php echo json_encode($site_config) ?>
</script>
</head>

<body>

	<!-- Fixed top -->
	<div id="top">
		<div class="fixed">
			<a href="<?php echo base_url();?>" title="" target="_blank" class="logo"><img src="<?php echo base_url();?>assets/img/logo.png" alt="" /></a>
			<ul class="top-menu">
				<li><a class="fullview"></a></li>
				<li><a class="showmenu"></a></li>
				<li><a href="#" title="" class="messages"><i class="new-message"></i></a></li>
				<li class="dropdown">
					<a class="user-menu" data-toggle="dropdown"><span><?php echo $this->user->first_name.', '.$this->user->last_name;?><b class="caret"></b></span></a>
					<ul class="dropdown-menu">
						<li><a href="#" title=""><i class="icon-user"></i>Profile</a></li>
						<li><a href="#" title=""><i class="icon-inbox"></i>Messages<span class="badge badge-info">9</span></a></li>
						<li><a href="#" title=""><i class="icon-cog"></i>Settings</a></li>
						<li><a href="<?php echo base_url();?>logout" title=""><i class="icon-remove"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /fixed top -->


	<!-- Content container -->
	<div id="container">

		<!-- Sidebar -->
		<div id="sidebar">

			<div class="sidebar-tabs">
		        <ul class="tabs-nav two-items">
		            <li><a href="#general" title=""><i class="icon-reorder"></i></a></li>
		            <li><a href="#stuff" title=""><i class="icon-cogs"></i></a></li>
		        </ul>

		        <div id="general">
				    <!-- Main navigation -->
			        <?php if (isset($template['partials']['navigation'])): ?>
						<?php echo $template['partials']['navigation'] ?>	
					<?php endif ?>
			        <!-- /main navigation -->
		        </div>

		    </div>
		</div>
		<!-- /sidebar -->


		<!-- Content -->
		<div id="content">

		    <!-- Content wrapper -->
		    <div class="wrapper">

			    <!-- Breadcrumbs line -->
			    <div class="crumbs">
		            <ul id="breadcrumbs" class="breadcrumb"> 
		                <li><a href="<?php echo base_url()?>dashboard">Dashboard</a></li>
		                <!-- <li class="active"><a href="calendar.html" title="">Calendar</a></li> -->
		            </ul>
		            <ul class="alt-buttons">
		                <li><a href="#" title=""><i class="icon-signal"></i><span>Stats</span></a></li>
		                <li><a href="#" title=""><i class="icon-comments"></i><span>Messages</span></a></li>
		                <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Tasks</span> <strong>(+16)</strong></a>
		                	<ul class="dropdown-menu pull-right">
		                        <li><a href="#" title=""><i class="icon-plus"></i>Add new task</a></li>
		                        <li><a href="#" title=""><i class="icon-reorder"></i>Statement</a></li>
		                        <li><a href="#" title=""><i class="icon-cog"></i>Settings</a></li>
		                	</ul>
		                </li>
		            </ul>
			    </div>
			    <!-- /breadcrumbs line -->
			    <?php echo $template['body'] ?>
		    </div>
		    <!-- /content wrapper -->
		</div>
		<!-- /content -->

	</div>
	<!-- /content container -->


	<!-- Footer -->
	<div id="footer">
		<div class="copyrights">&copy;  Brought to you by Eugene Kopyov.</div>
		<ul class="footer-links">
			<li><a href="" title=""><i class="icon-cogs"></i>Contact admin</a></li>
			<li><a href="" title=""><i class="icon-screenshot"></i>Report bug</a></li>
		</ul>
	</div>
	<!-- /footer -->
<?php echo $this->assets->get_scripts(); ?>
</body>
</html>
