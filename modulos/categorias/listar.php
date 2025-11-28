<?php
//incluir la conexion a la base de datos
require_once("../../app/conexion.php");
?>

<?php require('../../includes/header.php'); ?>


<div class="row">
    <div class="col-7 mx-auto">
        <div class="card bg-light">
            <div class="card-body">
                <h1 class="h2 text-center">Lista de Categorias</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        // Consulta para obtener los datos de la tabla categorias
                        $sql = "SELECT * FROM categorias";

                        // Resultado de ejecutar la consulta
                        $resultado = $conexion->query($sql);

                        // echo "<pre>";
                        // print_r($resultado);
                        // echo "</pre>";

                        // Si el resultado de la consulta tiene registros
                        if ($resultado->num_rows > 0) {
                            // Salida de datos de cada fila
                            while ($row = $resultado->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td><?php echo $row['id_categoria']; ?></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php 
                                    if ($row['estado']==0) {
                                        echo "Inactivo";
                                    } else {
                                        echo "Activo";
                                    }
                                    ?></td>
                                    <td class="text-center">
                                        <a href="editar.php?id=<?php echo $row['id_categoria']; ?>" class="btn btn-warning btn-sm">Editar</a>
                                        <a href="eliminar.php?id=<?php echo $row['id_categoria']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        $conexion->close();
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<?php require('../../includes/footer.php'); ?>