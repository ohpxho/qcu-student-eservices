<?php

	class Students {
		public function __construct() {
			$this->db = new Database();
		}

		public function findUserById($id) {
			$this->db->query("SELECT * FROM student WHERE id=:id");
			$this->db->bind(':id', $id);

			$result = $this->db->getSingleResult();

			if(is_object($result)) {
				return $result;
			}

			return false;
		}

		public function searchStudents($target) {
			$this->db->query("SELECT users.*, student.* 
							  FROM student 
							  LEFT JOIN users 
							  ON student.id = users.id 
							  WHERE (student.id LIKE '%$target%' OR student.fname LIKE '%$target%' OR student.mname LIKE '%$target%' OR student.lname LIKE '%$target%' OR student.email LIKE '%$target%' OR student.fname LIKE '%$target%' OR student.course LIKE '%$target%' OR student.year LIKE '%$target%' OR student.section LIKE '%$target%' OR student.contact LIKE '%$target%') AND users.approve = 0;");

			$result = $this->db->getAllResult();
			
			if(is_array($result) || is_object($result)) {
				return $result;
			}

			return false;
		}
	}

?>