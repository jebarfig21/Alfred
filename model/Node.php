<?php

class Node extends BaseModel {
	private $nodo_id, $room, $alias;

	public function __construct(){
		$table = "nodes";
		parent::__construct($table);
	}

	public function getId(){
		return $this->nodo_id;
	}

	public function getRoom(){
		return $this->room;
	}

	public function getAlias(){
		return $this->alias;
	}

	public function setRoom($room){
		$this->room = $room;
	}

	public function setAlias($alias){
		$this->alias = $alias;
	}

	public function save(){
		$query = "INSERT INTO `nodes`(`Room`, `Alias`) VALUES ('"
		.$this->room."','"
		.$this->alias."')";

		$save = $this->db()->query($query);

		return $save;
	}

	public function getRooms(){
		$query = $this->db()->query("SELECT DISTINCT Room FROM nodes");
		$resultSet = [];

		while($row = $query->fetch_object()){
			$resultSet[] = $row;
		}

		return $resultSet;

	}
}

?>