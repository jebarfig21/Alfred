<?php
	class Base {
		private $table, $db, $connect;

		public function __construct($table) {
			$this->table = (string) $table;

			require_once 'ConnectDB.php';
			$this->connect = new Connect();
			$this->db = $this->connect->connection;
		}

		public function getConnection(){
			return $this->connect;
		}

		public function db() {
			return $this->db;
		}

		public function getAll() {
			$query = $this->db->query("SELECT * FROM $this->$table ORDER BY id DESC");

			while($row = $query->fetch_object()){
				$resultSet[] = $row;
			}

			return $resultSet;
		}

		public function getById($id) {
			$query = $this->db->query("SELECT * FROM $this->table WHERE id=$id");

			if ($row = $query->fetch_object()) {
				$resultSet = $row;
			}

			return $resultSet;
		}

		public function getBy($column, $value){
			$query = $this->db->query("SELECT * FROM $this->table WHERE $column = '$value'");

			while ($row = $query->fetch_object()) {
				$resultSet[] = $row;
			}

			return $resultSet;
		}

		public function getData($data, $column, $value){
			$query = $this->db->query("SELECT $data FROM $this->table WHERE $column = $value");

			while ($row = $query->fetch_object()) {
				$resultSet[] = $row;
			}

			return $resultSet;
		}

		public function deleteById($id){
			$query = $this->db->query("DELETE FROM $this->table WHERE id=$id");
			return $query;
		}

		public function deleteBy($column, $value){
			$query = $this->db->query("DELETE FROM $this->table WHERE $column='$value'");
			return $query;
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