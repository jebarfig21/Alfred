<?php
require_once "core/BaseController.php";

	class NodoController extends BaseController {
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$htmlString = $this->listAllNodes();
			$this->view('ListNodes',array("tableContent" => $htmlString));
		}

		public function listAllNodes(){
			$nodeObject = new Node();

			$nodes = $nodeObject->getAll();
			$rooms = $nodeObject->getRooms();
			$roomsJSON = json_encode($rooms);
			$htmlString = '';

			foreach ($nodes as $row) {

				$htmlString .= '<tr>';
				$htmlString .= '<td align = "center">'.$row->Room.'</td>';
				$htmlString .= '<td align = "center">'.$row->Alias.'</td>';
				$htmlString .= '<td align = "center"><button class="btn btn-success" onclick="reviewNode(\''.$row->nodo_id.'\',\''.$row->Alias.'\')">';
				$htmlString .= '<span class="fa fa-search"></span></button</td>';
				$htmlString .= '<td align = "center"><button class="btn btn-primary" onclick="updateNode(\''.$row->nodo_id.'\',\''.$row->Alias.'\',\''.htmlspecialchars($roomsJSON).'\')">';
				$htmlString .= '<span class="fa fa-cogs"></span></button</td>';
				$htmlString .= '<td align = "center"><button class="btn btn-danger" onclick="eraseNode(\''.$row->nodo_id.'\',\''.$row->Alias.'\')">';
				$htmlString .= '<span class="fa fa-minus-circle"></button</td>';
				$htmlString .= '</tr>';
			}
		return $htmlString;
		}
		public function newNode(){

			$nodeObject = new Node();
			$roomNames = $nodeObject->getRooms();
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

		public function reviewNode(){
			$data = json_decode($_POST['Data']);
			$id = $data->{"id"};
                        $humidityObject=new Humidity();
			$humidity = $humidityObject->getLastValueByNode($id);
			$db=$humidityObject->db();
			$lightObject=new Light($db);
			$light = $lightObject->getLastValueByNode($id); 
			$lightValues = $lightObject->getData("value","nodo_id",$id);
			$lightValues = $this->fromObjectArrayToValuesJSON($lightValues,"value");
			$lightDates  = $lightObject->getData("date","nodo_id",$id);
			$lightDates  = $this->fromObjectArrayToValuesJSON($lightDates,"date");
			$temperatureObject=new Temperature($db);
                        $temperature = $temperatureObject->getLastValueByNode($id); 
			$presenceObject= new Presence($db);
			$presence = $presenceObject->getLastValueByNode($id);
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
