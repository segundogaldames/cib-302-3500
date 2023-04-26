<?php

#configura al sistema para mostrar errores en tiempo de ejecucion
ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'app' . DS);

try{
    require_once APP_PATH . 'Config.php';
    require_once APP_PATH . 'Request.php';
    require_once APP_PATH . 'Bootstrap.php';
    require_once APP_PATH . 'Controller.php';
    #require_once APP_PATH . 'Model.php';
    require_once APP_PATH . 'View.php';
    #require_once APP_PATH . 'Registro.php';
    require_once APP_PATH . 'Database.php';
    require_once APP_PATH . 'Session.php';
    #require_once APP_PATH . 'Hash.php';

    Session::init();

    Bootstrap::run(new Request);
}
catch(Exception $e){
    echo $e->getMessage();
}

?>