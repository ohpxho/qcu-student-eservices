<?php

	class User extends Controller {

		public function __construct() {
			$this->userModel = $this->initModel('Users');
		}

		public function doProfile() {
			redirectIfNotLoggedIn();
			
			$data = [
					'title' => SITENAME,
					'ovclass' => '',
					'svclass' => '',
					'apclass' => '',
					'rfdclass' => '',
					'rficlass' => '',
					'agcclass' => '',
					'lpwclass' => '',
					'err' => '',
					'success' => ''
			];

			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				
				$user = [
					'id' => $_SESSION['id'],
					'fname' => trim($post['fname']),
					'mname' => trim($post['mname']),
					'lname' => trim($post['lname']),
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

			$this->showView('user/profile', $data);	
		}


		public function isUpdateDetailsValid($user) {

			if(empty($user['fname'])) {
				return 'Firstname cannot be empty.';
			} 

			if(empty($user['lname'])) {
				return 'Lastname cannot be empty.';
			}

			if(empty($user['email'])) {
				return 'Email cannot be empty.';
			}

			if(!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
 			   return 'Email is invalid. Please try again.';
			}

			if(!$this->userModel->findUSerByEmail($user['email'])) {
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
			$_SESSION['fname'] = $user['fname'];
			$_SESSION['mname'] = $user['mname'];	
			$_SESSION['lname'] = $user['lname'];		
			if(!empty($user['pic'])) {
				$_SESSION['pic'] = $user['pic'];
			}
			
		}
	}



?>