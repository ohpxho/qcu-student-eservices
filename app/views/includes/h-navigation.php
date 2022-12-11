<nav class="h-nav"> 
	<div class="h-nav-brand-con">
		<div class="h-nav-logo-con">
			<img src="<?php echo URLROOT.'/public/assets/img/logo.png' ?>" />
		</div>
		<div class="h-nav-title-con">
			<a href="<?php echo URLROOT; ?>/home"><p>QUEZON CITY UNIVERSITY</p></a>
			<p>STUDENT E-SERVICES</p>
		</div>
	</div>

	<?php
		if(isLoggedIn()):
	?>
		<button id="h-nav-hamburger-btn"><div class="h-nav-hamburger-menu"></div></button>
		<div class="h-nav-options-con">
			<ul class="h-nav-list">
				<?php
					if(!empty(whoIsIn())):
				?>
						<a href="<?php echo URLROOT; ?>/home"><li class="<?php echo $data['ovclass']; ?>"><img src="<?php echo URLROOT;?>/public/assets/img/overview.png" /> Overview</li></a>
						<?php
							if(whoIsIn() == 'student'):
						?>	
								<a href="<?php echo URLROOT; ?>/service"><li class="<?php echo $data['svclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/request.png" /> Services</li></a>
						<?php
							endif;
						?>

						<?php
							if(whoIsIn() != 'student'):
						?>	
								<a href="<?php echo URLROOT; ?>/request"><li class="<?php echo $data['rqclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/request.png" />Student Requests</li></a>
						<?php
							endif;
						?>

						<a href="<?php echo URLROOT; ?>/appointment"><li class="<?php echo $data['apclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/appointment.png"/> Appointments</li></a>

						<?php
							if(whoIsIn() != 'student' && whoIsIn() != 'sysadmin'):
						?>	
								<a href="<?php echo URLROOT; ?>/student"><li class="<?php echo $data['stdclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/user.png" />Student Records</li></a>
						<?php
							endif;
						?>

						<?php
							if(whoIsIn() == 'sysadmin'):
						?>	
								<a href="<?php echo URLROOT; ?>/user/student"><li class="<?php echo $data['usrclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/user.png" />System Users</li></a>
						<?php
							endif;
						?>

				<?php
					endif;
				?>
			</ul>
			<div class="h-nav-profile-con">
				<button id="prof-md-btn">

					<div class="prof-md-btn-pic-holder">
						<?php
							if(empty($_SESSION['pic'])):
						?>
								<img src="<?php echo URLROOT; ?>/public/assets/img/uploads/default.webp" />
						<?php
							else:
						?>
								<img src="<?php echo URLROOT.$_SESSION['pic']; ?>" />
						<?php
							endif;
						?>
					</div>
					
					<span><?php echo $_SESSION['fname'] ?></span>
					<div class="prof-md-arrow"></div>
				</button>
				<div class="h-nav-profile-md-con">
					<a href="<?php echo URLROOT; ?>/setting/account"><img src="<?php echo URLROOT; ?>/public/assets/img/setting.png"><span>Settings</span></a>
					<a href="<?php echo URLROOT;?>/home/logout"><img src="<?php echo URLROOT; ?>/public/assets/img/logout.png"><span>Logout</span></a>
				</div>
			</div>
		</div>
	<?php 
		endif;
	?>
</nav>