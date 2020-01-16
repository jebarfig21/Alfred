<?php
    require_once "core/Base.php";

    require_once "core/BaseModel.php";

    require_once "core/FrontControl.php";

    $indexControl = new FrontControl();

    if (isset($_GET["controller"])) {
    	$controllerObj = $indexControl->loadController($_GET["controller"]);
    }else{
    	$controllerObj = $indexControl->loadController(DEFAULT_CONTROLLER);
    }
    $indexControl->Action($controllerObj);
?>