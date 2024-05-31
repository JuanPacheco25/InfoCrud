<?php

if (!isset($_POST['oculto'])) {
    header("Location: ../index.php"); 
    exit(); 
}

include '../../config/conexion.php'; 
include '../model/UsuarioModel.php'; 

$usuario_id2 = $_POST['Usuario_id2'];
$usuario2 = $_POST['Usuario2'];
$correo2 = $_POST['Correo2'];
$departamento2 = $_POST['Departamento2'];

$usuarioModel = new UsuarioModel($bd); 

$resultado = $usuarioModel->actualizarUsuario($usuario_id2, $usuario2, $correo2, $departamento2);

if ($resultado) {
    header("Location: ../index.php");
    exit();
} else {
    echo "Error al actualizar los datos.";
}
?>


