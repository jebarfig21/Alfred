<?php

	class Humidity extends BaseModel {
		private $nodo_id, $value, $date;

		public function __construct($db = NULL){
			$table = "humidity_sensor";
			if(is_null($db)){
				parent::__construct($table);
			}else{
				var_dump($db);
				parent::__construct($table,$db);
				
			}

		}

		public function getId(){
			return $this->nodo_id;
		}	

		public function setId($id){
			$this->nodo_id = $id;
		}
                
                



	}

?>
