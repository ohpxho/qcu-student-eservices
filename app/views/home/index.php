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
							<div class="hm-login-wrpane-con noissue">
								<p>Please login to continue.</p>
							</div>
					<?php
						else:
					 ?>
							<div class="hm-login-wrpane-con error">
								<p><?php echo $data['err']; ?></p>
							</div>
					<?php
						endif;
					?>

					<form action="<?php echo URLROOT; ?>/home/index" method="POST">
						<span>Registered ID<span>*</span></span><br/>
						<input type="text" name="id"><br/><br/>
						<span>Password<span>*</span></span><br/>
						<input type="password" name="pass"><br/>
						<div>	
							<input type="submit" text="Login" value="Login"/>
							<a href="#">Forgot password?</a>
						</div>
					</form>
					<p>*For admission purposes please go to this link <a><i><u>QCUAdmission</u></i></a></p>
				</div>
			</div>
		
			<div class="hm-cover-con">
				<div class="hm-cover-img-con">
					<img src="" class="cover-img"/>
				</div>
			</div>
		</div>
	</main>

<?php
	require APPROOT.'/views/includes/footer.php';
?>