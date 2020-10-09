<?php

	class Light extends BaseModel {
		private $nodo_id, $value, $date;

		public function __construct($db=NULL){
			$table = "light_sensor";
			if(is_null($db)){
                                parent::__construct($table);
                        }else{
                                
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
