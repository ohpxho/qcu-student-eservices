<div class="table-con">
	<div class="search-filter-con">
		<div class="search-con">
			<p>Search</p>
			<input type="text" name="search">
			<p class="subtext">Type something to search for student/s.</p>
		</div>
		<div class="filter-con">
			<img src="<?php echo URLROOT; ?>/public/assets/img/filter.png" id="filter-form-toggler">
			<div class="filter-form-con">
				<div class="filter-form-header-con">
					<p class="header">Filter</p>
					<img src="<?php echo URLROOT; ?>/public/assets/img/setting.png">
				</div>
				<div class="filter-form-group-con">
					<div class="form-group">
						<span style="font-weight: var(--fw-semi-bold)">Course</span><hr>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-course" value="bsa" data-checkdata='course' checked >
							<span>BSA</span>
						</div>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-course" value="bsentrep" data-checkdata='course' checked >
							<span>BSENTREP</span>
						</div>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-course" value="bsit" data-checkdata='course' checked >
							<span>BSIT</span>
						</div>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-course" value="bsece" data-checkdata='course' checked >
							<span>BSECE</span>
						</div>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-course" value="bsie" data-checkdata='course' checked >
							<span>BSIE</span>
						</div>
					</div>
					<div class="form-group">
						<span style="font-weight: var(--fw-semi-bold)">Year</span><hr>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-year" value="1" data-checkdata='year' checked >
							<span>1st</span>
						</div>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-year" value="2" data-checkdata='year' checked >
							<span>2nd</span>
						</div>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-year" value="3" data-checkdata='year' checked >
							<span>3rd</span>
						</div>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-year" value="4" data-checkdata='year' checked >
							<span>4th</span>
						</div>
					</div>
					<div class="form-group">
						<span style="font-weight: var(--fw-semi-bold)">Type</span><hr>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-type" value="1" data-checkdata='type' checked >
							<span>Regular</span>
						</div>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-type" value="-1" data-checkdata='type' checked >
							<span>Irregular</span>
						</div>
					</div>
					<div class="form-group">
						<span style="font-weight: var(--fw-semi-bold)">QC Resident</span><hr>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-resident" value="1" data-checkdata='qc_resident' checked >
							<span>resident</span>
						</div>
						<div class="form-group checkbox">
							<input type="checkbox" name="c-resident" value="-1" data-checkdata='qc_resident' checked >
							<span>non-resident</span>
						</div>
					</div>
				</div>
				<button id="filter-btn">Filter</button>
			</div>
		</div>
	</div>
	<div class="wrpane-con success">
		<p>Student application's status updated successfuly.</p>
	</div>
	<table>
		<tr>
			<th><span><input type="checkbox" id="all-select-row-checkbox"/>ID<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="id" class="tbl-order-btn"/></span></th>
			<th><span>Scheduled Date<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="sdate" class="tbl-order-btn"/></span></th>
			<th><span>Firstname<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="fname" class="tbl-order-btn"/></span></th>
			<th><span>Lastname<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="lname" class="tbl-order-btn"/></th>
			<th>Course</th>
			<th><span>Year<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="year" class="tbl-order-btn"/></th>
			<th><span>Section<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="section" class="tbl-order-btn"/></th>
			<th><span>Status<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="status" class="tbl-order-btn"/></span></th>
		</tr>					
	</table>
</div>

<div class="details-modal-con">
	<div class="details-con">
		<div class="details-header-con">
			<p class="header">Request Details</p>
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
			</div><br>
			<p class="details-subtext">Admin cannot edit anything here. Make sure that details typed by students is match to the university's preference to them.</p>
			<div class="form-group">
				<button id="std-acc-app-btn">Processed</button>
			</div>
		</div>
	</div>
</div>

<div class="rej-stud-acc-modal-con">
	<div class="rej-stud-acc-modal">
		<p>Reason Of Refusal</p>
		<p class="subtext">Please state the reason of the account's rejection.</p>
		<textarea placeholder="Type something...."></textarea>
		<button id="std-acc-rej-btn">Reject</button>
		<a id="std-acc-rej-cancel-btn">Cancel</a>
	</div>
</div>