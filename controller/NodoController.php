<?php
require_once "core/BaseController.php";

	class NodoController extends BaseController {
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$nodo = new Nodo();
			$this->view('Dashboard',array(
				"NodesData" => "hola"));
		}
	}

?>