<?php

	class Osas extends Controller {

		public function __construct() {
			$this->userModel = $this->initModel('Users');
		}

		public function doIndex() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'apclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'admissionclass' => '',
				'acadclass' => '',
				'lackclass' => '',
				'councellingclass' => '',
				'moralclass' => '',
				'tuitionclass' => '',
				'oopclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/index', $data);
		}

		public function doRequestUniversityID() {
			redirectIfNotLoggedIn();
			
			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'apclass' => '',
				'idclass' => 'sactive',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'admissionclass' => '',
				'acadclass' => '',
				'lackclass' => '',
				'councellingclass' => '',
				'moralclass' => '',
				'tuitionclass' => '',
				'oopclass' => '',
				'department' => 'osas'

			];

			$this->showView('osas/id', $data);
		}

		public function doLaptopBorrow() {
			redirectIfNotLoggedIn();
			
			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'apclass' => '',
				'idclass' => '',
				'borrowclass' => 'sactive',
				'repairclass' => '',
				'returnclass' => '',
				'admissionclass' => '',
				'acadclass' => '',
				'lackclass' => '',
				'councellingclass' => '',
				'moralclass' => '',
				'tuitionclass' => '',
				'oopclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/borrow', $data);	
		}

		public function doLaptopRepair() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'apclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => 'sactive',
				'returnclass' => '',
				'admissionclass' => '',
				'acadclass' => '',
				'lackclass' => '',
				'councellingclass' => '',
				'moralclass' => '',
				'tuitionclass' => '',
				'oopclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/repair', $data);
		}

		public function doLaptopReturn() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'apclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => 'sactive',
				'admissionclass' => '',
				'acadclass' => '',
				'lackclass' => '',
				'councellingclass' => '',
				'moralclass' => '',
				'tuitionclass' => '',
				'oopclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/return', $data);
		}
	}


?>