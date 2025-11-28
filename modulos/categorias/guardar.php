<?php
//incluir la conexion a la base de datos
require_once("../../app/conexion.php");

//verificar la peticion de datos por metodo POST
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    
    //obtener datos del formulario
    $nombre = $_POST["nombre"];
    $estado = $_POST["estado"];

    //crear consulta SQL para insertar datos
    $consulta = "INSERT INTO categorias (nombre, estado)
                 VALUES ('$nombre', '$estado')";

    //verificar la ejecucion de la consulta
    if (mysqli_query($conexion, $consulta)) {
        echo "Categoria Guardada exitosamente";
        header("Location: listar.php");
        exit;
    } else {
        echo "Error al guardar la categoria". mysqli_error($conexion);
    }

    //cerrar conexion
    mysqli_close($conexion);
    
}
?>