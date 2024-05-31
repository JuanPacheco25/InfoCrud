<?php
$password ='';
$usuario = 'root';
$nombrebd ='testcrud';
try {
    $bd = new PDO(
    'mysql:host=localhost;
    dbname='. $nombrebd,
    $usuario,
    $password
    );
} catch (Exception $e) {
    echo "error de conexion". $e ->getMessage();
}
?>