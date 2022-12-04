<?php

	class Finance extends Controller {
		public function __construct() {
			$this->studentModel = $this->initModel('Students');
		}

		public function doIndex() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'tuitionclass' => '',
				'oopclass' => '',
				'department' => 'finance'
			];

			$this->showView('finance/index', $data);
		}

		public function doRequestOrderOfPayment() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'err' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'tuitionclass' => '',
				'oopclass' => 'sactive',
				'department' => 'finance',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);
			
			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('finance/order-of-payment', $data);
		}

		public function doTuitionPayment() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'err' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'tuitionclass' => 'sactive',
				'oopclass' => '',
				'department' => 'finance',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);
			
			if(is_object($student)) {
				$data['student'] = $student;
			}
			

			$this->showView('finance/tuition', $data);
		}
	}


?>