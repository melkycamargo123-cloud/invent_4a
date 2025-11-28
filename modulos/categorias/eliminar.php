<?php require('../../app/conexion.php'); ?>

<?php

// Obtener el id de la categoria
$id_categoria = $_GET['id'];

// Consulta para eliminar datos de una categoria
$sql = "DELETE FROM categorias WHERE id_categoria=$id_categoria";

// Verificar que se ejecute la consulta
if ($conexion->query($sql) === TRUE) {
    header("Location: listar.php");
    exit;
} else {
    echo "Error al eliminar datos: " . $conexion->error;
}

$conexion->close();
