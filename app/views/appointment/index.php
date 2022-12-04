<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';
?>
	<div class="appointment-main-con">
		<div>
		<div class="table-con" style="width: 100%">
			<div class="search-filter-con">
				<div class="search-con">
					<p>Search</p>
					<input type="text" name="search">
					<p class="subtext">Type something to search for appointment/s.</p>
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
				<p></p>
			</div>
			<table>
				<tr>
					<th><span>No.<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="no" class="tbl-order-btn"/></span></th>
					<th>Request Title</th>
					<th><span>Department<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="dep" class="tbl-order-btn"/></span></th>
					<th><span>Created Date<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="cdate" class="tbl-order-btn"/></span></th>
					<th><span>Scheduled Date<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="sdate" class="tbl-order-btn"/></span></th>
				</tr>	

			</table>
		</div>
		</div>
		<div class="details-modal-con">
			<div class="details-con">
				<div class="details-header-con">
					<p class="header">Student Details</p>
					<img class="details-modal-hide-btn" src="<?php echo URLROOT; ?>/public/assets/img/lack.png">
				</div>
				<div class="details-form-con">
					<p class="details-subtext"> The details included here are confidential between the admin and the student as pertains to the data privacy consent.</p><br>
				</div>
			</div>
		</div>
		
	</div>

<?php
	require APPROOT.'/views/includes/footer.php';
?>