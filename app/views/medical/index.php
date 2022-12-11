<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';	
?>
	<div class="dep-service-main-con">
		<?php
			require APPROOT.'/views/includes/s-navigation.php';
		?>
		<div class="dep-service-content-con">
			<?php
				require APPROOT.'/views/includes/breadcrumb.php';
			?>
			<div class="std-srv-content-con">
				<div class="std-srv-content-dashboard-con" >
					<div class="std-srv-form-con">
						<p class="header">Medical And Dental Services</p>
						<p class="dep-contact-text"><img src="<?php echo URLROOT; ?>/public/assets/img/mail.png"><a href="#">qcusasd@qcu.edu.ph</a></p>
						<br>
						<p class="dep-about-text">The SCHOOL CLINIC is responsible for safe-guarding the health of the students and employees of Quezon City University.</span></p>
						
						<!--<p class="dep-contact-text"><img src="<?php echo URLROOT; ?>/public/assets/img/phone.png">+6388063165</p>
						<p class="dep-contact-text"><img src="<?php echo URLROOT; ?>/public/assets/img/facebook.png"><a href="#">https://www.facebook.com/OSAS</a></p>
						<p class="dep-contact-text"><img src="<?php echo URLROOT; ?>/public/assets/img/mail.png"><a href="#">qcusasd@qcu.edu.ph</a></p>-->
					</div>
					<div class="std-srv-dashboard-con">
						<div class="std-srv-dashboard-panel-con">
							<div class="std-srv-dashboard-panel-count-con">
								<p>1</p>
							</div>
							<div class="std-srv-dashboard-panel-title-con">
								<p>No. of <span class="text-ongoing">On-going</span> Request</p>
							</div>
						</div>

						<div class="std-srv-dashboard-panel-con">
							<div class="std-srv-dashboard-panel-count-con processed">
								<p>2</p>
							</div>
							<div class="std-srv-dashboard-panel-title-con">
								<p>No. of <span class="text-processed">Processed</span> Request</p>
							</div>
						</div>

						<div class="std-srv-dashboard-panel-con">
							<div class="std-srv-dashboard-panel-count-con abandoned">
								<p>0</p>
							</div>
							<div class="std-srv-dashboard-panel-title-con">
								<p>No. of <span class="text-abandoned">Abandoned</span> Request</p>
							</div>
						</div>

						<div class="std-srv-dashboard-panel-con">
							<div class="std-srv-dashboard-panel-count-con cancelled">
								<p>0</p>
							</div>
							<div class="std-srv-dashboard-panel-title-con">
								<p>No. of <span class="text-cancelled">Cancelled</span> Request</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
<?php
	require APPROOT.'/views/includes/footer.php';
?>
