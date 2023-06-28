<?php
class usuarioModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuarios()
    {
        $usuarios = $this->_db->query("SELECT u.id, u.rut, u.nombre, u.activo, r.nombre as rol FROM usuarios u INNER JOIN roles r ON u.rol_id = r.id ORDER BY id DESC");

        return $usuarios->fetchall();
    }

    public function getUsuarioId($id)
    {
        $usuario = $this->_db->prepare("SELECT u.id, u.rut, u.nombre, u.email, u.activo, u.rol_id, u.created_at, u.updated_at, r.nombre as rol FROM usuarios u INNER JOIN roles r ON u.rol_id = r.id WHERE u.id = ?");
        $usuario->bindParam(1, $id);
        $usuario->execute();

        return $usuario->fetch();
    }

    public function getUsuarioRut($rut)
    {

        $usuario = $this->_db->prepare("SELECT id FROM usuarios WHERE rut = ?");
        $usuario->bindParam(1, $rut);
        $usuario->execute();

        return $usuario->fetch();
    }

    public function getUsuarioEmailPassword($email, $password)
    {
        $password = Hash::getHash('sha512', $password, HASH_KEY);

        $usuario = $this->_db->prepare("SELECT u.id, u.nombre, u.email, r.nombre as rol FROM usuarios u INNER JOIN roles r ON u.rol_id = r.id WHERE u.email = ? AND u.password = ? AND u.activo = 1");
        $usuario->bindParam(1, $email);
        $usuario->bindParam(2, $password);
        $usuario->execute();

        return $usuario->fetch();
    }

    public function addUsuario($rut, $nombre, $email, $password, $rol)
    {
        $nombre = strtolower($nombre);
        $nombre = ucfirst($nombre);
        $password = Hash::getHash('sha512', $password, HASH_KEY);

        $usuario = $this->_db->prepare("INSERT INTO usuarios(rut, nombre, email, password, activo, rol_id, created_at, updated_at) VALUES(?, ?, ?, ?, 1, ?, now(), now())");
        $usuario->bindParam(1, $rut);
        $usuario->bindParam(2, $nombre);
        $usuario->bindParam(3, $email);
        $usuario->bindParam(4, $password);
        $usuario->bindParam(5, $rol);
        $usuario->execute();

        $row = $usuario->rowCount();
        return $row;
    }

    public function editUsuario($id, $rut, $nombre, $email, $activo, $rol)
    {
        $usuario = $this->_db->prepare("UPDATE usuarios SET rut = ?, nombre = ?, email = ?, activo = ?, rol_id = ?, updated_at = now() WHERE id = ?");
        $usuario->bindParam(1, $rut);
        $usuario->bindParam(2, $nombre);
        $usuario->bindParam(3, $email);
        $usuario->bindParam(4, $activo);
        $usuario->bindParam(5, $rol);
        $usuario->bindParam(6, $id);
        $usuario->execute();

        $row = $usuario->rowCount();
        return $row;
    }

    function editPassword($id, $password) 
    {
        $password = Hash::getHash('sha512', $password, HASH_KEY);

        $usuario = $this->_db->prepare("UPDATE uusuarios SET password = ? WHERE id = ?");
        $usuario->bindParam(1, $password);
        $usuario->bindParam(2, $id);
        $usuario->execute();

        $row = $usuario->rowCount();
        return $row;
    }
}