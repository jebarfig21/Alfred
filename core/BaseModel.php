<?php
	 
	class BaseModel extends Base{
		private $table;

		public function __construct($table, $db=NULL){
			$this->table = (string)$table;
			if(is_null($db)){
				parent::__construct($table);
			}else{
				
				parent::__construct($table,$db);
			}

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
