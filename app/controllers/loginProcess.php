<?php
session_start();
include_once '../../config/conexion.php';
include_once '../model/AuthModel.php'; 

$usuario = $_POST['txtUsu'];
$password = $_POST['txtPass'];

if (empty($usuario) || empty($password)) {
    header('Location: ../views/login.php?error=empty_fields');
    exit();
}

$authModel = new AuthModel($bd); 
$datos = $authModel->obtenerUsuarioPorNombre($usuario);

if ($datos === FALSE) {
    header('Location: ../views/login.php?error=user_not_found');
    exit();
} else {
    if (password_verify($password, $datos->password_user)) {
        $_SESSION['nombre'] = $datos->user_name;
        header('Location: ../index.php');
        exit();
    } else {
        header('Location: ../views/login.php?error=incorrect_password');
        exit();
    }
}
?>
