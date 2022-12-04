<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';
	require APPROOT.'/views/includes/loader.php';
?>
	
	<main role="main">
		<div class="hm-con">
			<div class="hm-login-con">
				<div class="hm-login-form-con">
					<div class="hm-login-form-head-con">
						<p>Student &nbsp;E-Services</p>
						<hr />	
					</div>

					<?php 
						if(empty($data['err'])):
					?>
							<div class="wrpane-con noissue">
								<p>Please login to continue.</p>
							</div>
					<?php
						else:
					 ?>
							<div class="wrpane-con error">
								<p><?php echo $data['err']; ?></p>
							</div>
					<?php
						endif;
					?>

					<form action="<?php echo URLROOT; ?>/home/index" method="POST">
						<div class="form-group">
							<span>Registered ID/Email<span style="color: var(--clr-err)">*</span></span>
							<input type="text" name="id">
						</div>
						<div class="form-group">
							<span>Password<span style="color: var(--clr-err)">*</span></span><br/>
							<input type="password" name="pass"><br/>
						</div>
						<div>	
							<input type="submit" text="Login" value="Login"/>
							<a class="create-acc-link" href="<?php echo URLROOT; ?>/home/registration" >Create Account</a>
							<a class="forgot-pass-link" href="#">Forgot password?</a>
						</div>
					</form>
					<p>*For alumni, please tap this button <a href="<?php echo URLROOT; ?>/alumni" class="login-alumni-btn" data-type="button">Login As Alumni</a></p><br>
				</div>
			</div>
		
			<div class="hm-cover-con">
				<div class="hm-cover-img-con">
					<img src="<?php echo URLROOT; ?>/public/assets/img/qcu.jpg" class="cover-img"/>
				</div>
			</div>
		</div>
	</main>

<?php
	require APPROOT.'/views/includes/footer.php';
?>