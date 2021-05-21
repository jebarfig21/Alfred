<?php

require_once "core/BaseController.php";

	class DashboardController extends BaseController {
		public function __construct(){
			parent::__construct();
		}
        //Se envia a la vista del Dashboard, es la pagina inicial del proyecto
		public function index(){
			$this->view('Dashboard');
		}
	}

?>
