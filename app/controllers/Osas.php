<?php

	class Osas extends Controller {

		public function __construct() {
			$this->userModel = $this->initModel('Users');
			$this->studentModel = $this->initModel('Students');
			$this->osasModel = $this->initModel('MOsas');
			$this->servicesModel = $this->initModel('Services');
		}

		public function doIndex() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'department' => 'osas'
			];

			$this->showView('osas/index', $data);
		}

		public function doRequestUniversityID() {
			redirectIfNotLoggedIn();
			
			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'err' => '',
				'message' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'idclass' => 'sactive',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => '',
				'department' => 'osas',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''

			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);

			if(is_object($student)) {
				$data['student'] = $student;
			}
			
			$this->showView('osas/id', $data);
		}

		public function doLaptopBorrow() {
			redirectIfNotLoggedIn();
			
			$data = [
				'title' => SITENAME,
				'err' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'idclass' => '',
				'borrowclass' => 'sactive',
				'repairclass' => '',
				'returnclass' => '',
				'department' => 'osas',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$canBorrow = [
					1 =>'laptop and pocket wifi',
					2 => 'laptop only',
					3 => 'pocket wifi only'
				];

			$records = $this->osasModel->getStudentLaptopBorrowRecords($_SESSION['id']);
			$student = $this->studentModel->findStudentById($_SESSION['id']);
			$borrowed = $this->osasModel->isStudentHadLaptop($_SESSION['id']);

			if(is_object($records)) {
				$data['records'] = $records;
			}
			
			if(is_object($borrowed)) {
				foreach($borrowed as $index => $record) {
					switch($record->type) {
						case 1:
							$canBorrow = [];
							break 2;
						case 2:
							unset($canBorrow[2]);
							unset($canBorrow[1]);
						case 3:
							unset($canBorrow[3]);
							unset($canBorrow[1]);
					}
				}
			}
			
			$data['canBorrow'] = $canBorrow;

			if(isset($canBorrow[1])) {
				$data['message'] = 'You are allowed to borrow '.$canBorrow[1];
			} else if(isset($canBorrow[2])) {
				$data['message'] = 'You are allowed to borrow '.$canBorrow[2];
			} else {
				$data['message'] = 'You are allowed to borrow '.$canBorrow[3];
			}

			if(count($data['canBorrow']) == 0) {
				$data['err'] = 'Student can only borrow one per devices.';
				$data['btnAppointmentState'] = 'disabled';
			}

			if(is_object($student)) {
				$data['student'] = $student;
				if($student->year > 1) {
					$data['err'] = 'I\'m sorry but you\'re not allowed to borrow. This is only for 1st year students.';
					$data['btnAppointmentState'] = 'disabled';
				}
			}

			$this->showView('osas/borrow', $data);	
		}

		public function doLaptopRepair() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'err' => '',
				'message' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => 'sactive',
				'returnclass' => '',
				'department' => 'osas',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);

			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('osas/repair', $data);
		}

		public function doLaptopReturn() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'err' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => 'hactive',
				'rqclass' => 'hactive',
				'apclass' => '',
				'idclass' => '',
				'borrowclass' => '',
				'repairclass' => '',
				'returnclass' => 'sactive',
				'department' => 'osas',
				'records' => [],
				'student' => [],
				'canBorrow' => [],
				'btnAppointmentState' => ''
			];

			$student = $this->studentModel->findStudentById($_SESSION['id']);

			if(is_object($student)) {
				$data['student'] = $student;
			}

			$this->showView('osas/return', $data);
		}
	}


?>