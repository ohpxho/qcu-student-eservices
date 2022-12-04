<?php

	class Students {
		public function __construct() {
			$this->db = new Database();
		}

		public function findStudentById($id) {
			$this->db->query("SELECT * FROM student WHERE id=:id");
			$this->db->bind(':id', $id);

			$result = $this->db->getSingleResult();

			if(is_object($result)) {
				return $result;
			}

			return false;
		}

		public function searchStudents($target, $filters, $order) {
			$filterQuery = 'AND ((';

			if(count($filters) > 0) {
				foreach($filters as $index => $filter) {
					if($index < count($filters)-1) {
						$prevAttr = ($index-1 < 0)? $filter[0] : $filters[$index-1][0];
						$currAttr = $filter[0];
						$currAttrVal = $filter[1];
						$nextAttr = ($index+1 < count($filters))? $filters[$index+1][0] : $filter[0];  
						$isOrIncluded = ($nextAttr == $currAttr)? ' OR ' : '';
							
						if($prevAttr != $currAttr) {
							$filterQuery .= ') AND (student.'.$currAttr.' = "'.$currAttrVal.'"'.$isOrIncluded;	
						} else {
							$filterQuery .= 'student.'.$currAttr.' = "'.$currAttrVal.'"'.$isOrIncluded;
						}

						continue;
					}

					$filterQuery .= $filter[0].' = "'.$filter[1].'"))';
				}
			}

			$this->db->query("SELECT users.*, student.* 
							  FROM student 
							  LEFT JOIN users 
							  ON student.id = users.id 
							  WHERE (student.id LIKE '%$target%' OR student.fname LIKE '%$target%' OR student.mname LIKE '%$target%' OR student.lname LIKE '%$target%' OR student.email LIKE '%$target%' OR student.fname LIKE '%$target%' OR student.course LIKE '%$target%' OR student.year LIKE '%$target%' OR student.section LIKE '%$target%' OR student.contact LIKE '%$target%') $filterQuery AND (users.approve = 0) ORDER BY student.$order[0] $order[1]");

			$result = $this->db->getAllResult();
			
			if(is_array($result) || is_object($result)) {
				return $result;
			}

			return false;
		}
	}

?>