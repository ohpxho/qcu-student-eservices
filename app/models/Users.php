<?php
	
	class Users {

		public function __construct() {
			$this->db = new Database();
		}

		public function login($id, $pass) {
			$this->db->query("SELECT * from users WHERE id=:id");
			$this->db->bind(':id', $id);
			$result = $this->db->getSingleResult();
			if(is_object($result)) {
				if(password_verify($pass, $result->pass)) {
					return $result;
				}
			}

			return false;
			
		}

		public function getUserPassword($id) {
			$this->db->query("SELECT pass FROM users WHERE id=:id");
			$this->db->bind(':id', $id);
			$result = $this->db->getSingleResult();
			if(is_object($result)) {
				return $result->pass;
			}

			return false;	
		}

		public function findUserByEmail($email) {
			$this->db->query("SELECT * from users WHERE email=:email");
			$this->db->bind(':email', $email);
			$result = $this->db->getSingleResult();
			if(is_object($result)) {
				return true;
			}

			return false;
		}

		public function updateUser($user) {
			if(!empty($user['pass']) && !empty($user['pic'])) {
				$this->db->query("UPDATE users SET fname=:fname, mname=:mname, lname=:lname, email=:email, pic=:pic, pass=:pass WHERE id=:id");
			} elseif(!empty($user['pass'])) {
				$this->db->query("UPDATE users SET fname=:fname, mname=:mname, lname=:lname, email=:email, pass=:pass WHERE id=:id");
			} elseif(!empty($user['pic'])) {
				$this->db->query("UPDATE users SET fname=:fname, mname=:mname, lname=:lname, email=:email, pic=:pic WHERE id=:id");
			} else {
				$this->db->query("UPDATE users SET fname=:fname, mname=:mname, lname=:lname, email=:email WHERE id=:id");	
			}

			$this->db->bind(':id', $user['id']);
			$this->db->bind(':fname', $user['fname']);
			$this->db->bind(':mname', $user['mname']);
			$this->db->bind(':lname', $user['lname']);
			$this->db->bind(':email', $user['email']);

			if(!empty($user['pic'])) {
				$this->db->bind(':pic', $user['pic']);
			}

			if(!empty($user['pass'])) {	
				$this->db->bind(':pass', $user['pass']);
			}

			return $this->db->execute();
		}
		
	}

?>