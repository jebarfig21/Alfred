<?php
require_once "core/BaseController.php";

	class RoomController extends BaseController {
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->view('ListRooms',array());
		}

		public function newRoom(){
			$this->view('NewRoom',array());
		}
	}

?>