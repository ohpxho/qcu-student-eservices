<nav class="s-nav">
	<ul class="s-nav-list">
		<li>
			<img src="https://assets.cloud.thethings.industries/application.7dc213a4864131dd7f2f.svg" />
			<div>
				<span id="s-nav-date"><?php echo date('F d, Y'); ?></span></br>
				<span id="s-nav-time">-- : -- : -- --</span>
				<script src="<?php echo URLROOT; ?>/public/script/time.js"></script>
			</div>
		</li>
		<li class="snav-list-srv-header">Services Offered</li>
		<?php
			
			if(isset($data['department'])):
				$root = ($_SESSION['type'] != 'student')? 'request': $data['department']; 
		?>
			<?php 
				if($data['department'] == 'osas'):
			?>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Request University ID"><li class="<?php echo $data['idclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/id.png" />Request University ID</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Laptop Borrow"><li class="<?php echo $data['borrowclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/borrow.png" />Laptop & Pocket WiFi Request</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Laptop Repair"><li class="<?php echo $data['repairclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/repair.png" />Laptop Repair & Maintenance</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Laptop Return"><li class="<?php echo $data['returnclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/return.png" />Laptop Returning</li></a>
			<?php
				endif;
			?>

			<?php 
				if($data['department'] == 'registrar'):
			?>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Submission Of Lacking Documents"><li class="<?php echo $data['lackclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/lack.png" />Submission of Lacking Documents</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Request Academic Documents"><li class="<?php echo $data['acadclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/acad.png" />Request Academic Documents</li></a>
					<?php
						if($_SESSION['type'] != 'student'):
					?>
							<a href="<?php echo URLROOT.'/'.$root; ?>/Account Evaluation"><li class="<?php echo $data['evalclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/admission.png" />Account Evaluation</li></a>
					<?php
						endif;
					?>
			<?php
				endif;
			?>

			<?php 
				if($data['department'] == 'guidance'):
			?>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Counseling"><li class="<?php echo $data['counselingclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/counseling.png" />Counseling</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Request Of Good Moral"><li class="<?php echo $data['moralclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/acad.png" />Request Good Moral</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Psychological Testing"><li class="<?php echo $data['psychclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/acad.png" />Psychological Testing</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Individual Inventory Record"><li class="<?php echo $data['invclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/acad.png" />Individual Inventory Record</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Student Needs Assessment"><li class="<?php echo $data['needsclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/acad.png" />Student Needs Assessment</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Faculty Evaluation"><li class="<?php echo $data['facultyclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/acad.png" />Faculty Evaluation</li></a>
			<?php
				endif;
			?>

			<?php 
				if($data['department'] == 'finance'):
			?>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Request Order Of Payment"><li class="<?php echo $data['oopclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/order.png" />Request Order Of Payment</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Tuition Payment"><li class="<?php echo $data['tuitionclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/tuition.png" />Tuition Payment</li></a>
			<?php
				endif;
			?>

			<?php 
				if($data['department'] == 'library'):
			?>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Library Card Application"><li class="<?php echo $data['libcardclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/order.png" />Library Card Application</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Library Online Reference Service"><li class="<?php echo $data['librefclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/tuition.png" />Library Online Reference Service</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Library Student Appointment Request"><li class="<?php echo $data['libappclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/tuition.png" />Library Student Appointment Request</li></a>

			<?php
				endif;
			?>

			<?php 
				if($data['department'] == 'medical'):
			?>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Online Consultation"><li class="<?php echo $data['consultclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/order.png" />Online Consultation</li></a>

			<?php
				endif;
			?>

		<?php
			endif;
		?>
		
	</ul>
</nav>