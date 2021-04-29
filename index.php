<?php
    //Reporte de errores, descomentar pra mostrar errores en pantalla

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "core/BaseModel.php";
    require_once "core/FrontControl.php";
    session_start();
    $indexControl = new FrontControl();
    var_dump($_SESSION);
    if(empty($_SESSION)){//Aqui va el login
	    $controllerObj = $indexControl->loadController("User");
	    $indexControl->Action($controllerObj);
    }
    else{
        if (isset($_GET["controller"])) {
	        $controllerObj = $indexControl->loadController($_GET["controller"]);
        }else{
	        $controllerObj = $indexControl->loadController(DEFAULT_CONTROLLER);
        }
        $indexControl->Action($controllerObj);
    }
?>
