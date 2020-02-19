<?php

	class Temperature extends BaseModel {
		private $nodo_id, $temp_value, $date;

		public function __construct(){
			$table = "temperature_sensor";
			parent::__construct($table);
		}

		public function getId(){
			return $this->nodo_id;
		}	

		public function setId($id){
			$this->nodo_id = $id;
		}

	}

?>