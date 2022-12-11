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
				<p class="header">Services Setting</p>
				<hr>
				<div class="srv-setting-con">
					<div class="srv-setting-list-con">
						<ul>
							<?php
								if($_SESSION['type'] == 'osas' || $_SESSION['type'] == 'sysadmin'):
							?>
									<li>Request University ID</li>
									<li>Laptop & Pocket Wifi Request</li>
									<li>Laptop Repair & Maintenance</li>
									<li>Laptop Returning</li>
							<?php
								endif;
							?>

							<?php
								if($_SESSION['type'] == 'registrar' || $_SESSION['type'] == 'sysadmin'):
							?>
									<li>Submission Of Lacking Documents</li>
									<li>Request Academic Documents</li>
							<?php
								endif;
							?>

							<?php
								if($_SESSION['type'] == 'guidance' || $_SESSION['type'] == 'sysadmin'):
							?>
									<li>Counseling</li>
									<li>Request Good Moral</li>
									<li>Psychological Testing</li>
									<li>Individual Inventory Record</li>
									<li>Student Needs Assessment</li>
									<li>Faculty Evaluation</li>
							<?php
								endif;
							?>

							<?php
								if($_SESSION['type'] == 'finance' || $_SESSION['type'] == 'sysadmin'):
							?>
									<li>Request Order Of Payment</li>
									<li>Tuition Payment</li>
							<?php
								endif;
							?>

							<?php
								if($_SESSION['type'] == 'library' || $_SESSION['type'] == 'sysadmin'):
							?>
									<li>Library Card Application</li>
									<li>Library Online Reference Service</li>
									<li>Library Student Appointment Request</li>
							<?php
								endif;
							?>

							<?php
								if($_SESSION['type'] == 'medical' || $_SESSION['type'] == 'sysadmin'):
							?>
									<li>Online Consultation</li>
							<?php
								endif;
							?>
						<ul>
					</div>
					<div class="srv-setting-calendar-con">

						<div class="form-group">
							<p style="font-weight: var(--fw-semi-bold); margin-bottom: 10px">Set status of this service</p>
							<input type="radio" name="state">
							<span>enable</span>
						</div>
						<div class="form-group">
							<input type="radio" name="state">
							<span>disable</span>
						</div><br>
						<div class="form-group">
							<p style="font-weight: var(--fw-semi-bold)">Set available dates for appointments</p>
							<br>
							<?php
								$calendar = new Calendar();
								echo $calendar->show();
							?>
						</div>
						<div class="form-group">
							<input class="btn-default-style" type="submit" value="Update Service">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	require APPROOT.'/views/includes/footer.php';
?>