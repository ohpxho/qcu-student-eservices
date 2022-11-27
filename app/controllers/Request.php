<?php

	class Request extends Controller {
		public function __construct() {

		}

		public function doIndex() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive'
			];

			$this->showView('request/index', $data);
		}
	}


?>