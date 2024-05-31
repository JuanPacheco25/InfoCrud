<?php
class AuthModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function obtenerUsuarioPorNombre($usuario) {
        $sentencia = $this->db->prepare('SELECT * FROM login_users WHERE user_name = ?');
        $sentencia->execute([$usuario]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function registrarUsuario($usuario, $correo, $departamento, $password_hashed) {
        $sentencia = $this->db->prepare("INSERT INTO login_users (user_name, email_user, deparment_user, password_user) VALUES (?, ?, ?, ?)");
        return $sentencia->execute([$usuario, $correo, $departamento, $password_hashed]);
    }
}
?>
