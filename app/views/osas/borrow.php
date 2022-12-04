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
								<p class="header">Laptop Request</p>
								<?php
									if(!empty($data['err'])):
								?>
										<div class="wrpane-con error"><?php echo $data['err'] ?></div>
								<?php
									else:
								?>
										<div class="wrpane-con noissue"><?php echo $data['message'] ?></div>
								<?php
									endif;
								?>
								<ul class="std-srv-form-list">
									<li>
										<span class="std-srv-list-li-dropdown">Set Appointment<img src="<?php echo URLROOT; ?>/public/assets/img/arrowhead.png"/></span>
										<div class="std-srv-list-content-con" data-li="details">
											<form method="POST" action="<?php echo URLROOT; ?>/osas/Laptop Borrow">
												<div class="form-group">
													<p class="subtext">The details below are in sync with the details registered. Request of laptop is only once and you can only change appointed date while request is at pending state.</p>
												</div><br>
												<div class="form-group">
													<span>Student ID</span>
													<input type="text" name="id" value="<?php echo $data['student']->id ?>" disabled>
												</div>
												<div class="form-group">
													<span>Lastname</span>
													<input type="text" name="lname" value="<?php echo $data['student']->lname ?>" disabled>
												</div>
												<div class="form-group">
													<span>Firstname</span>
													<input type="text" name="fname" value="<?php echo $data['student']->fname ?>"disabled>
												</div>
												<div class="form-group">
													<span>Middlename</span>
													<input type="text" name="mname" value="<?php echo $data['student']->mname ?>" disabled>
												</div>
												
												<div class="two-form-group">
													<div class="form-group">
														<span>Course</span>
														<select name="course" value="<?php echo $data['student']->course ?>" disabled>
															<option value="bsit">BSIT</option>
															<option value="bsie">BSIE</option>
															<option value="bsece">BSECE</option>
															<option value="bsentrep">BSEntrep</option>
															<option value="bsaccountancy">BSA</option>	
														</select>
													</div>
													<div class="form-group">
														<span>Year Level</span>
														<select name="course" value="<?php echo $data['student']->year ?>" disabled>
															<option value="1">1st</option>
															<option value="2">2nd</option>
															<option value="3">3rd</option>
															<option value="4">4th</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<span>Type</span>
													<select name="type" <?php echo $data['btnAppointmentState']; ?>>
														<?php
															foreach($data['canBorrow'] as $key => $value):
														?>
																<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
														<?php
															endforeach;
														?>
													</select>
												</div><br>
												<div class="form-group">
													<p class="subtext">Make sure that you are available at the appointed date. If some circumtances occur please cancel immediately and state the reason to avoid getting blacklisted.</p>
													<input style="margin-top: 5px"class="btn-default-style" type="submit" value="Set Appointment" <?php echo $data['btnAppointmentState']; ?>>
												</div>
											</form>
										</div>
									</li>
									<li>
										<span class="std-srv-list-li-dropdown">Downloadables<img src="<?php echo URLROOT; ?>/public/assets/img/arrowhead.png"/></span>
										<div class="std-srv-list-content-con" data-li="downloadables">
											<div class="downloadable-group">
												<ul>
													<li>Processing Slip <a>download(14.3k/pdf)<img src="<?php echo URLROOT; ?>/public/assets/img/download.png"></a></li>
													<li>Application Form<a>download(10.2k/pdf) <img src="<?php echo URLROOT; ?>/public/assets/img/download.png"></a></li>
													<li>USUFRUCT Agreement and Acceptance Form<a>download(11.3k/pdf) <img src="<?php echo URLROOT; ?>/public/assets/img/download.png"></a></li>
													<li>Application Form <a>download(11.3k/pdf) <img src="<?php echo URLROOT; ?>/public/assets/img/download.png"></a></li>
													<li>Deprecated Value <a>download(11.3k/pdf) <img src="<?php echo URLROOT; ?>/public/assets/img/download.png"></a></li>
												</ul>
											</div>
										</div>
									</li>
									<li >
										<span class="std-srv-list-li-dropdown">Request Records<img src="<?php echo URLROOT; ?>/public/assets/img/arrowhead.png"/></span>
										<div class="std-srv-list-content-con" data-li="records">
											<?php
												if(count($data['records']) <= 0):
											?>
													<div class="record-con">
														<p>No Data Found</p>
													</div>
											<?php
												else:
											?>
													<?php
														foreach($data['records'] as $index => $detail):
													?>
															<div class="record-con">
																<span><?php echo $detail->datetoGo ?></span>
																<span><?php echo $detail->status ?></span>
																<span>Details</span>
															</div>			
													<?php
														endforeach;
													?>
											<?php
												endif;
											?>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="std-srv-content-right-con">
							<div class="std-srv-instruction-con">
								<p class="header">Requirements For Borrowing Laptop</p>
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
								<p class="header">Requirements For Borrowing Pocket Wifi</p>
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
	<script src="<?php echo URLROOT; ?>/public/script/list-dropdown.js"></script>
<?php
	require APPROOT.'/views/includes/footer.php';
?>



<!--	
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
-->