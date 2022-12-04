<?php

	class Medical extends Controller{
		public function __construct() {
			$this->studentModel = $this->initModel('Students');
		}

		public function doIndex() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'apclass' => '',
				'consultclass' => '',
				'department' => 'medical'
			];

			$this->showView('medical/index', $data);
		}

		public function doOnlineConsultation() {
			redirectIfNotLoggedIn();
			
			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'err' => '',
				'message' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'consultclass' => 'sactive',
				'department' => 'medical',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''

			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);

			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('medical/online-consultation', $data);
		}
	}

?>