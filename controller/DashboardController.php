<?php
require_once "core/BaseController.php";

	class DashboardController extends BaseController {
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->view('Dashboard',array(
				"NodesData" => "hola"));
		}
	}

?>