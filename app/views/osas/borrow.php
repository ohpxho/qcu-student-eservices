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

			<?php
				if($_SESSION['type'] == 'student'):
			?>
					<div class="std-srv-content-con">
						<div class="std-srv-content-left-con">
							<div class="std-srv-form-con">
								<p class="header">Laptop Borrowing Form</p>
								<hr>
								<form method="POST" action="<?php echo URLROOT; ?>/osas/Laptop Borrow">
									<div class="form-group">
										<span>Student ID</span>
										<input type="text" name="id">
									</div>
									<div class="form-group">
										<span>Lastname</span>
										<input type="text" name="lname">
									</div>
									<div class="form-group">
										<span>Firstname</span>
										<input type="text" name="fname">
									</div>
									<div class="form-group">
										<span>Middlename</span>
										<input type="text" name="mname">
									</div>
									
									<div class="two-form-group">
										<div class="form-group">
											<span>Course</span>
											<select name="course">
												<option value="bsit">BSIT</option>
												<option value="bsie">BSIE</option>
												<option value="bsece">BSECE</option>
												<option value="bsentrep">BSEntrep</option>
												<option value="bsaccountancy">BSA</option>	
											</select>
										</div>
										<div class="form-group">
											<span>Year Level</span>
											<select name="course">
												<option value="1">1st</option>
												<option value="2">2nd</option>
												<option value="3">3rd</option>
												<option value="4">4th</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<input class="btn-default-style" type="submit" value="Set Appointment">
									</div>
								</form>
							</div>
						</div>
						<div class="std-srv-content-right-con">
							<div class="std-srv-instruction-con">
								<p class="header">REQUIREMENTS FOR BORROWING LAPTOP</p>
								<ul>
									<li><span>Processing Slip(1 copy downloadable)</span></li>
									<li><span>Application Form(3 copies downloadable)</span></li>
									<li><span>Registration Form 1st Sem. S.Y. 2020-2021(3 copies downlodable)</span></li>
									<li><span>Barangay Certificate of Residency(1 orignal copy and 2 photocopy)</span></li>
									<li><span>2x2 picture of student and parent(3 pcs each to be affixed on the application form)</span></li>
									<li><span>Notarized USUFRUCT Agreement and Accepatance Form(1 notarized and 2 copy)</span></li>
									<li><span>Application Form(3 copies downloadable)</span></li>
									<li><span>Student University ID(3 photocopy)</span></li>
									<li><span>Valid ID of parent/guardian(3 pcs photocopy)</span></li>
									<li><span>Deprecated Value(3 copies downloadable)</span></li>
								</ul>
								<br>
								<p class="header">REQUIREMENTS FOR BORROWING POCKET WIFI</p>
								<ul>
									<li><span>Updated QCU Registration Form</span></li>
									<li><span>Pocket Wi-fi Borrowers Form</span></li>
								</ul>
							</div>
						</div>
					</div>
			<?php
				endif;
			?>

		</div>
	</div>
<?php
	require APPROOT.'/views/includes/footer.php';
?>
