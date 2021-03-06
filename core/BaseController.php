<?php

	class BaseController{

		public function __construct(){
			require_once 'Base.php';
			require_once 'BaseModel.php';

			foreach (glob("model/*.php") as $file) {
				require_once $file;
			}
		}

		public function view($view, $data){
			foreach ($data as $id_assoc => $value) {
				${$id_assoc}=$value;
			}

			require_once 'view/'.$view.'View.php';
		}

		public function redirect($controller, $action){
			require_once 'FrontControl.php';
			$helper = new FrontControl();
			header('Location:'.$helper->url($controller,$action));
		}
	}

?>