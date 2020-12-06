<?php
require_once "core/BaseController.php";

	class MedicionController extends BaseController {
		private $medicion;

		public function __construct(){
			parent::__construct();
			$this->medicion= new Medicion();
		}

		public function index(){

		}

		public function reviewNode(){
			$data = json_decode($_POST['Data']);
			$id = $data->{"id"};
			$humidity = $this->medicion->getLastValueByNode($id,"humedad");
			$light = $this->medicion->getLastValueByNode($id,"luminosidad"); 
			$lightValues = $this->medicion->getData("value","nodo_id",$id);
			$lightValues = $this->fromObjectArrayToValuesJSON($lightValues,"value");
			$lightDates  = $this->medicion->getData("date","nodo_id",$id);
			$lightDates  = $this->fromObjectArrayToValuesJSON($lightDates,"date");
			$temperature = $this->medicion->getLastValueByNode($id,"temperatura"); 
			$presence = $this->medicion->getLastValueByNode($id,"presence");
			$this->view('reviewNodo', array("node_id" => $id,
							"light"=>$light,
							"humidity"=>$humidity,
							"temperature"=>$temperature,
							"presence"=>$presence,
							"lightValues"=>$lightValues,
							"lightDates"=>$lightDates));

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
			echo("hola desde getValuesFromDateo");
                       return json_encode("Funciona la función");
		}
	}


?>
