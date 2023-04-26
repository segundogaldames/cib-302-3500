<?php

class View
{
    private $_controller;
    private $_js;

    public function __construct(Request $request )
    {
        $this->_controller = $request->getController();
        $this->_js = array();
    }

    public function render ($view, $item = false)
    {
        $menu = array (
            array (
                'id' => 'inicio',
                'titulo' => 'inicio',
                'enlace' => BASE_URL
            ),
            array (
                'id' => 'post',
                'titulo' => 'Post',
                'enlace' => BASE_URL . 'post'
            )
        );

        if(Session::get('autenticado')){
            $menu[] = array (
                'id' => 'login',
                'titulo' => 'Cerrar Sesion',
                'enlace' => BASE_URL . 'login/cerrar'
            );
        }
        else{
            $menu[] = array (
                'id' => 'login',
                'titulo' => 'Iniciar Sesion',
                'enlace' => BASE_URL . 'login'
            );
            $menu[] = array (
                'id' => 'registro',
                'titulo' => 'Registrar Usuario',
                'enlace' => BASE_URL . 'registro'
            );
        }

        $js = array();

        if(count($this->_js))
        {
            $js = $this->_js;
        }

        $_layoutParams = array(
            'ruta_css' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
            'ruta_img' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
            'ruta_js' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            'menu' => $menu,
            'js' => $js,
            'root' => BASE_URL

        );


        $rutaView = ROOT . 'views' . DS . $this->_controller . DS . $view . '.php';

        //para luego probar
        //$template = file_get_contents($rutaView);
        //var_dump($template);
        //print $template;

        if(is_readable($rutaView))
        {

            include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header.php';
            include_once $rutaView;
            include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'footer.php';
        }
        else
        {
            throw new Exception('Error de vista');
        }
    }

    public function setJs(array $js)
    {
        if(is_array($js) && count($js))
        {
            for ($i=0; $i < count($js); $i++)
            {
                $this->_js[] = BASE_URL . 'views/' . $this->_controlador . '/js/' . $js[$i] . '.js';

            }
        } else{
            throw new Exception('Error de js');
        }
    }

}
?>