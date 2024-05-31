<?php
class UsuarioModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertarUsuario($usuario, $correo, $departamento) {
        $sentencia = $this->db->prepare("INSERT INTO usuario (usuario_nombre, usuario_email, usuario_departamento) VALUES (?, ?, ?)");
        return $sentencia->execute([$usuario, $correo, $departamento]);
    }

    public function eliminarUsuario($codigo) {
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE usuario_id = ?");
        return $sentencia->execute([$codigo]);
    }

    public function actualizarUsuario($usuario_id, $usuario, $correo, $departamento) {
        $sentencia = $this->db->prepare("UPDATE usuario SET usuario_nombre = ?, usuario_email = ?, usuario_departamento = ? WHERE usuario_id = ?");
        return $sentencia->execute([$usuario, $correo, $departamento, $usuario_id]);
    }

}
?>


