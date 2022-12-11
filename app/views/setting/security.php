<?php
	require APPROOT.'/views/includes/header.php';
	require APPROOT.'/views/includes/h-navigation.php';	
?>
	<div class="setting-main-con">
		<?php
			require APPROOT.'/views/includes/settings-navigation.php';
		?>
		<div class="setting-con">
			<div>
				<p class="header">Security Setting</p>
				<hr>
				<p style="font-weight: var(--fw-semi-bold);">IP Whitelisting</p>
				<p>IP listed here are devices available for admin to use in order to access the web application.</p>
				<button style="margin-bottom: 10px">Add new IP</button>
				<table style="height: auto;"> 
					<tr>
						<th colspan="10"><span>IP Address<img src="<?php echo URLROOT; ?>/public/assets/img/sort.png" data-orderby="id" class="tbl-order-btn"/></span></th>
					</tr>
					<tr>
						<td>123.125.125.1</td>
					</tr>
					<tr>
						<td>123.125.125.3</td>
					</tr>					
				</table>
			</div>
		</div>
	</div>

<?php
	require APPROOT.'/views/includes/footer.php';
?>