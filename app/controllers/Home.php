<?php

	class Home extends Controller {

		public function __construct() {
			$this->userModel = $this->initModel('Users');
			$this->studentModel = $this->initModel('Students');
			$this->adminModel = $this->initModel('Admins');
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
						if($user->approve) {
							if($user->block) {
								$data['err'] = 'Your account has been blocked.';
							} else {
								$this->createUserSession($user);
								redirectIfLoggedIn();
							}
						} else {
							$data['err'] = 'Account is being validated. Please wait for approval.';
						}
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

		public function doRegistration() {
			redirectIfLoggedIn();

			$data = [
				'title' => SITENAME,
				'success' => '',
				'err' => ''
			];

			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				if(isset($post['step'])) {
					if($post['step'] == 1) {

						$user = [
							'id' => trim($post['id']),
							'email' => trim($post['email']),
							'pass' => trim($post['pass']),
							'cpass' => trim($post['cpass'])
						];
						
						echo json_encode($this->validateAccountDetails($user));
						return;
					}

					if($post['step'] == 2) {

						$user = [
							'lname' => trim($post['lname']),
							'fname' => trim($post['fname']),
							'mname' => trim($post['mname']),
							'street' => trim($post['street']),
							'state' => trim($post['state']),
							'city' => trim($post['city']),
							'zip' => trim($post['zip']),
							'year' => trim($post['year']),
							'course' => trim($post['course']),
							'section' => trim($post['section']),
							'resident' => trim($post['resident']),
							'type' => trim($post['type']),
							'contact' => trim($post['contact'])
						];
						
						echo json_encode($this->validateStudentDetails($user));
						return;
					}
				} else {
					$user = [
						'id' => trim($post['id']),
						'email' => trim($post['email']),
						'pass' => password_hash(trim($post['pass']), PASSWORD_DEFAULT),
						'lname' => trim($post['lname']),
						'fname' => trim($post['fname']),
						'mname' => trim($post['mname']),
						'street' => trim($post['street']),
						'state' => trim($post['state']),
						'city' => trim($post['city']),
						'zip' => trim($post['zip']),
						'year' => trim($post['year']),
						'course' => trim($post['course']),
						'section' => trim($post['section']),
						'resident' => trim($post['resident']),
						'type' => trim($post['type']),
						'contact' => trim($post['contact'])
					]; 

					$result = $this->userModel->register($user);

					if($result) {
						$data['success'] = 'Registered successfully. Account is for evaluation.';
					} else {
						$data['err'] = 'Something went wrong. Please try again.';
					}
				}
			}

			$this->showView('home/registration', $data);
		}

		public function doOverview() {
			redirectIfNotLoggedIn();
			$data = [
				'title' => SITENAME,
				'ovclass' => 'hactive',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => '',
				'usrclass' => '',
				'stdclass' => ''
			];

			$this->showView('home/overview', $data);
		}

		public function doLogout() {
			unset($_SESSION['id']);
			unset($_SESSION['email']);
			unset($_SESSION['fname']);
			unset($_SESSION['lname']);
			unset($_SESSION['type']);
			unset($_SESSION['pic']);
			unset($_SESSION);
			header('location:'.URLROOT.'/home/index');
		}

		public function createUserSession($user) {
			$_SESSION['id'] = $user->id;
			$_SESSION['email'] = $user->email;
			if($user->type == 'student') {
				$student = $this->studentModel->findStudentById($user->id);
				print($student->fname);
				$_SESSION['fname'] = $student->fname;		
				$_SESSION['lname'] = $student->lname;
			} else {
				$admin = $this->adminModel->findAdminById($user->id);
				$_SESSION['fname'] = $admin->fname;	
				$_SESSION['lname'] = $admin->lname;
			}

			$_SESSION['type'] = $user->type;
			$_SESSION['pic'] = $user->pic;
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

		public function validateAccountDetails($data) {
			if(empty($data['id'])) {
				return 'ID cannot be empty.';
			}

			if(!is_numeric($data['id'])) {
				return 'ID has wrong format.';
			}

			if(empty($data['email'])) {
				return 'Email cannot be empty.';
			}

			if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
 			   return 'Email is invalid. Please try again.';
			}

			$domain = explode('@', $data['email'])[1];
			if($domain !== 'gmail.com') {
				return 'Gmail is required for email.';
			}

			if(empty($data['pass'])) {
				return 'Password cannot be empty.';
			}

			if(empty($data['cpass'])) {
				return 'Confirm Password cannot be empty.';
			}

			if(strlen($data['pass']) < 8) {
				return 'Password should be atlest 8 characters long. Alphanumeric.';
			}

			if($data['cpass'] != $data['pass']) {
				return 'Password and Confirm Password don\'t match.';
			}

			if($this->userModel->findUSerById($data['id'])) {
				return 'User already exist.';
			}

			if($this->userModel->findUSerByEmail($data['email'])) {
				return 'Email is already in use.';
			}

			return '';

		}

		public function validateStudentDetails($data) { 
			if(empty($data['lname'])) {
				return 'Lastname cannot be empty.';
			}

			if(empty($data['fname'])) {
				return 'Firstname cannot be empty.';
			}

			if(empty($data['street'])) {
				return 'Street cannot be empty.';
			}

			if(empty($data['city'])) {
				return 'City cannot be empty.';
			}

			if(empty($data['state'])) {
				return 'State cannot be empty.';
			}

			if(empty($data['zip'])) {
				return 'Zip cannot be empty.';
			}

			if(!is_numeric($data['zip'])) {
				return 'Zip has wrong format.';
			}

			if(empty($data['course'])) {
				return 'Course cannot be empty.';
			}

			if(empty($data['year'])) {
				return 'Year cannot be empty.';
			}

			if(empty($data['section'])) {
				return 'Section cannot be empty.';
			}

			if(empty($data['contact'])) {
				return 'Contact cannot be empty.';
			}

			if(!is_numeric($data['contact']) && !preg_match('/^[0-9]{11}+$/', $data['contact'])) {
				return 'Contact has wrong format.';
			}

			if(empty($data['resident'])) {
				return 'QC Resident cannot be empty.';
			}

			if(empty($data['type'])) {
				return 'Type cannot be empty.';
			}

			return '';			
		}
		
	}

?>

