<?php

	class Library extends Controller{
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
				'rqclass' => 'hactive',
				'libcardclass' => '',
				'librefclass' => '',
				'libappclass' => '',
				'department' => 'library'
			];

			$this->showView('library/index', $data);
		}

		public function doLibraryCardApplication() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'libcardclass' => 'sactive',
				'librefclass' => '',
				'libappclass' => '',
				'department' => 'library',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);
			
			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('library/card-app', $data);
		}

		public function doLibraryOnlineReferenceService() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'libcardclass' => '',
				'librefclass' => 'sactive',
				'libappclass' => '',
				'department' => 'library',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);
			
			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('library/ref-service', $data);
		}

		public function doLibraryStudentAppointmentRequest() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'libcardclass' => '',
				'librefclass' => '',
				'libappclass' => 'sactive',
				'department' => 'library',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);
			
			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('library/stud-app', $data);
		}
	}
?>