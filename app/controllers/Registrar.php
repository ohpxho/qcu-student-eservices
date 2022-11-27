<?php

	class Registrar extends Controller {
		


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
				'department' => 'registrar'
			];

			$this->showView('registrar/index', $data);
		}

		public function doSubmissionOfLackingDocuments() {
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
				'lackclass' => 'sactive',
				'councellingclass' => '',
				'moralclass' => '',
				'tuitionclass' => '',
				'oopclass' => '',
				'department' => 'registrar'
			];

			$this->showView('registrar/lacking-documents', $data);
		}

		public function doAcademicDocuments() {
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
				'acadclass' => 'sactive',
				'lackclass' => '',
				'councellingclass' => '',
				'moralclass' => '',
				'tuitionclass' => '',
				'oopclass' => '',
				'department' => 'registrar'
			];

			$this->showView('registrar/academic-documents', $data);
		}

		public function doAdmission() {
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
				'admissionclass' => 'sactive',
				'acadclass' => '',
				'lackclass' => '',
				'councellingclass' => '',
				'moralclass' => '',
				'tuitionclass' => '',
				'oopclass' => '',
				'department' => 'registrar'
			];

			$this->showView('registrar/admission', $data);
		}

	}


?>