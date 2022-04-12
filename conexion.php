
<?php
ob_start();
$host = "db";
$usuario = "Dino";
$contrasenia = "pass";
$base_de_datos = "escuela";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?> 