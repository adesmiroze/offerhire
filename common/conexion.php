<?php

// Datos de conexión a la base de datos
$host = "193.203.175.150"; // O la dirección del servidor MySQL
$usuario = "u232828735_offerhire"; // Tu nombre de usuario de MySQL
$contrasena = "[QBzMx4h"; // Tu contraseña de MySQL
$base_de_datos = "u232828735_offerhire"; // El nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

// Opcional: Establecer el conjunto de caracteres
$conexion->set_charset("utf8");

// La conexión está establecida, puedes continuar con tus consultas y operaciones
// ...

// Cerrar la conexión (se recomienda hacerlo al finalizar las operaciones)
$conexion->close();

?>