<?php

	class Humidity extends BaseModel {
		private $nodo_id, $value, $date;

		public function __construct(){
			$table = "humidity_sensor";
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
