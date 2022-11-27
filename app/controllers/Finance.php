<?php

	class Finance extends Controller {
		
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
				'department' => 'finance'
			];

			$this->showView('finance/index', $data);
		}

		public function doRequestOrderOfPayment() {
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
				'oopclass' => 'sactive',
				'department' => 'finance'
			];

			$this->showView('finance/order-of-payment', $data);
		}

		public function doTuitionPayment() {
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
				'tuitionclass' => 'sactive',
				'oopclass' => '',
				'department' => 'finance'
			];

			$this->showView('finance/tuition', $data);
		}
	}


?>