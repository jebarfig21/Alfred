<?php
require_once "core/BaseController.php";

	class NodoController extends BaseController {
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$nodeObject = new Node();

			$nodes = $nodeObject->getAll();
			$htmlString = '';

			foreach ($nodes as $row) {

				$htmlString .= '<tr>';
				$htmlString .= '<td align = "center">'.$row->Room.'</td>';
				$htmlString .= '<td align = "center">'.$row->Alias.'</td>';
				$htmlString .= '<td align = "center"><button class="btn btn-success" onclick="reviewNode(\''.$row->nodo_id.'\',\''.$row->Alias.'\')">';
				$htmlString .= '<span class="fa fa-search"></span></button</td>';
				$htmlString .= '<td align = "center"><button class="btn btn-primary" onclick="updateNode(\''.$row->nodo_id.'\',\''.$row->Alias.'\')">';
				$htmlString .= '<span class="fa fa-cogs"></span></button</td>';
				$htmlString .= '<td align = "center"><button class="btn btn-danger" onclick="eraseNode(\''.$row->nodo_id.'\',\''.$row->Alias.'\')">';
				$htmlString .= '<span class="fa fa-minus-circle"></button</td>';
				$htmlString .= '</tr>';
			}
			$this->view('ListNodes',array("tableContent" => $htmlString));
		}

		public function newNode(){
			$nodeObject = new Node();
			$roomNames = $nodeObject->getRooms();
			$htmlString = '';

			foreach ($roomNames as $row) {
				$htmlString .= "<option>".$row->Room."</option>";
			}
			$this->view('newNodo',array("comboRoom" => $htmlString));
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
			$id = $Nodo->{"id"};
			$value = $Nodo->{"value"};
			$nodeObject = new Node();

			$query=$nodeObject->update(array('Alias'),array($value),'nodo_id', $id);
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
			$temperatureObject=new Temperature($db);
                        $temperature = $temperatureObject->getLastValueByNode($id); 
			$presenceObject= new Presence($db);
			$presence = $presenceObject->getLastValueByNode($id);
			$this->view('reviewNodo', array("node_id" => $id,"light"=>$light,"humidity"=>$humidity,"temperature"=>$temperature,"presence"=>$presence));
		
		}

	}

?>
