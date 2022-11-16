<nav class="h-nav"> 
	<div class="h-nav-brand-con">
		<div class="h-nav-logo-con">
			<img src="<?php echo URLROOT.'/public/assets/img/logo.png' ?>" />
		</div>
		<div class="h-nav-title-con">
			<p>Quezon City University</p>
			<p>E - Services</p>
		</div>
	</div>

	<?php
		if(isLoggedIn()):
	?>
	
		<ul class="h-nav-list">
			<?php
				if(whoIsIn() == 'student'):
			?>
					<a href="<?php echo URLROOT; ?>/home"><li class="<?php echo $data['ovclass']; ?>"><img src="<?php echo URLROOT;?>/public/assets/img/overview.png" /> Overview</li></a>
					<a href="<?php echo URLROOT; ?>/service"><li class="<?php echo $data['svclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/services.png" /> Services</li></a>
					<a href="<?php echo URLROOT; ?>/appointment"><li class="<?php echo $data['apclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/appointment.png"/> Appointment</li></a>
			<?php
				endif;
			?>
		</ul>

		<div class="h-nav-profile-con">
			<img src="" />
			<span><?php echo $_SESSION['fname'] ?></span>
			<div id="prof-md-btn"></div>
			<div class="h-nav-profile-md-con">
				<a href=""><img src="<?php echo URLROOT; ?>/public/assets/img/profile.png"><span>Profile Setting</span></a>
				<a href="<?php echo URLROOT;?>/home/logout"><img src="<?php echo URLROOT; ?>/public/assets/img/logout.png"><span>Logout</span></a>
			</div>
		</div>
	
	<?php 
		endif;
	?>
</nav>