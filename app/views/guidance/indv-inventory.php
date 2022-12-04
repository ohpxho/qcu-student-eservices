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

				if($_SESSION['type'] == 'student'):
					require APPROOT.'/views/guidance/indv-inventory/student.php';
				else:
					require APPROOT.'/views/guidance/indv-inventory/admin.php';
				endif;
			?>
		</div>

		<script src="<?php echo URLROOT; ?>/public/script/list-dropdown.js"></script>
		<script src="<?php echo URLROOT; ?>/public/script/services.js"></script>
	</div>
<?php
	require APPROOT.'/views/includes/footer.php';
?>
