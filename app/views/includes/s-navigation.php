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
		
		<?php
			if(isset($_SESSION['type']) && $_SESSION['type'] != 'student') {
				$data['department'] = $_SESSION['type'];
			}

			if(isset($data['department'])):
				$root = ($_SESSION['type'] !== 'student')? 'request' : $data['department']; 
		?>
			<?php 
				if($data['department'] == 'osas'):
			?>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Request University ID"><li class="<?php echo $data['idclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/id.png" />Request University ID</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Laptop Borrow"><li class="<?php echo $data['borrowclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/borrow.png" />Laptop Borrow</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Laptop Repair"><li class="<?php echo $data['repairclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/repair.png" />Laptop Repair & Maintenance</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Laptop Return"><li class="<?php echo $data['returnclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/return.png" />Laptop Return</li></a>
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
					<a href="<?php echo URLROOT.'/'.$root; ?>/Councelling"><li class="<?php echo $data['councellingclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/councelling.png" />Councelling</li></a>
					<a href="<?php echo URLROOT.'/'.$root; ?>/Request Of Good Moral"><li class="<?php echo $data['moralclass']; ?>"><img src="<?php echo URLROOT; ?>/public/assets/img/acad.png" />Request Good Moral</li></a>
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
			endif;
		?>
		
	</ul>
</nav>