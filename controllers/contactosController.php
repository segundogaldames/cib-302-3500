<?php

class contactosController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_view->titulo = 'Contactos';
        $this->_view->asunto = 'Página de Contacto';
        $this->_view->render('index');
    }
}
