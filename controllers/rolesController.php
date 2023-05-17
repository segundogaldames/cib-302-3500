<?php
class rolesController extends Controller
{
    private $_rol;

    public function __construct()
    {
        parent::__construct();
        $this->_rol = $this->loadModel('rol');
    }

    public function index()
    {
        $this->_view->titulo = 'Roles';
        $this->_view->roles = $this->_rol->getRoles();
        $this->_view->render('index');
    }

    public function show($id = null)
    {
        $this->_view->titulo = 'Roles';
        $this->_view->rol = $this->_rol->getRolId($this->filtrarInt($id));
        $this->_view->render('show');
    }

    public function create()
    {
        $this->_view->titulo = 'Roles';
        $this->_view->render('create');
    }
}
