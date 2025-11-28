<?php
// incluir la conexion a la base de datos
require_once("../../app/conexion.php");

// Verificar que la petición sea POST
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

	// Leer y sanitizar campos del formulario
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, trim($_POST['nombre'])) : '';
	$codigo = isset($_POST['codigo']) ? mysqli_real_escape_string($conexion, trim($_POST['codigo'])) : '';
	$precio_compra = isset($_POST['precio_compra']) && $_POST['precio_compra'] !== '' ? floatval($_POST['precio_compra']) : 0.0;
	$stock = isset($_POST['stock']) && $_POST['stock'] !== '' ? intval($_POST['stock']) : 0;
	$estado = isset($_POST['estado']) ? intval($_POST['estado']) : 1;

	// Validaciones básicas
	$errors = [];
	if ($nombre === '') $errors[] = 'El nombre es requerido.';
	if ($codigo === '') $errors[] = 'El código es requerido.';
	if ($precio_compra < 0) $errors[] = 'El precio de compra no puede ser negativo.';
	if ($stock < 0) $errors[] = 'El stock no puede ser negativo.';

	if (!empty($errors)) {
		foreach ($errors as $err) {
			echo "<p style='color:red;'>{$err}</p>";
		}
		echo "<p><a href='crear.php'>Volver al formulario</a></p>";
		exit;
	}

	// Preparar consulta de inserción usando sólo las columnas requeridas
	$sql = "INSERT INTO productos (nombre, codigo, precio_compra, stock, estado) VALUES ('{$nombre}', '{$codigo}', {$precio_compra}, {$stock}, {$estado})";

	if (mysqli_query($conexion, $sql)) {
		header('Location: listar.php');
		exit;
	} else {
		echo "<p style='color:red;'>Error al guardar el producto: " . mysqli_error($conexion) . "</p>";
		echo "<p><a href='crear.php'>Volver al formulario</a></p>";
	}

	mysqli_close($conexion);

} else {
	header('Location: crear.php');
	exit;
}
