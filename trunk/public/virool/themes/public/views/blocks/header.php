<header>
	<div class="navbar navbar-inverse" id="header">
		<div class="navbar-inner">
			<div class="container">
				<a href="<?php echo base_url() ?>" class="brand"><img alt="Virool" src="<?php echo asset('img/logo.png') ?>"></a>				
				<?php
					$userexists = $this->session->userdata('user_id');
					if (!empty($userexists) ) {
				?>
				<ul id="ulIdnav">    
					<?php if ($this->user->group_id==2) { ?>
						<li ><?php echo anchor('', 'HOME')?></li>
						<li ><?php echo anchor('Open-Campaigns','OPEN CAMPAIGNS') ?></li>
						<li ><?php echo anchor('Campaigns-Publisher','MY DOCUMENT') ?></li>
						<li ><?php echo anchor('My-Sites', 'MY SITES') ?></li>
						<li ><?php echo anchor('My-Finances', 'MY FINANCES') ?></li>
					<?php } else { ?>
						<li ><?php echo anchor('', 'HOME')?></li>
						<li ><?php echo anchor('Promote-Video','PROMOTE VIDEO') ?></li>
						<li ><?php echo anchor('Promote-Document','PROMOTE DOCUMENT') ?></li>
						<li ><?php echo anchor('Manage-Campaigns', 'MANAGE CAMPAIGNS') ?></li>
						<li ><?php echo anchor('My-Finances', 'MY FINANCES') ?></li>
					<?php } ?>
				</ul>
				<ul class="nav pull-right" role="navigation" id="home-additional-nav">
					<li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1"><?php echo ((!empty($this->user->first_name) OR !empty($this->user->last_name)) ? $this->user->last_name.' '.$this->user->first_name : $this->user->email).'<b class="caret"></b>';?></a>
                      <ul aria-labelledby="drop1" role="menu" class="dropdown-menu">
                        <li><?php echo anchor('user/account', 'Account Settings') ?></li>
							<li><?php echo anchor('user/logout', 'Logout') ?></li>
                      </ul>
                    </li>
					<li class="li-cls-welcome">Welcome</li>
				</ul>
			<?php } else {?>
				<ul class="nav" id="home-main-nav">
					<li class="advertiser-nav-link dropdown">
						<a data-hover="dropdown" class="dropdown-toggle" role="button" id="dropdown-advertiser-nav-link" href="<?php echo site_url('advertiser') ?>"><span>promote</span> your video</a>
						<ul class="dropdown-menu black-bg" aria-labelledby="dropdown-advertiser-nav-link" >
							<li><a href="<?php echo base_url()?>advertiser/musician" >for Musicians</a></li>
							<li><a href="<?php echo base_url()?>advertiser/brands" >for Brands</a></li>
							<li><a href="<?php echo base_url()?>advertiser/movies" >for Movies</a></li>
							<li><a href="<?php echo base_url()?>advertiser/games" >for Games</a></li>
						</ul>
					</li>
					<li class="advertiser-nav-link"><a href="<?php echo site_url('publications') ?>"><span>promote</span> publications</a></li>
					<li class="publisher-nav-link"><a href="<?php echo site_url('publisher') ?>"><span>join</span> our publishers network</a></li>
				</ul>
				<ul class="nav pull-right" id="home-additional-nav">
					<li><?php echo anchor('login', 'Login') ?></li>
					<li><?php echo anchor('signup', 'Sign up') ?></li>
					<li><?php echo anchor('about_us', 'About us') ?></li>
				</ul>
			<?php } ?>			
			</div>
		</div>
	</div>
</header>