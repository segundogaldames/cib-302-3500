<?php
class rolesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_view->titulo = 'Roles';
        #$this->_view->noticia = 'Primera Noticia';
        $this->_view->render('index');
    }
}
