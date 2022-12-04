<?php

	class MOsas {
		public function __construct() {
			$this->db = new Database();
		}

		public function getStudentLaptopBorrowRecords($id) {
			$this->db->query("SELECT * FROM laptop_borrowing_request WHERE id=:id ORDER BY datetoGo DESC");
			$this->db->bind(':id', $id);

			$result = $this->db->getAllResult();
			if($result) {
				return $result;
			}

			return false;
		}	

		public function isStudentHadLaptop($id) {
			$this->db->query("SELECT * FROM laptop_borrowing_request WHERE id=:id AND status=1");
			$this->db->bind(':id', $id);

			$result = $this->db->getAllResult();
			if(is_object($result)) {
				return $result;
			}

			return false;
		}

	}

?>