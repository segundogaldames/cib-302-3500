<?php

class Request
{
    #declaracion de atributos
    private $_module;
    private $_controller;
    private $_method;
    private $_arguments;
    private $_modules;

    public function __construct(){
        #sanitizar la url
        if (isset($_GET['url'])) {
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $url = array_filter($url); #eliminar elementos no validos

            $this->_module = strtolower(@array_shift($url));

            if (!$this_module) {
                $this->_module = false;
            }else{
                if (is_countable($this_modules)) {
                    if (!in_array($this->_module, $this->_modules)) {
                        $this->_controller = $this->_module;
                        $this->_module = false;
                    }else{
                        $this->_controller = strtolower(@array_shift($url));

                        if (!$this->_controller) {
                            $this->_controller = 'index';
                        }
                    }
                }
            }

            $this->_method = strtolower(@array_shift($url));
            $this->_arguments = $url;
        }

        #validamos la existencia de los elementos de la url
        if (!$this->_controller) {
            $this->_controller = DEFAULT_CONTROLLER;
        }

        if (!$this_method) {
            $this->_method = 'index';
        }

        if (!isset($this->_arguments)) {
            $this->_arguments = array();
        }
    }

    public function getModule(){
        return $this->_module;
    }

    public function getController(){
        return $this->_controller;
    }

    public function getMethod(){
        return $this->_method;
    }

    public function getArgs(){
        return $this->_arguments;
    }
}
