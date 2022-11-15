<?php

	class Home extends Controller {

		public function __construct() {
			$this->userModel = $this->initModel('User');
		}
		
		public function doIndex() {
			redirectIfLoggedIn();

			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			
				$data = [
					'title' => SITENAME,
					'id' => trim($post['id']),
					'pass' => trim($post['pass']),
					'err' => ''
				];

				if($this->isLoginDetailsValid($data)) {
					$user = $this->userModel->login($data['id'], $data['pass']);
					if($user) {
						$this->createUserSession($user);
						redirectIfLoggedIn();
					} else {
						$data['err'] = 'Something went wrong. Try again.';
					}
				} else {
					$data['err'] = 'Invalid input. Try again.';
				} 
				
			} else {
				$data = [
					'title' => SITENAME,
					'id' => '',
					'pass' => '',
					'err' => ''
				];
		
			}

			$this->showView('home/index', $data);
		}

		public function doOverview() {
			redirectIfNotLoggedIn();
			$data = [
				'title' => SITENAME,
				'ovclass' => 'hactive',
				'svclass' => '',
				'apclass' => '',
			];

			$this->showView('home/overview', $data);
		}

		public function doLogout() {
			unset($_SESSION['id']);
			unset($_SESSION['email']);
			unset($_SESSION['fname']);
			unset($_SESSION['type']);
			unset($_SESSION);
			header('location:'.URLROOT.'/home/index');
		}

		public function createUserSession($user) {
			$_SESSION['id'] = $user->id;
			$_SESSION['email'] = $user->email;
			$_SESSION['fname'] = $user->fname;	
			$_SESSION['type'] = $user->type;
		}

		public function isLoginDetailsValid($data) {
			if(empty($data['id'])) {
				return false;
			}

			if(empty($data['pass'])) {
				return false;
			}

			return true;
		}
		
	}

?>