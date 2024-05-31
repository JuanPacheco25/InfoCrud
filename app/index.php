<?php 
session_start();
if (!isset($_SESSION['nombre'])) {
    header('location: ./views/login.php');
}elseif (isset($_SESSION['nombre'])) {
    include '../config/conexion.php';
    $sentencia = $bd->query("SELECT * FROM usuario;");
    $usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($usuario);
}else {
    echo "error en el sistema";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./views/css/styleIndex.css">
    <title>Crud</title>
</head>

<body>
    <div class="container">
        <center>
            <h1>Bienvenido <?php echo $_SESSION['nombre']?></h1>
            <div class="cerrarsession"><a href="./controllers/cerrar.php">Cerrar Session</a></div>
            
            <h3>Lista de personas</h3>
            <table>
            <div class="icono"> 
            <a href="./views/crear.php"><button class="button">agregar</button></a>
            </div>   
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Correo</td>
                    <td>Departamento</td>
                    <td></td>
                </tr>
                <?php 
            foreach ($usuario as $dato) {
              ?>
                <tr>
                    <td><?php echo $dato->usuario_id?></td>
                    <td><?php echo $dato->usuario_nombre?></td>
                    <td><?php echo $dato->usuario_email?></td>
                    <td><?php echo $dato->usuario_departamento?></td>
                    <td><a href="./views/actualizar.php?id=<?php echo $dato->usuario_id; ?>"><img width="35px" src="./views/icons/edit.svg" alt=""></a></td>
                    <td><a href="./controllers/Eliminar.php ?id=<?php echo $dato->usuario_id; ?>"><img width="35px" src="./views/icons/eliminar.svg" alt=""></a></td>

                </tr>
                <?php
        }
    ?>
            </table>

        </center>
    </div>
</body>

</html>