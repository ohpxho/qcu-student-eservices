<?php

	class Student extends Controller {
		public function __construct() {

		}

		public function doIndex() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => '',
				'usrclass' => '',
				'stdclass' => 'hactive'
			];

			$this->showView('/student/index', $data);
		}
	}
?>
