<?php

	class Appointment extends Controller {
		
		public function __construct() {

		}

		public function doindex() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => 'hactive',
				'rqclass' => '',
				'usrclass' => '',
				'stdclass' => ''
			];

			$this->showView('appointment/index',$data);
		}
	}


?>