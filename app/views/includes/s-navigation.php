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
			if($_SESSION['type'] == 'student'):
		?>
			<?php
				if(isset($data['department'])):
			?>
				<?php 
					if($data['department'] == 'osas'):
				?>
						<a href="<?php echo URLROOT; ?>/osas/Request University ID"><li class="<?php echo $data['idclass']; ?>"><img src="#" />Request University ID</li></a>
						<a href="<?php echo URLROOT; ?>/osas/Laptop Borrow"><li class="<?php echo $data['borrowclass']; ?>"><img src="#" />Laptop Borrow</li></a>
						<a href="<?php echo URLROOT; ?>/osas/Laptop Repair"><li class="<?php echo $data['repairclass']; ?>"><img src="#" />Laptop Repair & Maintenance</li></a>
						<a href="<?php echo URLROOT; ?>/osas/Laptop Return"><li class="<?php echo $data['returnclass']; ?>"><img src="#" />Laptop Return</li></a>
				<?php
					endif;
				?>

				<?php 
					if($data['department'] == 'registrar'):
				?>
						<a href="<?php echo URLROOT; ?>/registrar/Submission Of Lacking Documents"><li class="<?php echo $data['lackclass']; ?>"><img src="#" />Submission of Lacking Documents</li></a>
						<a href="<?php echo URLROOT; ?>/registrar/Request Academic Documents"><li class="<?php echo $data['acadclass']; ?>"><img src="#" />Request Academic Documents</li></a>
						<a href="<?php echo URLROOT; ?>/registrar/Admission"><li class="<?php echo $data['admissionclass']; ?>"><img src="#" />Admission</li></a>
				<?php
					endif;
				?>

				<?php 
					if($data['department'] == 'guidance'):
				?>
						<a href="<?php echo URLROOT; ?>/guidance/Councelling"><li class="<?php echo $data['councellingclass']; ?>"><img src="#" />Councelling</li></a>
						<a href="<?php echo URLROOT; ?>/guidance/Request Of Good Moral"><li class="<?php echo $data['moralclass']; ?>"><img src="#" />Request Good Moral</li></a>
				<?php
					endif;
				?>

				<?php 
					if($data['department'] == 'finance'):
				?>
						<a href="<?php echo URLROOT; ?>/finance/Request Order Of Payment"><li class="<?php echo $data['oopclass']; ?>"><img src="#" />Request Order Of Payment</li></a>
						<a href="<?php echo URLROOT; ?>/finance/Tuition Payment"><li class="<?php echo $data['tuitionclass']; ?>"><img src="#" />Tuition Payment</li></a>
				<?php
					endif;
				?>

			<?php
				endif;
			?>
		<?php
			endif;
		?>
	</ul>
</nav>