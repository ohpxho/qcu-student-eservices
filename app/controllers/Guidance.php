<?php

	class Guidance extends Controller {
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
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/index', $data);
		}

		public function doCounseling() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'counselingclass' => 'sactive',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'department' => 'guidance',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);
			
			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('guidance/counseling', $data);
		}

		public function doRequestOfGoodMoral() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'counselingclass' => '',
				'moralclass' => 'sactive',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'department' => 'guidance',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);

			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('guidance/cert', $data);
		}

		public function doPsychologicalTesting() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => 'sactive',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'department' => 'guidance',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);

			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('guidance/psych-testing', $data);
		}

		public function doIndividualInventoryRecord() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => 'sactive',
				'needsclass' => '',
				'facultyclass' => '',
				'department' => 'guidance',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);

			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('guidance/indv-inventory', $data);
		}

		public function doStudentNeedsAssessment() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => 'sactive',
				'facultyclass' => '',
				'department' => 'guidance',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);

			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('guidance/needs-assessment', $data);
		}

		public function doFacultyEvaluation() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => 'sactive',
				'department' => 'guidance',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);

			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('guidance/faculty-eval', $data);
		}
	}


?>