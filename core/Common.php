<?php

function load_app()
{
    // require file config
    $config = require BASE_PATH."/config/config.php";

    // require core_controller, base_controller
    require BASE_PATH."/core/Core_Controller.php";
    require BASE_PATH."/core/Base_Controller.php";
    require BASE_PATH."/core/Core_Model.php";
    require BASE_PATH."/core/Base_Model.php";
    
    // lấy module và action
    $module = (isset($_GET["module"])) ? $_GET["module"] : $config["default_module"];
    $action = (isset($_GET["action"])) ? $_GET["action"] : $config["default_action"];

    $controller_name = ucfirst($module)."_Controller";
    $controller_path = APP_PATH."/controllers/".$controller_name.".php";

    if(!file_exists($controller_path))
    {
        echo "Controller not found";
    }

    require $controller_path;

    if(!class_exists($controller_name))
    {
        echo "Class not found";
    }

    // tạo đối tượng thông qua controller
    $object = new $controller_name;

    if(!method_exists($object, $action))
    {
        echo "Method not found";
    }

    $object->$action();
}