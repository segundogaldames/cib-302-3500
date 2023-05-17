<?php
class rolModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getRoles()
    {
        $roles = $this->_db->query("SELECT id, nombre FROM roles ORDER BY id DESC");
        return $roles->fetchall();
    }

    public function getRolId($id)
    {
        $rol = $this->_db->prepare("SELECT id, nombre, created_at, updated_at FROM roles WHERE id = ?");
        $rol->bindParam(1, $id);
        $rol->execute();

        return $rol->fetch();
    }

    public function addRol($nombre)
    {
        $rol = $this->_db->prepare("INSERT INTO roles(nombre, created_at, updated_at) VALUES(?, now(), now())");
        $rol->bindParam(1, $nombre);
        $rol->execute();

        $row = $rol->rowCount();
        return $row;
    }
}