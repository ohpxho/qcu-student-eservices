<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';
?>
	<div class="overview-con">
		<div class="overview-welcome-con">
			<div class="overview-welcome-header-con">
				<?php
					$user = '';
					switch($_SESSION['type']) {
						case 'student':
							$user = 'student';
							break;
						case 'sysadmin':
							$user = 'system admin';
							break;
						default:
							$user = 'admin';
					}
				?>
				<p class="header"><img src="<?php echo URLROOT;?>/public/assets/img/hand.png" />Welcome, <?php echo $user; ?>!</p>
				<p class="overview-welcome-subheader">This is an online student services platform of QCU.</p>
				<p class="typewriter"></p>
			</div>
		</div>
		<?php
			if($_SESSION['type'] == 'student'):
		?>
				<div class="overview-statistics-con">
					<br>
					<div class="overview-statistics-count-con">
						<div class="overview-count-con">
							<div style="width: 100%">	
								<p style="margin-bottom: 10px;">This shows the count of your request by status from different services.</p>
							</div>
							<div class="overview-count-panel-con ">
								<div class="overview-count-box-con ongoing">
									<p>1</p>
								</div>
								<div class="overview-title-box-con">
									<p>No. of <span class="text-ongoing">On-going</span> Request</p>
								</div>
							</div>

							<div class="overview-count-panel-con">
								<div class="overview-count-box-con processed">
									<p>3</p>
								</div>
								<div class="overview-title-box-con">
									<p>No. of <span class="text-ongoing">Processed</span> Request</p>
								</div>
							</div>	

							<div class="overview-count-panel-con">
								<div class="overview-count-box-con abandoned">
									<p>0</p>
								</div>
								<div class="overview-title-box-con">
									<p>No. of <span class="text-ongoing">Abandoned</span> Request</p>
								</div>
							</div>	

							<div class="overview-count-panel-con">
								<div class="overview-count-box-con cancelled">
									<p>2</p>
								</div>
								<div class="overview-title-box-con">
									<p>No. of <span class="text-ongoing">Cancelled</span> Request</p>
								</div>
							</div>

							<div class="overview-status-list">
								<ul>
									<li><span style="font-weight: var(--fw-semi-bold)">On-going</span> requests pertains to requests that is still being process by the admin.</li>
									<li><span style="font-weight: var(--fw-semi-bold)">Processed</span> requests pertains to requests that is completed.</li>
									<li><span style="font-weight: var(--fw-semi-bold)">Abandoned</span> requests pertains to requests where the student did not show up int the day of appointment.</li>
									<li><span style="font-weight: var(--fw-semi-bold)">Cancelled</span> requests pertains to requests that get postponed by the student.</li>
								</ul>
							</div>		
						</div>
						
					</div>
					
				</div>
		<?php
			endif;
		?>
	</div>
<?php
	require APPROOT.'/views/includes/footer.php';
?>