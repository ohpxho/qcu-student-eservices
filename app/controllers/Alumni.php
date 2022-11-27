<?php

	class Alumni extends Controller {
		public function __construct() {

		}

		public function doIndex() {
			redirectIfLoggedIn();

			$data = [
				'title' => SITENAME
			];

			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$user = [
					'id' => trim($post['id']),
					'section' => trim($post['section'])
				];

				echo json_encode($this->validate($user));
				return;
			}

			$this->showView('alumni/index', $data);
		}

		public function validate($data) {
			if(empty($data['id'])) {
				return 'ID cannot be empty.';
			}

			if(!is_numeric($data['id'])) {
				return 'ID has wrong format';
			}

			if(empty($data['section'])) {
				return 'Section cannot be empty.';
			}

			return '';
		}
	}


?>