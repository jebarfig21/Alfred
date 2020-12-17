<?php

	class FrontControl {
		public function __construct(){
			require_once 'config/global.php';
		}

		public function url($controller=DEFAULT_CONTROLLER, $action=DEFAULT_ACTION){
			$newUrl = 'index.php?controller='.$controller.'&action='.$action;
			return $newUrl;
		}

		public function loadController($controller){
			$controllerName = ucwords($controller).'Controller';
			$controllerPath = 'controller/'.$controllerName.'.php';

			if (!is_file($controllerPath)) {
				$controllerPath = 'controller/'.ucwords(DEFAULT_CONTROLLER).'Controller.php';
			}

			require_once $controllerPath;

			$controllerObj = new $controllerName();
			return $controllerObj;
		}

		public function loadAction($controllerObj, $action) {
			$controllerObj->$action();
		}

		public function Action($controllerObj){
			if (isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])) {
				$this->loadAction($controllerObj, $_GET["action"]);
			} else {
				$this->loadAction($controllerObj, DEFAULT_ACTION);
			}
		}
	}

?>
