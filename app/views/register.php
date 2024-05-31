<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Register</title>
</head>

<body>
    <div class="contenedor">
        <h1><ins>Registrarse</ins></h1>
<br>
<form method="POST"action="../controllers/registroLogin.php">
        <label for="">
            <img width="25px" src="./icons/user.svg" alt="">
            Usuario
        </label>
        <input type="text" placeholder="Ingresa Usuario" name="txtUsu">

        <label for="">
            <img width="25px" src="./icons/correouser.svg" alt="">
            Correo
        </label>
        <input type="text" placeholder="Ingresa Correo" name="txtCorreo">

        <label for="">
            <img width="25px" src="./icons/depart.svg" alt="">
            Departamento
        </label>
        <input type="text" placeholder="Ingresa Departamento" name="txtDe">

        <label for="">
            <img width="25px" src="./icons/key.svg" alt="">
            Clave
        </label>
        <input type="password" placeholder="Ingresa Contraseña" name="txtPass">

        <input type="submit" class="button" value="Registrarse">
        <a href="login.php" class="boton_Ingresar">
            Ingresar
        </a>
    </form>

    </div>
</body>

</html>