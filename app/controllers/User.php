<?php

	class User extends Controller {

		public function __construct() {
			$this->userModel = $this->initModel('Users');
		}

		public function doStudent() {
			redirectIfNotLoggedIn();
			
			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => '',
				'lpwclass' => '',
				'usrclass' => 'hactive',
				'stdclass' => '',
				'err' => '',
				'success' => '',
				'stduserclass' => 'sactive',
				'admuserclass' => '',
				'auditclass' => ''
			];

			$this->showView('user/student', $data);	
		}

		public function doAdmin() {
			redirectIfNotLoggedIn();
			
			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => '',
				'lpwclass' => '',
				'usrclass' => 'hactive',
				'stdclass' => '',
				'err' => '',
				'success' => '',
				'stduserclass' => '',
				'admuserclass' => 'sactive',
				'auditclass' => ''
			];

			$this->showView('user/admin', $data);	
		}

		public function doAudit() {
			redirectIfNotLoggedIn();
			
			$data = [
				'title' => SITENAME,
				'ovclass' => '',
				'svclass' => '',
				'apclass' => '',
				'rqclass' => '',
				'lpwclass' => '',
				'usrclass' => 'hactive',
				'stdclass' => '',
				'err' => '',
				'success' => '',
				'stduserclass' => '',
				'admuserclass' => '',
				'auditclass' => 'sactive'
			];

			$this->showView('user/audit-trail', $data);	
		}

	}

?>