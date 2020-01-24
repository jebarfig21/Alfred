<?php
require_once "core/BaseController.php";
require_once "model/Node.php";

	class RoomController extends BaseController {
		private $nodeObject;

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$nodeObject = new Node();

			$rooms = $nodeObject->getRooms();
			$htmlString = '';

			foreach ($rooms as $row) {
				$numNodes = count($nodeObject->getBy('Room', $row->Room));

				$htmlString .= '<tr>';
				$htmlString .= '<td align = "center">'.$row->Room.'</td>';
				$htmlString .= '<td align = "center">'.$numNodes.'</td>';
				$htmlString .= '<td align = "center"><button class="btn btn-success" onclick="reviewRoom(\''.$row->Room.'\')">';
				$htmlString .= '<span class="fa fa-search"></span></button</td>';
				$htmlString .= '<td align = "center"><button class="btn btn-primary" onclick="updateRoom(\''.$row->Room.'\')">';
				$htmlString .= '<span class="fa fa-cogs"></span></button</td>';
				$htmlString .= '<td align = "center"><button class="btn btn-danger" onclick="eraseRoom(\''.$row->Room.'\')">';
				$htmlString .= '<span class="fa fa-minus-circle"></button</td>';
				$htmlString .= '</tr>';
			}

			$this->view('ListRoom',array("tableContent" => $htmlString));
		}

		public function newRoom(){
			$this->view('NewRoom',array());
		}

		public function saveRoom(){
			if(isset($_POST['Data'])){
				$newRoom = json_decode($_POST['Data']);
				$roomName = $newRoom->{"name"};
				$nodeObject = new Node();

				$nodeObject->setRoom($roomName);

				if (count($nodeObject->getBy('Room',$roomName)) == 0){
					foreach ($newRoom->{"nodes"} as $alias) {
						$nodeObject->setAlias($alias);
						$nodeObject->save();
					}
				echo 'Se ha guardado correctamente';

				}else{
					echo 'El cuarto ya existe';
				}			

			} else {
				echo LOSE_INFO;
			}
		}

		public function eraseRoom(){
			$newRoom = json_decode($_POST['Data']);
			$roomName = $newRoom->{"name"};
			$nodeObject = new Node();

			$nodeObject->deleteBy('Room',$roomName);

			echo 'Se elimino correctamente';
		}

		public function getNodesByRoom(){
			$Room = json_decode($_POST['Data']);
			$roomName = $Room->{"name"};
			$nodeObject = new Node();

			$nodes = $nodeObject->getBy('Room',$roomName);

			echo json_encode($nodes);
		}

		public function updateRoom(){
			$Room = json_decode($_POST['Data']);
			$roomName = $Room->{"name"};
			$nodeObject = new Node();

			$nodeObject->updateBy('Room',$roomName);

			echo 'Se elimino correctamente';
		}

	}

?>