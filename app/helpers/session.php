<?php

	session_start();

	function isLoggedIn() {
		if(isset($_SESSION['id'])) {
			return true;
		} 
		
		return false;
	}

	function whoIsIn() {
		if(isset($_SESSION['type'])) {
			return $_SESSION['type'];
		} else {
			return '';
		}
	}

	function redirectIfLoggedIn() {
		$user = whoIsIn();
		if(!empty($user)) {
			if($user == 'student') {
				header('location:'.URLROOT.'/home/overview');
			} elseif($user == 'admin') {
				header('location:'.URLROOT.'/home/overview');
			} else {
				header('location:'.URLROOT.'/home/overview');
			}
		}	
	}

	function redirectIfNotLoggedIn() {
		$user = whoIsIn();
		if(empty($user)) {
			header('location:'.URLROOT.'/home/index');
		}	
	}
	

?>