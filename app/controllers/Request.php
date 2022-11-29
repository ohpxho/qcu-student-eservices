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
				'councellingclass' => '',
				'moralclass' => '',
				'oopclass' => '',
				'tuitionclass' => '',
				'evalclass' => ''
			];

			$this->showView('request/index', $data);
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
				'returnclass' => ''
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
				'returnclass' => ''
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
				'returnclass' => ''
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
				'returnclass' => 'sactive'
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
				'evalclass' => ''
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
				'evalclass' => ''
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
				'students' => ''
			];

			$students = $this->userModel->fetchAllPendingStudent();
			$data['students'] = $students;
			$this->showView('registrar/evaluation', $data);
		}


		public function doCouncelling() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'councellingclass' => 'sactive',
				'moralclass' => ''
			];

			$this->showView('guidance/councelling', $data);
		}

		public function doRequestOfGoodMoral() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => 'hactive',
				'councellingclass' => '',
				'moralclass' => 'sactive'
			];

			$this->showView('guidance/cert', $data);
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
				'tuitionclass' => ''
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
				'tuitionclass' => 'sactive'
			];

			$this->showView('finance/tuition', $data);
		}

	}


?>