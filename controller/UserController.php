<?php
require_once "core/BaseController.php";
require_once "model/User.php";

	class UserController extends BaseController {
		private $userObject;

		public function __construct(){
			parent::__construct();
		}

		public function index(){
		    //echo("Index de user");
            $this->view('Login',array());		
		}


        /**
        *I need to remove this
        */
		public function newRoom(){
			$listRooms = $this->getAllRooms();
			$this->view('NewRoom',array('roomList'=>$listRooms));
		}

		/**
		*Valid an existing user
		*/
		public function login(){
			if(isset($_POST['Data'])){
				$user = json_decode($_POST['Data']);
				$userEmail = $user->{"email"};
				$userPassword = $user->{"password"};
		    }
		}

		/*
        *Create new User
		*/
        public function signin(){
			if(isset($_POST['Data'])){
				$user = json_decode($_POST['Data']);
				$userEmail = $user->{"email"};
				$userPassword = $user->{"password"};
		    }
	    }
}
?>
