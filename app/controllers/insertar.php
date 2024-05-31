<?php
if (!isset($_POST['oculto'])) {
    exit();
}

include '../../config/conexion.php'; 
include '../model/UsuarioModel.php'; 

$usuario = $_POST['Usuario'];
$correo = $_POST['Correo'];
$departamento = $_POST['Departamento'];

$usuarioModel = new UsuarioModel($bd); 
$resultado = $usuarioModel->insertarUsuario($usuario, $correo, $departamento);

if ($resultado) {
    header("Location: ../index.php");
    exit(); 
} else {
    echo "Error al insertar los datos.";
}
?>

