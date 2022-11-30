<?php

	class Registrar extends Controller {
		
		public function __construct() {
			$this->userModel = $this->initModel('Users');
			$this->studentModel = $this->initModel('Students');
		}

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

		public function doRequestAcademicDocuments() {
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


		public function doFilter() {
			redirectIfNotLoggedIn();

			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

				$target = trim($post['target']);
				$filters = $post['filters'];
				$order = $post['order'];

				$result = $this->studentModel->searchStudents($target, $filters, $order);
				
				if(is_array($result) || is_object($result)) {
					echo json_encode($result);
					return;
				}

				echo '';
				return;
			}
		}


		public function doUpdateApproveAttr() {
			redirectIfNotLoggedIn();

			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

				$id = trim($post['id']);
				$email = trim($post['email']);
				$action = trim($post['action']);
				$reason = trim($post['reason']);
				$data = [
					'id' => $id, 
					'email' => $email,
					'action' => $action,
					'reason' => $reason
				];

				$result = $this->userModel->updateApproveAttr($data);
				if($result) {
					echo json_encode(true);
					return;
				}

				echo json_encode(false);
				return;
			}
		}

		public function doUpdateMultApproveAttr() {
			redirectIfNotLoggedIn();

			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data = $post['data'];

				$result = true;
				foreach($data as $index => $student) {
					$result = $this->userModel->updateApproveAttr($student);
					if($result) {
						$result = true;
					} else {
						$result = false;
						break;
					}
				}

				echo json_encode($result);
				return;
				
			}
		}
	}


?>