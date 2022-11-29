<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';	
	require APPROOT.'/views/includes/loader.php';	
?>
	<div class="dep-service-main-con">
		<?php
			require APPROOT.'/views/includes/s-navigation.php';
		?>
		<div class="dep-service-content-con">
			<?php
				require APPROOT.'/views/includes/breadcrumb.php';
			?>
			<div class="table-con">
				<div class="search-con">
					<p>Search</p>
					<input type="text" name="search">
					<p class="subtext">Type something to search for student/s.</p>
				</div>
				<table>
					<tr>
						<th><input type="checkbox" />ID</th>
						<th>Email</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Course</th>
						<th>Year</th>
						<th>Section</th>
						<th>Type</th>
						<th>Approve</th>
					</tr>
					<?php 
						foreach ($data['students'] as $key => $student):
					?>
							<tr>
								<td><input type="checkbox" /><?php echo $student->id; ?></td>
								<td><?php echo $student->email; ?></td>
								<td><?php echo ucwords($student->fname); ?></td>
								<td><?php echo ucwords($student->lname); ?></td>
								<td><?php echo strtoupper($student->course); ?></td>
								<td><?php echo $student->year; ?></td>
								<td><?php echo strtoupper($student->section); ?></td>
								<td><?php echo ($student->type == 1)? 'regular' : 'irregular'; ?></td>
								<td style="color: orange"><?php echo 'pending' ?></td>
								<td>
									<a class="eval-det-action-btn" onclick="viewStudentDetail(<?php echo $key; ?>)">Details</a>
								</td>
							</tr>
					<?php 
						endforeach;
					?>
				</table>
			</div>

			<div class="details-modal-con">
				<div class="details-con">
					<div class="details-header-con">
						<p class="header">Student Details</p>
						<img class="details-modal-hide-btn" src="<?php echo URLROOT; ?>/public/assets/img/lack.png">
					</div>
					<div class="details-form-con">
						<p class="details-subtext"> The details included here are confidential between the admin and the student as pertains to the data privacy consent.</p><br>
						<div class="form-group">
							<span>Student ID</span>
							<input type="text" name="id">
						</div>
						<div class="form-group">
							<span>Email</span>
							<input type="text" name="email" disabled>
							<p class="subtext">This email will be used for any transactions within the university.</p>
						</div>
						<div class="three-form-group">
							<div class="form-group">
								<span>Lastname</span>
								<input type="text" name="lname" disabled>
							</div>
							<div class="form-group">
								<span>Firstname</span>
								<input type="text" name="fname" disabled>
							</div>
							<div class="form-group">
								<span>Middlename</span>
								<input type="text" name="mname" disabled>
							</div>
						</div>
						<div class="form-group">
							<span>Contact</span>
							<input type="text" name="contact" disabled>
						</div>
						<div class="three-form-group">
							<div class="form-group">
								<span>Street</span>
								<input type="text" name="street" disabled>
							</div>
							<div class="form-group">
								<span>City</span>
								<input type="text" name="city" disabled>
							</div>
							<div class="form-group">
								<span>State</span>
								<input type="text" name="state" disabled>
							</div>
						</div>
						<div class="form-group">
							<span>Zip</span>
							<input type="text" name="zip" disabled>
						</div>
						<div class="form-group">
							<span>Course</span>
							<select name="course" disabled>
								<option value="">Select Course</option>
								<option value="bsit">Bachelor of Science in Information Technology</option>
								<option value="bsentrep">Bachelor of Science in Entreprenuership</option>
								<option value="bsie">Bachelor of Science in Industrial Engineering</option>
								<option value="bsece">Bachelor of Science in Electronics and Communication Engineering</option>
								<option value="bsaccountancy">Bachelor of Science in Accountancy</option>
							</select>
						</div>	
						<div class="two-form-group">
							<div class="form-group">
								<span>Year</span>
								<select name="year" disabled>
									<option value="">Select Year</option>
									<option value="1">1st</option>
									<option value="2">2nd</option>
									<option value="3">3rd</option>
									<option value="4">4th</option>
								</select>
							</div>
							<div class="form-group">
								<span>Section</span>
								<input type="text" name="section" disabled>
							</div>
						</div>
						<div class="two-form-group">
							<div class="form-group">
								<span>QC Resident</span>
								<select name="resident" disabled>
									<option value="">Is QC Resident?</option>
									<option value="1">Yes</option>
									<option value="-1">No</option>
								</select>
							</div>
							<div class="form-group">
								<span>Type</span>
								<select name="type" disabled>
									<option value="">Select Type</option>
									<option value="1">Regular</option>
									<option value="-1">Irregular</option>
								</select>
							</div>
						</div><br>
						<p class="details-subtext">Admin cannot edit anything here. Make sure that details typed by students is match to the university's preference to them. Evaluation should be thorough to avoid mishaps.</p>
						<div class="form-group">
							<button id="std-acc-app-btn">Approve</button>
							<button id="std-acc-rej-btn">Reject</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
			//copy student details array from php
			var students = <?php echo json_encode($data['students']); ?>;	
		</script>
		<script src="<?php echo URLROOT; ?>/public/script/account-evaluation.js"></script>
		<script src="<?php echo URLROOT; ?>/public/script/table.js"></script>
	</div>
<?php
	require APPROOT.'/views/includes/footer.php';
?>
