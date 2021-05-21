<?php
require_once "core/BaseController.php";

	class MedicionController extends BaseController {
		private $medicion;

		public function __construct(){
			parent::__construct();
			$this->medicion= new Medicion();
		}

		public function fromObjectArrayToValuesJSON($objArray,$value){
            $valueArr = array();
			for($i = 0;$i<count($objArray);$i++){
				array_push($valueArr,$objArray[$i]->$value);
			}
			return json_encode($valueArr);
		}

		public function getLast($arr){
			$arr_len = count($arr);
			return $arr[$arr_len-2];
		}

		public function getValuesFromDate(){
            return json_encode("Funciona la función");
		}
	}
?>
