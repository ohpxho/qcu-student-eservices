<?php

	class Request extends Controller {
		public function __construct() {
			$this->userModel = $this->initModel('Users');
		}

		public function doIndex() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'libappclass' => '',
				'librefclass' => '',
				'libcardclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => '',
				'department' => $_SESSION['type']
			];

			$this->showView('/request/index', $data);
		}

	
		public function doRequestUniversityID() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'idclass' => 'sactive',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/id', $data);

		}

		public function doLaptopBorrow() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'idclass' => '',
				'borrowclass' => 'sactive',
				'repairclass' => '',
				'returnclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/borrow', $data);

		}

		public function doLaptopRepair() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => 'sactive',
				'returnclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/repair', $data);

		}

		public function doLaptopReturn() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => 'sactive',
				'department' => 'osas'
			];

			$this->showView('osas/return', $data);

		}

		public function doSubmissionOfLackingDocuments() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'lackclass' => 'sactive',
				'acadclass' => '',
				'admissionclass' => '',
				'evalclass' => '',
				'department' => 'registrar'
			];

			$this->showView('registrar/lacking-documents', $data);
		}

		public function doRequestAcademicDocuments() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'lackclass' => '',
				'acadclass' => 'sactive',
				'admissionclass' => '',
				'evalclass' => '',
				'department' => 'registrar'
			];

			$this->showView('registrar/academic-documents', $data);
		}
	
		public function doAccountEvaluation() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'lackclass' => '',
				'acadclass' => '',
				'admissionclass' => '',
				'evalclass' => 'sactive',
				'department' => 'registrar'
			];

			$this->showView('registrar/evaluation', $data);
		}


		public function doCounseling() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'counselingclass' => 'sactive',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/counseling', $data);
		}

		public function doRequestOfGoodMoral() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'counselingclass' => '',
				'moralclass' => 'sactive',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/cert', $data);
		}

		public function doPsychologicalTesting() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => 'sactive',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/psych-testing', $data);
		}

		public function doIndividualInventoryRecord() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => 'sactive',
				'needsclass' => '',
				'facultyclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/indv-inventory', $data);
		}

		public function doStudentNeedsAssessment() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => 'sactive',
				'facultyclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/needs-assessment', $data);
		}

		public function doFacultyEvaluation() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'counselingclass' => '',
				'moralclass' => '',
				'psychclass' => '',
				'invclass' => '',
				'needsclass' => '',
				'facultyclass' => 'sactive',
				'department' => 'guidance'
			];

			$this->showView('guidance/faculty-eval', $data);
		}


		public function doLibraryCardApplication() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'libcardclass' => 'sactive',
				'librefclass' => '',
				'libappclass' => '',
				'department' => 'library'
			];

			$this->showView('library/card-app', $data);
		}

		public function doLibraryOnlineReferenceService() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'libcardclass' => '',
				'librefclass' => 'sactive',
				'libappclass' => '',
				'department' => 'library'
			];

			$this->showView('library/ref-service', $data);
		}

		public function doLibraryStudentAppointmentRequest() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'libcardclass' => '',
				'librefclass' => '',
				'libappclass' => 'sactive',
				'department' => 'library'
			];

			$this->showView('library/stud-app', $data);
		}

		public function doOnlineConsultation() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'consultclass' => 'sactive',
				'department' => 'medical'
			];

			$this->showView('medical/online-consultation', $data);
		}

		public function doRequestOrderOfPayment() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'oopclass' => 'sactive',
				'tuitionclass' => '',
				'department' => 'finance'
			];

			$this->showView('finance/order-of-payment', $data);
		}

		public function doTuitionPayment() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'oopclass' => '',
				'tuitionclass' => 'sactive',
				'department' => 'finance'
			];

			$this->showView('finance/tuition', $data);
		}
	}

?>