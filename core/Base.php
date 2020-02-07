<?php
	class Base {
		private $table, $db, $connect;

		public function __construct($table) {
			$this->table = (string) $table;

			require_once 'ConnectDB.php';
			$this->connect = new Connect();
			$this->db = $this->connect->connection();
		}

		public function getConnection(){
			return $this->connect;
		}

		public function db() {
			return $this->db;
		}

		public function getAll() {
			$query = $this->db->query("SELECT * FROM $this->table");
			$resultSet = [];

			while($row = $query->fetch_object()){
				$resultSet[] = $row;
			}

			return $resultSet;
		}

		public function getById($id) {
			$query = $this->db->query("SELECT * FROM $this->table WHERE nodo_id='$id'");
			$resultSet = [];

			if ($row = $query->fetch_object()) {
				$resultSet = $row;
			}

			return $resultSet;
		}

		public function getBy($column, $value){
			$query = $this->db->query("SELECT * FROM $this->table WHERE $column = '$value'");
			$resultSet = [];

			while ($row = $query->fetch_object()) {
				$resultSet[] = $row;
			}

			return $resultSet;
		}

		public function getData($data, $column, $value){
			$query = $this->db->query("SELECT $data FROM $this->table WHERE $column = $value");
			$resultSet = [];

			while ($row = $query->fetch_object()) {
				$resultSet[] = $row;
			}

			return $resultSet;
		}

		public function deleteById($id){
			$query = $this->db->query("DELETE FROM $this->table WHERE nodo_id=$id");
			return $query;
		}

		public function deleteBy($column, $value){
			$query = $this->db->query("DELETE FROM $this->table WHERE $column='$value'");
			return $query;
		}

		public function update($column,$value,$filter,$filterVal){
			$query = $this->db->query("UPDATE $this->table SET $column='$value' WHERE $filter='$filterVal'");
			return $query;
		}
	}
?>