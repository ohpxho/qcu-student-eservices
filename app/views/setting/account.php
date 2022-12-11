<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';	
?>
	<div class="setting-main-con">
		<?php
			require APPROOT.'/views/includes/settings-navigation.php';
		?>
		<div class="setting-con">
			<div>
				<p class="header">Account Details</p>
				<hr>
				<?php
					if(!empty($data['sucess'])):
				?>
						<div class="wrpane-con success" style="margin-top: 0 !important"><p><?php echo $data['sucess']; ?></p></div>
				<?php
					endif;
				?>

				<?php
					if(!empty($data['err'])):
				?>
						<div class="wrpane-con error" style="margin-top: 0 !important"><p><?php echo $data['err']; ?></p></div>
				<?php
					endif;
				?>
				<p class="profile-id">#<?php echo $_SESSION['id']; ?></p>
				<span class="profile-subtext">ID is fixed and cannot be edited.</span>
				<br /><br/>
				<form action="<?php echo URLROOT; ?>/setting/account" method="POST" enctype="multipart/form-data">
					
					<div class="form-group">
						<div>
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
						<div>
							<input type="file" name="pic" accept="image/x-png,image/gif,image/jpeg,image/jpg"/>
							<span class="profile-subtext">Change your profile picture.</span>
						</div>
					</div>
					
					<div class="form-group">
						<span>Email</span>
						<input type="text" name="email" value="<?php echo $_SESSION['email']; ?>"/>
						<span class="profile-subtext">This will be the email used for any transactions within the university.</span>
					</div>
					
					<div class="change-pass-btn-con">
						<div>
							<button id="change-pass-btn">Change password </button>
							<span><img src="<?php echo URLROOT; ?>/public/assets/img/cancel.png" /></span>
						</div>	
						<span class="profile-subtext">Password is confidential only to you. No one will be able to see or change it unless you.</span>
					</div>

					<div class="change-pass-form" >
						<div class="form-group">
							<span>Old Password</span>
							<input type="password" name="oldpass" value=""/>
						</div>

						<div class="form-group">
							<span>New Password</span>
							<input type="password" name="newpass" value=""/>
							<span class="profile-subtext">Password should be 8 characters long. Alphanumeric</span>
						</div>

						<div class="form-group">
							<span>Confirm Password</span>
							<input type="password" name="confirmpass" value=""/>
						</div>
					</div>

					<input type="submit" value="Update profile"/>

					
				</form>
			</div>
		</div>	
	</div>

<?php
	require APPROOT.'/views/includes/footer.php';
?>