<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';
?>
	
	<main role="main">
		<div class="alumni-id-modal-con">
			<div class="alumni-id-modal">
				<p >Please type you ID and last section after graduating in the university. So that we can verify your identity.</p>
				<div class="wrpane-con error" style="display:none"></div>
				<p>Student ID</p>
				<input type="text" name="id">
				<p class="subtext">e.g 19001, 14002</p>
				<p>Section</p>
				<input type="text" name="section">
				<p class="subtext">e.g 4L, 4I, 4B</p>
				<button id="alumni-modal-btn">Continue</button>
			</div>
		</div>
		<script src="<?php echo URLROOT; ?>/public/script/alumni.js"></script>
	</main>

<?php
	require APPROOT.'/views/includes/footer.php';
?>