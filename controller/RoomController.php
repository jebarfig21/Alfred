<?php
require_once "core/BaseController.php";
require_once "model/Node.php";

	class RoomController extends BaseController {
		private $nodeObject;

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->view('ListRooms',array());
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

				foreach ($newRoom->{"nodes"} as $alias) {
					$nodeObject->setAlias($alias);
					$nodeObject->save();
				}

			} else {
				echo LOSE_INFO;
			}
		}
	}

?>