<?php

	class Temperature extends BaseModel {
		private $medicion_id, $nodo_id, $value, $date;

		public function __construct(){
			$table = "temperature_sensor";
			parent::__construct($table);
		}

		public function getId(){
			return $this->medicion_id;
		}

		public function setId($id){
			$this->medicion_id = $id;
		}
                 public function getNodeId(){
                        return $this->nodo_id;
                }

		 public function tempValue(){
                        return $this->value;
                }

 		public function getDate(){
                        return $this->date;
                }




	}

?>
