<?php

class indexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_view->titulo = 'Página de Bienvenida';
        $this->_view->noticia = 'Primera Noticia';
        $this->_view->render('index');
    }
}
