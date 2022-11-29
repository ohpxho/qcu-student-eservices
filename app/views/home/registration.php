<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';

?>
	<main class="registration-main" role="main">
		<div class="registration-con">
			<br>
			<p class="header">Create Account</p>
			<p>Account will not be activated immediately. Admin will need to review and evaluate the details you provided. Evaluation will takes 2 ~ 3 days depends on the load of needed to evaluate. Then, email will be sent after. Only students of the QCU are allowed to register.</p>
			<div class="steps-con">
				<div class="step active" id="step1"><span>Account Details</span></div>
				<div class="step" id="step2"><span>Personal Details</span></div>
				<div class="step" id="step3"><span>Data Privacy Consent</span></div>
			</div>
			<?php
				if(!empty($data['success'])):
			?>
					<div class="wrpane-con success register"><?php echo $data['success']; ?></div>
			<?php
				endif;
			?>

			<?php
				if(!empty($data['err'])):
			?>
					<div class="wrpane-con err register"><?php echo $data['err']; ?></div>
			<?php
				endif;
			?>

			<div class="wrpane-con error"></div>
			<div class="registration-form-con">
				<form action="<?php echo URLROOT;?>/home/registration" method="POST">
					<div class="account-details-con" id="account-details-form">
						<div class="form-group">
							<br>
							<span>Student ID</span>
							<input type="text" name="id" value="">
							<span class="subtext">ID registered in the university.</span>
						</div>
						<div class="form-group">
							<span>Email</span>
							<input type="text" name="email" value="">
							<span class="subtext">Gmail is required.</span>
						</div>
						<div class="two-form-group">
							<div class="form-group">
								<span>Password</span>
								<input type="password" name="pass">
								<span class="subtext">Atlest 8 characters long. Alphanumeric.</span>
							</div>
							<div class="form-group">
								<span>Confirm Password</span>
								<input type="password" name="cpass">
							</div>
						</div>
						<div class="reg-btn-con">
							<a data-type="button" class="reg-next-btn" id="next-to-std-det">Next</a>	
						</div>
					</div>

					<div class="student-details-con" id="student-details-form">
						<div class="form-group">
							<br>
							<span>Lastname</span>
							<input type="text" name="lname" value="">
						</div>
						<div class="form-group">
							<span>Fistname</span>
							<input type="text" name="fname" value="">
						</div>
						<div class="form-group">
							<span>Middlename</span>
							<input type="text" name="mname" value="">
							<span class="subtext">Optional, in case you don't have any middlename.</span>
						</div>

						<div class="three-form-group">
							<div class="form-group">
								<span>Street</span>
								<input type="text" name="street" value="">
							</div>
							<div class="form-group">
								<span>City</span>
								<input type="text" name="city" value="">
							</div>
							<div class="form-group">
								<span>State</span>
								<input type="text" name="state" value="">
							</div>
						</div>
						<div class="form-group">
							<span>Zip</span>
							<input type="number" name="zip" value="">
						</div>
						<div class="three-form-group">
							<div class="form-group">
								<span>Course</span>
								<select name="course">
									<option value="">Choose Course</option>
									<option value="bsit">BSIT</option>
									<option value="bsentrep">BSEntrep</option>
									<option value="bsaccountancy">BSAccountancy</option>
									<option value="bsece">BSECE</option>
									<option value="bsie">BSIE</option>
								</select>
							</div>
							<div class="form-group">
								<span>Section</span>
								<input type="text" name="section" value="">
								<span class="subtext">Ex. 4L, 3I, 1B.</span>
							</div>
							<div class="form-group">
								<span>Year</span>
								<select name="year" >
									<option value="">Choose Year</option>
									<option value="1">1st</option>
									<option value="2">2nd</option>
									<option value="3">3rd</option>
									<option value="4">4th</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<span>Contact</span>
							<input type="number" name="contact" value="">
							<span class="subtext">Ex. 09123456789</span>
						</div>
						<div class="two-form-group">
							<div class="form-group">
								<span>QC resident</span>
								<select name="resident">
									<option value="">are you a QC Resident? </option>
									<option value="1">YES</option>
									<option value="0">NO</option>
								</select>
							</div>
							<div class="form-group">
								<span>Type</span>
								<select name="type">
									<option value="">Choose Type</option>
									<option value="1">REGULAR</option>
									<option value="-1">IRREGULAR</option>
								</select>
							</div>	
						</div>
						<div class="reg-btn-con">
							<a data-type="button" class="reg-back-btn" id="back-to-acc-det">Back</a>
							<a data-type="button" class="reg-next-btn" id="next-to-terms-cond">Next</a>	
						</div>
					</div>
					
					<div class="terms-condition-con" id="terms-condition-form">
						<div class="terms-condition">
							<p class="header">Data Privacy Soncent</p><br>
							<p>To the best of my own knowledge, I certify that the information I have written is true and correct.</p><br>
							<p>I hereby allow to the collection, use, recording, storing, organizing, consolidating, updating, processing, access to transfer, disclosure, or data sharing of my personal and sensitive information that I provided to QCU for the purposes for which it was collected and such other lawful purposes as I consent to or as required or permitted by law.</p><br>
							<p>I understand that the consent or authorization I am giving QCU will take effect immediately after submitting this form and will continue until I cancel it in writing.</p>
						</div>
						<div>
							<input type="checkbox" name="consent">
							<span>I am giving my consent to QCU from what is stated above.</span>
						</div>
						<div class="reg-btn-con">
							<a data-type="button" class="reg-back-btn" id="back-to-std-det">Back</a>
							<input type="submit" class="reg-submit-btn" value="Submit" disabled>
						</div>
					</div>

				</form>
			</div>
			<script src="<?php echo URLROOT; ?>/public/script/registration.js"></script>
		</div>
	</main>
	
<?php
	require APPROOT.'/views/includes/footer.php';
?>