<?php

	class User extends Controller {

		public function __construct() {
			$this->userModel = $this->initModel('Users');
		}

		public function doProfile() {
			redirectIfNotLoggedIn();
			
			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rfdclass' => '',
				'rficlass' => '',
				'agcclass' => '',
				'lpwclass' => ''
			];

			$this->showView('user/profile', $data);	
		}
	}



?>