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
						<div class="std-srv-content-left-con" style="width: 100%">
							<div class="std-srv-form-con" style="width: 80%">
								<p class="header">Laptop Returning</p>
								<?php
									if(!empty($data['err'])):
								?>
										<div class="wrpane-con error"><?php echo $data['err'] ?></div>
								<?php
									elseif(!empty($data['message'])):
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
													<p class="subtext">The details below are in sync with the details registered. You can only change appointed date while request is at pending state.</p>
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
													<span>Laptop Serial No.</span>
													<input type="text" name="serial" value="">
												</div><br>
												<div class="form-group">
													<p class="subtext">Make sure that you are available at the appointed date. If some circumtances occur please cancel immediately and state the reason to avoid getting blacklisted.</p>
													<input style="margin-top: 5px"class="btn-default-style" type="submit" value="Set Appointment">
												</div>
											</form>
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
					</div>
			<?php
				endif;
			?>
		</div>
		<script src="<?php echo URLROOT; ?>/public/script/list-dropdown.js"></script>
	</div>
<?php
	require APPROOT.'/views/includes/footer.php';
?>
