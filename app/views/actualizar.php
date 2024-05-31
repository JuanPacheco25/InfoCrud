<?php 
session_start();
if (!isset($_GET['id'])) {
    header("Location: ../index.php");
}


if (!isset($_SESSION['nombre'])) {
    header('location: ./views/login.php');
}elseif (isset($_SESSION['nombre'])) {
    include '../../config/conexion.php';
    $id = $_GET['id'];
    $sentencia = $bd->prepare("SELECT * FROM usuario WHERE usuario_id=?;");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
}else {
    echo "error en el sistema";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Actulizar</title>
</head>

<body>
    <div class="contenedor">
        <h1><ins>Actulizar Usuario</ins></h1>
<br>
<form action="../controllers/editar.php" method="POST" >
        <label for="">
            <img width="25px" src="./icons/user.svg" alt="">
            Usuario
        </label>
        <input type="text" placeholder="Ingresa Usuario" name="Usuario2" value="<?php echo $persona->usuario_nombre ;?>">

        <label for="">
            <img width="25px" src="./icons/correouser.svg" alt="">
            Correo
        </label>
        <input type="text" placeholder="Ingresa Correo" name="Correo2" value="<?php echo $persona->usuario_email ;?>">

        <label for="">
            <img width="25px" src="./icons/depart.svg" alt="" >
            Departamento
        </label>
        <input type="text" placeholder="Ingresa Departamento" name="Departamento2"value="<?php echo $persona->usuario_departamento ;?>">

        <input type="hidden" name="oculto">
        <input type="hidden" name="Usuario_id2" value="<?php echo $persona->usuario_id ;?>">
        <input type="submit" class="button" value="Editar">

        <a href=" ../index.php" class="boton_Ingresar">
            Volver
        </a>
    </form>

    </div>
</body>

</html>