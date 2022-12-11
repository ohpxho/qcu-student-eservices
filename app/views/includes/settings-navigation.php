<nav class="setting-nav">
	<ul class="setting-nav-list">
		<li>
			<div class="setting-pic-holder">
				<?php
					if(!empty($_SESSION['pic'])):
				?>
						<img src="<?php echo URLROOT.''.$_SESSION['pic']; ?>" />
				<?php
					else:
				?>
						<img src="<?php echo URLROOT; ?>/public/assets/img/uploads/default(big).webp" />
				<?php
					endif;
				?>
			</div>
			<p><?php echo $_SESSION['fname'].' '.$_SESSION['lname'] ?></p>
		</li>
		<a href="<?php echo URLROOT; ?>/setting/account"><li class="<?php echo $data['accsettingclass'] ?>">Account</li></a>
		
		<a href="<?php echo URLROOT; ?>/setting/personal"><li class="<?php echo $data['pslsettingclass'] ?>">Personal</li></a>
		
		<?php
			if($_SESSION['type'] != 'student'):
		?>
				<a href="<?php echo URLROOT; ?>/setting/services"><li class="<?php echo $data['srvsettingclass'] ?>">Services</li></a>
		<?php
			endif;
		?>

		<?php
			if($_SESSION['type'] == 'sysadmin'):
		?>
				<a href="<?php echo URLROOT; ?>/setting/security"><li class="<?php echo $data['secsettingclass'] ?>">Security</li></a>
		<?php
			endif;
		?>
	</ul>
</nav>