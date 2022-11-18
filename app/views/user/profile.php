<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';
?>
	<main role="main">
		<div class="profile-setting-con">
			<div>
				<p class="header">User Profile</p>
				<hr/><br/>
				<p class="profile-id">#<?php echo $_SESSION['id']; ?></p>
				<span class="profile-subtext">Student ID is fixed and cannot be edited.</span>
				<br /><br/>
				<form action="<?php echo URLROOT; ?>/user/profile" method="POST">
					
					<div class="form-group">
						<span>Firstname</span>
						<input type="text" name="fname" value="<?php echo $_SESSION['fname'] ?>"/>
					</div>
					
					<div class="form-group">
						<span>Middlename</span>
						<input type="text" name="mname" value="<?php echo $_SESSION['mname'] ?>"/>
						<span class="profile-subtext">Optional, just in case you don't have any middlename.</span>
					</div>

					<div class="form-group">
						<span>Lastname</span>
						<input type="text" name="lname" value="<?php echo $_SESSION['lname'] ?>"/>
					</div>
					
					<div class="form-group">
						<span>Email</span>
						<input type="text" name="fname" value="<?php echo $_SESSION['email'] ?>"/>
						<span class="profile-subtext">This should be the registered email address in the registrar.</span>
					</div>
					
					<button>Change password</button>
					
					<input type="submit" value="Update profile"/>
				</form>
			</div>
		</div>	
	</main>
<?php
	require APPROOT.'/views/includes/footer.php';
?>