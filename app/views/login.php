<?php 
session_start();
if (isset($_SESSION['nombre'])) {
    header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="contenedor">
        <h1><ins>Inicia session</ins></h1>
        <br>
        <form method="POST" action="../controllers/loginProcess.php">
            <label for="">
                <img width="25px" src="./icons/user.svg" alt="">
                Usuario
            </label>
            <input type="text" placeholder="Ingresa Usuario" name="txtUsu">
            <label for="">
                <img width="25px" src="./icons/key.svg" alt="">
                Clave
            </label>
            <input type="password" placeholder="Ingresa Contraseña" name="txtPass">
            <button class="button">
                Ingresar
            </button>
            <a href="register.php" class="button">
                Registrarse
            </a>
        </form>

    </div>
</body>

</html>