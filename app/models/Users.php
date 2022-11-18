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
				if($result->pass == $pass) {
					return $result;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}

		public function getUserInfo() {

		}
		
	}

?>