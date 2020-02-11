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
			$Room = json_decode($_POST['Data']);
			$id = $Room->{"id"};
			$value = $Room->{"value"};	
			$nodeObject = new Node();

			$nodeObject->update('Alias',$value, 'nodo_id', $id);

			echo 'Se modificó correctamente';
		}

		public function reviewNode(){
			$data = json_decode($_POST['Data']);
			$id = $data->{"id"};
			$this->view('reviewNodo', array("node_id" => $id));
		}

	}

?>