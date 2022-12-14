<?php
	
	class Users {

		public function __construct() {
			$this->db = new Database();
		}

		public function login($id, $pass) {
			$email = $id;
			$this->db->query("SELECT * FROM users WHERE id=:id or email=:email");
			
			$this->db->bind(':id', $id);
			$this->db->bind(':email', $email);
			$result = $this->db->getSingleResult();
			if(is_object($result)) {
				if(password_verify($pass, $result->pass)) {
					return $result;
				}
			}

			return false;
			
		}

		public function register($data) {
			$this->db->query("INSERT INTO users (id, pass, email, approve, block, createdAt)
							  VALUES (:id, :pass, :email, 0, 0, NOW())");
			$this->db->bind(':id', $data['id']);
			$this->db->bind(':pass', $data['pass']);
			$this->db->bind(':email', $data['email']);

			$userResult = $this->db->execute();

			$this->db->query("INSERT INTO student 
							  (id, email, lname, mname, fname, street, city, state, zip, course, section, year, contact, qc_resident, type)
							  VALUES 
							  (:id, :email, :lname, :mname, :fname, :street, :city, :state, :zip, :course, :section, :year, :contact, :resident, :type)");
			
			$this->db->bind(':id', $data['id']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':lname', $data['lname']);
			$this->db->bind(':mname', $data['mname']);
			$this->db->bind(':fname', $data['fname']);
			$this->db->bind(':street', $data['street']);
			$this->db->bind(':city', $data['city']);
			$this->db->bind(':state', $data['state']);
			$this->db->bind(':zip', $data['zip']);
			$this->db->bind(':course', $data['course']);
			$this->db->bind(':section', $data['section']);
			$this->db->bind(':year', $data['year']);
			$this->db->bind(':contact', $data['contact']);
			$this->db->bind(':resident', $data['resident']);
			$this->db->bind(':type', $data['type']);
		
			$studentResult = $this->db->execute();

			if($userResult && $studentResult) {
				return true;
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
				return $result;
			}

			return false;
		}

		public function findUserById($id) {
			$this->db->query("SELECT * from users WHERE id=:id");
			$this->db->bind(':id', $id);
			$result = $this->db->getSingleResult();
			if(is_object($result)) {
				return $result;
			}

			return false;
		}

		public function updateUser($user) {
			if(!empty($user['pass']) && !empty($user['pic'])) {
				$this->db->query("UPDATE users SET email=:email, pic=:pic, pass=:pass WHERE id=:id");
			} elseif(!empty($user['pass'])) {
				$this->db->query("UPDATE users SET email=:email, pass=:pass WHERE id=:id");
			} elseif(!empty($user['pic'])) {
				$this->db->query("UPDATE users SET email=:email, pic=:pic WHERE id=:id");
			} else {
				$this->db->query("UPDATE users SET email=:email WHERE id=:id");	
			}

			$this->db->bind(':id', $user['id']);
			$this->db->bind(':email', $user['email']);

			if(!empty($user['pic'])) {
				$this->db->bind(':pic', $user['pic']);
			}

			if(!empty($user['pass'])) {	
				$this->db->bind(':pass', $user['pass']);
			}

			return $this->db->execute();
		}


		public function fetchAllPendingStudent() {
			$this->db->query("SELECT users.*, student.* FROM users LEFT JOIN student ON users.id = student.id WHERE users.approve = 0");
			$result = $this->db->getAllResult();
			return $result;
		}

		public function updateApproveAttr($data) {
			$this->db->query("UPDATE users SET approve=:approve WHERE id=:id");
			$this->db->bind(':approve', $data['action']);
			$this->db->bind(':id', $data['id']);
			$user_result = $this->db->execute();

			$this->db->query("INSERT INTO account_eval (id, email, reason_of_refusal) VALUES (:id, :email, :reason)");
			$this->db->bind(':id', $data['id']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':reason', $data['reason']);
			$eval_result = $this->db->execute();

			if($user_result && $eval_result) {
				return true;
			}

			return false;			
		}
		

	}

?>