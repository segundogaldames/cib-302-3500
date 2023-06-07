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
        $this->_view->send = CTRL;
        $this->_view->process = "roles/store";
        $this->_view->render('create');
    }

    public function store()
    {
        if($this->getPostParam('send') != CTRL)
        {
            throw new Exception('Acceso no permitido');
        }

        if (!$this->getTexto('nombre')) {
            Session::set('msg_error','Debe ingresar el nombre del rol');
            $this->redireccionar('roles/create');
        }

        #verificar que el rol no exista
        $rol = $this->_rol->getRolNombre($this->getTexto('nombre'));

        if($rol){
            Session::set('msg_error','El rol ingresado ya existe... intente con otro');
            $this->redireccionar('roles/create');
        }

        $rol = $this->_rol->addRol($this->getTexto('nombre'));

        if($rol){
            Session::set('msg_success','El rol se ha registrado correctamente');
            $this->redireccionar('roles');
        }
    }

    public function edit($id = null)
    {
        $this->_view->titulo = 'Roles';
        $this->_view->send = CTRL;
        $this->_view->rol = $this->_rol->getRolId($this->filtrarInt($id));
        $this->_view->process = "roles/update/{$id}";
        $this->_view->render('edit');
    }

    public function update($id = null)
    {
        if($this->getPostParam('_method') != 'PUT')
        {
            throw new Exception('Acceso no permitido');
        }

        if (!$this->getTexto('nombre')) {
            Session::set('msg_error','Debe ingresar el nombre del rol');
            $this->redireccionar('roles/edit/' . $id);
        }

        #verificar que el rol no exista

        $rol = $this->_rol->editRol($this->filtrarInt($id), $this->getTexto('nombre'));

        if($rol){
            Session::set('msg_success','El rol se ha modificado correctamente');
            $this->redireccionar('roles/show/' . $id);
        }
    }
}
