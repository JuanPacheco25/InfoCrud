<?php 
session_start();
include_once '../../config/conexion.php';
include_once '../model/AuthModel.php'; 

$usuario = $_POST['txtUsu'];
$correo = $_POST['txtCorreo']; 
$departamento = $_POST['txtDe'];
$password = $_POST['txtPass'];


if(empty($usuario) || empty($correo) || empty($departamento) || empty($password)){
    header('Location: ../views/login.php?error=empty_fields');
    exit();
}

$password_hashed = password_hash($password, PASSWORD_DEFAULT);

$authModel = new AuthModel($bd); 

$resultado = $authModel->registrarUsuario($usuario, $correo, $departamento, $password_hashed);


if ($resultado === FALSE) {
    header('Location: ../views/login.php');
} elseif ($resultado) {
    $_SESSION['nombre'] = $usuario; 
    header('Location: ../index.php');
    exit();
}
?>
