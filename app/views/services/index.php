<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';	
?>
	<main role="main">
		<div class="service-main-con">
			<div class="service-main-option-con">
				<div class="service-dep-heading-con">
					<p class="header">Select One</p>
					<p>Click or tap the link of the department to have the request.</p><br>
				</div>
				<div class="service-dep-option-con">
					<a href="<?php echo URLROOT; ?>/osas">
						<div class="service-option-con">
							<div class="service-option-icon-con">
								<img src="<?php echo URLROOT; ?>/public/assets/img/osas.png">
							</div>
							<div class="service-option-desc-con">
								<p>Office of Student Affairs and Services</p>
								<p class="subtext flavor">i.e laptop borrowing, request university ID, etc.</p>
							</div>
						</div>	
					</a>
					
					<a href="<?php echo URLROOT; ?>/registrar">
						<div class="service-option-con">
							<div class="service-option-icon-con">
								<img src="<?php echo URLROOT; ?>/public/assets/img/registrar.png">
							</div>
							<div class="service-option-desc-con">
								<p>University Registrar</p>
								<p class="subtext flavor">i.e admission, request academic documents, etc.</p>
							</div>
						</div>
					</a>
					
					<a href="<?php echo URLROOT; ?>/guidance">
						<div class="service-option-con">
							<div class="service-option-icon-con">
								<img src="<?php echo URLROOT; ?>/public/assets/img/guidance.png">
							</div>
							<div class="service-option-desc-con">
								<p>Guidance and Counseling</p>
								<p class="subtext flavor">i.e counseling, good moral certificate.</p>
							</div>
						</div>
					</a>
					
					<a href="<?php echo URLROOT; ?>/finance">
						<div class="service-option-con">
							<div class="service-option-icon-con">
								<img src="<?php echo URLROOT; ?>/public/assets/img/finance.png">
							</div>
							<div class="service-option-desc-con">
								<p>Finance And Accounting</p>
								<p class="subtext flavor">i.e tuition payment, request order of payment.</p>
							</div>
						</div>
					</a>

					<a href="<?php echo URLROOT; ?>/library">
						<div class="service-option-con">
							<div class="service-option-icon-con">
								<img src="<?php echo URLROOT; ?>/public/assets/img/library.png">
							</div>
							<div class="service-option-desc-con">
								<p>Library And Information Services</p>
								<p class="subtext flavor">i.e card application, online reference service, etc.</p>
							</div>
						</div>
					</a>

					<a href="<?php echo URLROOT; ?>/medical">
						<div class="service-option-con">
							<div class="service-option-icon-con">
								<img src="<?php echo URLROOT; ?>/public/assets/img/medical.png">
							</div>
							<div class="service-option-desc-con">
								<p>Medical And Dental Services</p>
								<p class="subtext flavor">i.e online consultation.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</main>
<?php
	require APPROOT.'/views/includes/footer.php';
?>
