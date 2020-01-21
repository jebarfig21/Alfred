<?php

	class NodeData extends BaseModel {
		private $id, $lightSensor, $movement, $lightActivate, $temp, $humidity;

		public function __construct(){
			$table = "nodos";
			parent::__construct($table);
		}

		public function getId(){
			return $this->id;
		}	

		public function getLightSensor(){
			return $this->lightSensor;
		}

		public function getMovement(){
			return $this->movement;
		}

		public function getLightActivate(){
			return $this->lightActivate;
		}

		public function getTemp(){
			return $this->temp;
		}

		public function getHumidity(){
			return $this->humidity;
		}

		public function ActivateLight($value){
			$this->lightActivate = $value;
		}
	}

?>