<?php

$db_host = "localhost";
$db_nombre = "usuario";
$db_usuario = "root";
$db_contra = "";

// Usar el estilo orientado a objetos para la conexión
$conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);

// Verificar la conexión
if ($conexion->connect_errno) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}

// Seleccionar la base de datos
if (!$conexion->select_db($db_nombre)) {
    die("No se encontró la base de datos =D: " . $conexion->error);
}

// Realizar operaciones con la base de datos

// Cerrar la conexión
$conexion->close();

?>
