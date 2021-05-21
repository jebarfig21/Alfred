<?php
require_once "core/BaseController.php";

	class NodoController extends BaseController {
		private $nodeObject;
		public function __construct(){
			parent::__construct();
 			$this->nodeObject = new Node();
		}

		public function index(){

        }

		public function listAllNodes(){
			$listNodes = $this->nodeObject->getAll();
			$rooms = $this->nodeObject->getRooms();
			$roomsJSON = json_encode($rooms);
			$this->view('ListNodes',array("nodes" => $listNodes, "rooms"=>$roomsJSON));
		}

		public function newNode(){

			//$nodeObject = new Node();
			$roomNames = $this->nodeObject->getRooms();
			$roomNamesHTML = '';

			foreach ($roomNames as $row) {
				$roomNamesHTML .= "<option>".$row->Room."</option>";
			}
			$this->view('NewNodo',array("comboRoom" => $roomNamesHTML));

		}

		public function eraseNode(){
			$nodeData = json_decode($_POST['Data']);
			$nodoID = $nodeData->{"id"};
			$nodeObject = new Node();

			$nodeObject->deleteById($nodoID);

			echo 'Se elimino correctamente';
		}

		public function updateNode(){
			$Nodo = json_decode($_POST['Data']);
			$nodeObject = new Node();
			$id = $Nodo->{"id"};
			$value = $Nodo->{"value"};
			$room = $Nodo->{"room"};
			if($room==NULL){
				$room = $nodeObject->getById($id)->Room;
			}

			$query=$nodeObject->update(array('Alias','Room'),array($value,$room),'nodo_id', $id);

			if($query){
				echo 'Se modificó correctamente';
			}else{
				echo 'No se pudo modificar el Nodo';
			}
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
		    json_decode($data);
		    var_dump($data);die();
		    //$values = $this->nodeObject->getValuesByDates($id,$tipo,$from,$to);
			//echo($values);
            //return json_encode($values);
		}
	}

?>
