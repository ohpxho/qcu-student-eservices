<?php

	class Guidance extends Controller {
		


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
				'department' => 'guidance'
			];

			$this->showView('guidance/index', $data);
		}

		public function doCouncelling() {
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
				'councellingclass' => 'sactive',
				'moralclass' => '',
				'tuitionclass' => '',
				'oopclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/councelling', $data);
		}

		public function doRequestOfGoodMoral() {
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
				'moralclass' => 'sactive',
				'tuitionclass' => '',
				'oopclass' => '',
				'department' => 'guidance'
			];

			$this->showView('guidance/cert', $data);
		}
	}


?>