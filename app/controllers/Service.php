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
				'apclass' => '',
				'rfdclass' => '',
				'rficlass' => '',
				'agcclass' => '',
				'lpwclass' => '',
			];

			$this->showView('services/index', $data);
		}

		public function doRequestForDocument() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'apclass' => '',
				'rfdclass' => 'sactive',
				'rficlass' => '',
				'agcclass' => '',
				'lpwclass' => '',

			];

			$this->showView('services/rfd', $data);
		}
	}

?>