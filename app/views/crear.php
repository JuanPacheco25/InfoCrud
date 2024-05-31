<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Crear</title>
</head>

<body>
    <div class="contenedor">
        <h1><ins>Crear Usuario</ins></h1>
<br>
<form action="../controllers/insertar.php" method="POST" >
        <label for="">
            <img width="25px" src="./icons/user.svg" alt="">
            Usuario
        </label>
        <input type="text" placeholder="Ingresa Usuario" name="Usuario">

        <label for="">
            <img width="25px" src="./icons/correouser.svg" alt="">
            Correo
        </label>
        <input type="text" placeholder="Ingresa Correo" name="Correo">

        <label for="">
            <img width="25px" src="./icons/depart.svg" alt="">
            Departamento
        </label>
        <input type="text" placeholder="Ingresa Departamento" name="Departamento">
<input type="hidden" name="oculto" value="1">
        <input type="submit" class="button" value="Crear">
        <a href=" ../index.php" class="boton_Ingresar">
            Volver
        </a>
    </form>

    </div>
</body>

</html>