<?php

	class Relays extends BaseModel {
		private $nodo_id, $status, $relay_id, $date;

		public function __construct(){
			$table = "relays";
			parent::__construct($table);
		}

		public function getId(){
			return $this->nodo_id;
		}	

		public function setId($id){
			$this->nodo_id = $id;
		}

		public function getStatus(){
			return $this->status;
		}

		public function setStatus($status){
			$this->status = $status;
		}

		public function getRelayId(){
			return $this->relay_id;
		}

		public function setRelayId($relay_id){
			$this->relay_id = $relay_id;
		}

		public function getDate(){
			return $this->date;
		}

		public function setDate($date){
			$this->date = $date;
		}

		public function save(){
			$query = "INSERT INTO `relays`(`nodo_id`, `status`, `relay_id`) VALUES ("
						.$this->nodo_id
						.$this->status
						.$this->relay_id
						.")";

			$save = $this->db()->query($query);
			return $save;
		}

		public function turnOn(){
			$query = "UPDATE `relays` SET `status`=1 WHERE nodo_id=$this->nodo_id AND relay_id=$this->relay_id";
			$this->db()->query($query);
			return $query;
		}

		public function turnOff(){
			$query = "UPDATE `relays` SET `status`=0 WHERE nodo_id=$this->nodo_id AND relay_id=$this->relay_id";
			$this->db()->query($query);
			return $query;
		}
	}

?>