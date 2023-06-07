<?php
class usuarioModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUusuarios()
    {
        $usuarios = $this->_db->query("SELECT u.id, u.run, u.nombre, u.activo, r.nombre as rol FROM usuarios u INNER JOIN roles r ON u.rol_id = r.id ORDER BY id DESC");
        return $usuarios->fetchall();
    }

    public function getUsuarioId($id)
    {
        $usuario = $this->_db->prepare("SELECT u.id, u.run, u.nombre, u.email, u.activo, u.created_at, u.updated_at, r.nombre as rol FROM usuarios u INNER JOIN roles r ON u.rol_id = r.id WHERE u.id = ?");
        $usuario->bindParam(1, $id);
        $usuario->execute();

        return $usuario->fetch();
    }

    public function getUsuarioRun($run)
    {

        $usuario = $this->_db->prepare("SELECT id FROM usuarios WHERE nombre = ?");
        $usuario->bindParam(1, $run);
        $usuario->execute();

        return $usuario->fetch();
    }

    public function addUsuario($run, $nombre, $email, $password, $rol)
    {
        $nombre = strtolower($nombre);
        $nombre = ucfirst($nombre);

        $usuario = $this->_db->prepare("INSERT INTO usuarios(run, nombre, email, password, activo, rol_id, created_at, updated_at) VALUES(?, ?, ?, ?, 1, ?, now(), now())");
        $usuario->bindParam(1, $run);
        $usuario->bindParam(2, $nombre);
        $usuario->bindParam(3, $email);
        $usuario->bindParam(4, $password);
        $usuario->bindParam(5, $rol);
        $usuario->execute();

        $row = $usuario->rowCount();
        return $row;
    }

    public function editRol($id, $nombre)
    {
        $rol = $this->_db->prepare("UPDATE roles SET nombre = ?, updated_at = now() WHERE id = ?");
        $rol->bindParam(1, $nombre);
        $rol->bindParam(2, $id);
        $rol->execute();

        $row = $rol->rowCount();
        return $row;
    }
}