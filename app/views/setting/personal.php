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
				<p class="header">Personal Details</p>
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

				<form method="POST" action="<?php echo URLROOT; ?>/setting/personal">
					<?php
						if($_SESSION['type'] != 'sysadmin'):
					?>
							<p><span style="font-weight: var(--fw-semi-bold)">NOTE:</span> Some of the details here is fixed and cannot be edited to prevent misunderstanding.</p>
							<p style="margin-top: 10px"><span style="font-weight: var(--fw-semi-bold)">NOTE:</span> If you need to update fixed details here, you need to contact and inform an authorized personnel to update your details.</p><br>
					<?php
						else:
					?>
							<p>This shows your personal details. All fields here can be updated, but make sure all details is true or correct.</p><br>	
					<?php
						endif;
					?>
					<div class="three-form-group">
						<div class="form-group">
							<span>Lastname</span>
							<?php
								if($_SESSION['type'] != 'sysadmin'):
							?>
									<input type="text" name="lname" value="<?php echo $data['personal']->lname; ?>" disabled>
							<?php
								else:
							?>
									<input type="text" name="lname" value="<?php echo $data['personal']->lname; ?>">
							<?php
								endif;
							?>
						</div>
						<div class="form-group">
							<span>Firstname</span>
							<?php
								if($_SESSION['type'] != 'sysadmin'):
							?>
									<input type="text" name="fname" value="<?php echo $data['personal']->fname; ?>" disabled>
							<?php
								else:
							?>
									<input type="text" name="fname" value="<?php echo $data['personal']->fname; ?>">
							<?php
								endif;
							?>
						</div>
						<div class="form-group">
							<span>Middlename</span>
							<?php
								if($_SESSION['type'] != 'sysadmin'):
							?>
									<input type="text" name="mname" value="<?php echo $data['personal']->mname; ?>" disabled>
							<?php
								else:
							?>
									<input type="text" name="mname" value="<?php echo $data['personal']->mname; ?>">
							<?php
								endif;
							?>
						</div>
					</div>
					<div class="form-group">
						<span>Contact</span>
						<input type="text" name="contact" value="<?php echo $data['personal']->contact; ?>">
					</div>
					<div class="three-form-group">
						<div class="form-group">
							<span>Street</span>
							<input type="text" name="street" value="<?php echo $data['personal']->street; ?>">
						</div>
						<div class="form-group">
							<span>City</span>
							<input type="text" name="city" value="<?php echo $data['personal']->city; ?>">
						</div>
						<div class="form-group">
							<span>State</span>
							<input type="text" name="state" value="<?php echo $data['personal']->state; ?>">
						</div>
					</div>
					<div class="form-group">
						<span>Zip</span>
						<input type="text" name="zip" value="<?php echo $data['personal']->zip; ?>">
					</div>
					<?php
						if($_SESSION['type'] == 'student'):
					?>
							<div class="form-group">
								<?php
									$course = [
										'bsit' => '',
										'bsentrep' => '',
										'bsie' => '',
										'bsece' => '',
										'bsaccountancy' => ''
									];

									$course[$data['personal']->course] = 'selected';
								?>
								<span>Course</span>
								<select name="course" disabled>
									<option value="">Select Course</option>
									<option value="bsit" <?php echo $course['bsit'];?>>Bachelor of Science in Information Technology</option>
									<option value="bsentrep" <?php echo $course['bsentrep'];?>>Bachelor of Science in Entreprenuership</option>
									<option value="bsie" <?php echo $course['bsie'];?>>Bachelor of Science in Industrial Engineering</option>
									<option value="bsece" <?php echo $course['bsece'];?>>Bachelor of Science in Electronics and Communication Engineering</option>
									<option value="bsaccountancy" <?php echo $course['bsaccountancy'];?>>Bachelor of Science in Accountancy</option>
								</select>
							</div>	
							<div class="two-form-group">
								<div class="form-group">
									<?php
										$year = [
											1 => '',
											2 => '',
											3 => '',
											4 => ''
										];

										$year[$data['personal']->year] = 'selected';
									?>
									<span>Year</span>
									<select name="year" disabled>
										<option value="">Select Year</option>
										<option value="1" <?php echo $year[1] ?>>1st</option>
										<option value="2" <?php echo $year[2] ?>>2nd</option>
										<option value="3" <?php echo $year[3] ?>>3rd</option>
										<option value="4" <?php echo $year[4] ?>>4th</option>
									</select>
								</div>
								<div class="form-group">
									<span>Section</span>
									<input type="text" name="section" value="<?php echo $data['personal']->section; ?>" disabled>
								</div>
							</div>
							<div class="two-form-group">
								<div class="form-group">
									<?php
										$resident = [
											1 => '',
											-1 => ''
										];

										$resident[$data['personal']->qc_resident] = 'selected';
									?>
									<span>QC Resident</span>
									<select name="resident">
										<option value="">Is QC Resident?</option>
										<option value="1" <?php echo $resident[1]; ?>>Yes</option>
										<option value="-1" <?php echo $resident[-1]; ?>>No</option>
									</select>
								</div>
								<div class="form-group">
									<?php
										$type = [
											1 => '',
											-1 => ''
										];

										$type[$data['personal']->type] = 'selected';
									?>
									<span>Type</span>
									<select name="type" disabled>
										<option value="">Select Type</option>
										<option value="1" <?php echo $type[1] ?>>Regular</option>
										<option value="-1" <?php echo $type[-1] ?>>Irregular</option>
									</select>
								</div>
							</div>
					<?php
						endif;
					?>

					<?php

						if($_SESSION['type'] != 'student' && $_SESSION['type'] != 'sysadmin'):
							$dep = [
								1 => '',
								2 => '',
								3 => '',
								4 => '',
								5 => '',
								6 => ''
							];

							$dep[$data['personal']->department] = 'selected';
					?>
							<div class="form-group">
								<span>Department</span>
								<select name="dep" disabled>
									<option value="">Select Department</option>
									<option value="1" <?php echo $dep[1];?>>Office Of Student Affairs and Services</option>
									<option value="2" <?php echo $dep[2];?>>University Registrar</option>
									<option value="3" <?php echo $dep[3];?>>Guidance And Counseling</option>
									<option value="4" <?php echo $dep[4];?>>Finance And Accounting</option>
									<option value="5" <?php echo $dep[5];?>>Library And Information Services</option>
									<option value="6" <?php echo $dep[6];?>>Medical And Dental Services</option>
								</select>
							</div>
					<?php
						endif;
					?>

					<input type="submit" value="Update profile"/>
				</form>
			</div>
		</div>
	</div>

<?php
	require APPROOT.'/views/includes/footer.php';
?>