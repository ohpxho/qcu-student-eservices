<?php

	function splitURL() {
		$url = array_slice(array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))), 1);
		return $url;
	}

?>

<div class="breadcrumb-con">
	<?php

		$url = splitURL();
		$path = '/';
		$urlLen = count($url);

		foreach ($url as $key => $value) {
			$path = $path.''.$value.'/';	
			if($key < $urlLen - 1):

	?>			
				<a href="<?php echo URLROOT.''.$path ?>"><?php echo str_replace('%20', ' ', ucwords($value)); ?></a>
				<span> / </span>

	<?php

			else:

	?>

				<span><?php echo str_replace('%20', ' ', ucwords($value)) ; ?></span>

	<?php

			endif;
		}

	?>
</div>