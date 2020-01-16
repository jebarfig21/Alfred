<?php
	 
	class BaseModel extends Base{
		private $table;

		public function __construct($table){
			$this->table = (string)$table;
			parent::__construct($table);

		}

		
		public function executeSql($query){
			$query = $this->db->query($query);

			if($query){
				if ($query->num_rows > 0) {
					while ($row = $query->fetch_object()) {
						$resultSet[] = $row;
					}
				}
			}

			return $resultSet;
		}

	}

?>