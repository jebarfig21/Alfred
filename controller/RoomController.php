<?php
require_once "core/BaseController.php";
require_once "model/Node.php";

	class RoomController extends BaseController {
		private $nodeObject;

		public function __construct(){
			parent::__construct();
		}

		public function index(){
		}

		public function listAllRooms(){
			$nodeObject = new Node();
			$rooms = $nodeObject->getRooms();
			$numNodes = array();
			foreach($rooms as $row){
				$row->numNodes = count($nodeObject->getBy('Room', $row->Room));

			}

			$this->view('ListRoom',array("rooms" => $rooms));

		}

		public function getAllRooms(){
			$nodeObject = new Node();
                        $rooms = $nodeObject->getRooms();
			$listRooms = '<ul class="list-group">';

			foreach ($rooms as $row) {
				$listRooms .= '<li class="list-group-item">'.$row->Room.'</li>';
			 }
			$listRooms .= '</ul>';
			return $listRooms;
		}


		public function newRoom(){
			$listRooms = $this->getAllRooms();
			$this->view('NewRoom',array('roomList'=>$listRooms));
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

		public function appendToRoom(){
			if(isset($_POST['Data'])){
				$newRoom = json_decode($_POST['Data']);
				$roomName = $newRoom->{"name"};
				$nodeObject = new Node();

				$nodeObject->setRoom($roomName);
				foreach ($newRoom->{"nodes"} as $alias) {
					$nodeObject->setAlias($alias);
					$nodeObject->save();
				}
				echo 'Se ha guardado correctamente';
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
			$ids = $Room->{"id"};
			$values = $Room->{"values"};	
			$nodeObject = new Node();

			for ($i=0; $i < count($ids) ; $i++) { 
				$result = $nodeObject->update('Alias',$values[$i], 'nodo_id', $ids[$i]);
			}
			echo 'Se modificó correctamente';
		}

		public function reviewRoom(){
			$room = $_GET['Data'];

			$nodeObject = new Node();


			$this->view('ReviewRoom',array());
		}

	}

?>
