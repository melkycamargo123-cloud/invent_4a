<?php
// incluir la conexion a la base de datos
require_once("../../app/conexion.php");

// verificar la peticion de datos por metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// obtener y sanitizar datos del formulario
	$nombre = mysqli_real_escape_string($conexion, $_POST['nombre'] ?? '');
	$doc_tipo = mysqli_real_escape_string($conexion, $_POST['doc_tipo'] ?? '');
	$numero_documento = mysqli_real_escape_string($conexion, $_POST['doc_numero'] ?? '');
	$email = mysqli_real_escape_string($conexion, $_POST['email'] ?? '');
	$telefono = mysqli_real_escape_string($conexion, $_POST['telefono'] ?? '');
	$direccion = mysqli_real_escape_string($conexion, $_POST['direccion'] ?? '');
	$estado = isset($_POST['estado']) ? intval($_POST['estado']) : 1;

	// consulta SQL para insertar un nuevo cliente
	// la columna en la tabla se llama `nombre_razon` (nombre/razón social)
	$consulta = "INSERT INTO clientes
				 (nombre_razon, doc_tipo, doc_numero, email, telefono, direccion, estado)
				 VALUES
				 ('$nombre', '$doc_tipo', '$doc_numero', '$email', '$telefono', '$direccion', $estado)";

	// ejecutar y verificar
	if (mysqli_query($conexion, $consulta)) {
		// redirigir a la lista de clientes si existe
		header('Location: listar.php');
		exit;
	} else {
		echo 'Error al guardar el cliente: ' . mysqli_error($conexion);
	}

	// cerrar conexion
	mysqli_close($conexion);

} else {
	// si no se envió por POST, redirigir al formulario
	header('Location: crear.php');
	exit;
}

?>
