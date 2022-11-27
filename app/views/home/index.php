<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';
?>
	
	<main role="main">
		<div class="hm-con">
			<div class="hm-login-con">
				<div class="hm-login-form-con">
					<div class="hm-login-form-head-con">
						<p>Student E - Services</p>
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
						<span>Registered ID/Email<span>*</span></span><br/>
						<input type="text" name="id"><br/><br/>
						<span>Password<span>*</span></span><br/>
						<input type="password" name="pass"><br/>
						<div>	
							<input type="submit" text="Login" value="Login"/>
							<a class="create-acc-link" href="<?php echo URLROOT; ?>/home/registration" >Create account</a>
							<a class="forgot-pass-link" href="#">Forgot password?</a>
						</div>
					</form>
					<p>*For admission purposes please go to this link <a href="#"><u>QCUAdmission</u></a></p>
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