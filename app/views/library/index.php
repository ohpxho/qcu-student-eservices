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
						<p class="header">Library And Information Services</p>
						<br>
						<p class="dep-about-text">The University shall have a Library Board, the composition of which shall be determined by the University President. The Library Board shall promulgate policies, rules and regulations pertaining to acquisition of books and other learning resources as well as developmental programs of the University library.</span></p>
						
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