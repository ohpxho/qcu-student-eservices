<?php
	
	class Setting extends Controller {
		public function __construct() {
			$this->userModel = $this->initModel('Users');
			$this->studentModel = $this->initModel('Students');
			$this->adminModel = $this->initModel('Admins');
		}

		public function doAccount() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'success' => '',
				'ovclass' => '',
				'svclass' => '',
				'rqclass' => '',
				'apclass' => '',
				'usrclass' => '',
				'stdclass' => '',
				'accsettingclass' => 'sactive',
				'pslsettingclass' => '',
				'srvsettingclass' => '',
				'secsettingclass' => ''
			];
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				
				$user = [
					'id' => $_SESSION['id'],
					'email' => trim($post['email']),
					'oldpass' => trim($post['oldpass']),
					'newpass' => trim($post['newpass']),
					'confirmpass' => trim($post['confirmpass']),
				];
				
				$isUpdateDetailsValid = $this->isUpdateDetailsValid($user); 

				if($isUpdateDetailsValid === true) {
					$user['pic']  = $this->uploadProfilePicture($_FILES['pic']);
					if(!empty($user['newpass'])) {
						$user['pass'] = password_hash($user['newpass'], PASSWORD_DEFAULT);	
					}
					unset($user['newpass']);
					unset($user['confirmpass']);
					unset($user['oldpass']);

					$result = $this->userModel->updateUser($user);

					if($result) {
						$this->updateSession($user);
						$data['sucess'] = 'Profile update successfully.';
					} else {
						$data['err'] = 'Profile update failed.';
					} 

				} else {
					$data['err'] = $isUpdateDetailsValid;
				}

			}

			$this->showView('/setting/account', $data);
		}

		public function doPersonal() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => '',
				'rqclass' => '',
				'apclass' => '',
				'usrclass' => '',
				'stdclass' => '',
				'accsettingclass' => '',
				'pslsettingclass' => 'sactive',
				'srvsettingclass' => '',
				'secsettingclass' => '',
				'personal' => []
			];
			
			if($_SESSION['type'] == 'student') {
				$personal = $this->studentModel->findStudentById($_SESSION['id']);	
			} else {
				$personal = $this->adminModel->findAdminById($_SESSION['id']);	
			}
			
			if(is_object($personal)) {
				$data['personal'] = $personal;
			}

			$this->showView('/setting/personal', $data);
		}

		public function doServices() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => '',
				'rqclass' => '',
				'apclass' => '',
				'usrclass' => '',
				'stdclass' => '',
				'accsettingclass' => '',
				'pslsettingclass' => '',
				'srvsettingclass' => 'sactive',
				'secsettingclass' => ''
			];
			
			$this->showView('/setting/services', $data);
		
		}

		public function doSecurity() {
			redirectIfNotLoggedIn();

			$data = [
				'title' => SITENAME,
				'error' => '',
				'message' => '',
				'ovclass' => '',
				'svclass' => '',
				'rqclass' => '',
				'apclass' => '',
				'usrclass' => '',
				'stdclass' => '',
				'accsettingclass' => '',
				'pslsettingclass' => '',
				'srvsettingclass' => '',
				'secsettingclass' => 'sactive'
			];
			
			$this->showView('/setting/security', $data);
		
		}

		public function isUpdateDetailsValid($user) {

			if(empty($user['email'])) {
				return 'Email cannot be empty.';
			}

			if(!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
 			   return 'Email is invalid. Please try again.';
			}

			$userByEmail = $this->userModel->findUSerByEmail($user['email']);
			if($userByEmail && $userByEmail->id != $user['id']) {
				return 'Email is already in use.';
			}

			if(!empty($user['confirmpass']) && empty($user['newpass'])) {
				return 'Invalid input. Try again';
			}

			if(!empty($user['newpass']) && empty($user['oldpass'])) {
				return 'Invalid input. Try again';
			}

			if(!empty($user['oldpass']) && empty($user['newpass'])) {
				return 'Invalid input. Try again';
			}

			if(!empty($user['newpass']) && empty($user['confirmpass'])) {
				return 'Invalid input. Try again';
			}
			
			if(!empty($user['newpass']) && strlen($user['newpass']) < 8) {
				return 'Password must have atlest 8 characters.';
			}

			if($user['newpass'] != $user['confirmpass']) {
				return 'New password don\'t match. Please try again'; 
			}

			if(!empty($user['oldpass'])) {
				$oldpassDB = $this->userModel->getUserPassword($user['id']);
				$oldpassINPUT = $user['oldpass'];

				if(!password_verify($oldpassINPUT, $oldpassDB)) {
					return 'Existing password do not match from "Old Password".';
				}
			}

			return true;
		}

		public function uploadProfilePicture($file) {
			if($file) {
				$path = uploadImage($file);
				if($path) {
					return $path;
				}
				return '';
			}

			return '';
		}

		public function updateSession($user) {
			$_SESSION['email'] = $user['email'];
			if(!empty($user['pic'])) {
				$_SESSION['pic'] = $user['pic'];
			}
			
		}

	}

?>