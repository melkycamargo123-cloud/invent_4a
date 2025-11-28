<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "invent_4a";

// Crear Conexión
$conexion = mysqli_connect($servername, $username, $password, $bdname);

// Verificar Conexión
if (!$conexion) {
  die("Conexión fallida: " . mysqli_connect_error());
}