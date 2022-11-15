<?php

	class Service extends Controller {

		public function __construct() {

		}

		public function doIndex() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'apclass' => ''
			];

			$this->showView('services/index', $data);
		}
	}

?>