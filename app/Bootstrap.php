<?php

class Bootstrap
{
    #esta funcion permite identificar el controlador, el metodo y los argumentos
    #asociados a una peticion web
    public static function run(Request $request)
    {
        $module = $request->getModule(); #llamando a una funcion llamada getModule
        $controller = $request->getController() . 'Controller';
        $method = $request->getMethod();
        $args = $request->getArgs();

        #validando los elementos
        if ($module) {
            $routeModule = ROOT . 'controllers' . DS . $module . 'Controller.php';

            if (is_readable($routeModule)) {
                require_once $routeModule;
                $routeController = ROOT .'modules' . DS . $module . DS . 'controllers' . DS . $controller . '.php';
            }else{
                header('Location: ' . BASE_URL . 'error/error');
            }
        }else{
            $routeController = ROOT . 'controllers' . DS . $controller . '.php';
        }

        if (is_readable($routeController)) {
            require_once $routeController;

            $controller = new $controller;

            if (is_callable(array($controller, $method))) {
                $method = $request->getMethod();
            }else{
                header('Location: ' . BASE_URL . 'error/error');
            }

            if (isset($args)) {
                call_user_func_array(array($controller, $method), $args);
            }else{
                call_user_func(array($controller, $method));
            }
        }else{
            header('Location: ' . BASE_URL . 'error/error');
        }
    }
}
