<?php
if (!isset($_GET['id'])) {
    exit();
}

$codigo = $_GET['id'];

include '../../config/conexion.php'; 
include '../model/UsuarioModel.php'; 

$usuarioModel = new UsuarioModel($bd); 

$resultado = $usuarioModel->eliminarUsuario($codigo);

if ($resultado) {
    header("Location: ../index.php");
    exit(); 
} else {
    echo "Error al eliminar los datos.";
}
?>
