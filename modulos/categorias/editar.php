<?php require('../../includes/header.php'); ?>
<?php require('../../app/conexion.php'); ?>

<?php
if (isset($_GET["id"])) {

    //guardar en una variable el id enviado
    $id_categoria = $_GET["id"];

    //crear la consulta SQL para extraer los datos de la categoria
    $consulta = "SELECT * FROM categorias 
                 WHERE id_categoria = $id_categoria";

    //ejecutar la consulta
    $resultado = mysqli_query($conexion, $consulta);


    //estraer datos del resultado 
    $categoria = mysqli_fetch_assoc($resultado);


}
?>


<h1 class="text-center">Editar Categoria</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card bg-light">
                <div class="card-body">
                    <form action="actualizar.php" method="post">
                        <input type="hidden" value="<?php echo $id_categoria; ?>" name="id_categoria">
                        <div class="mb-3 mt-3">
                            <label for="nombre">Nombre:</label>
                            <input type="text" value="<?php echo $categoria['nombre']; ?>" class="form-control" id="nombre" placeholder="Ingrese Nombre de la Categoria" name="nombre">

                        </div>

                        <div class="mb-3">
                            <label for="estado">Estado:</label>
                            <select class="form-select" name="estado" id="estado">
                                <option value="1"
                                    <?php if ($categoria['estado'] == 1) echo "selected"; ?>>Activo
                                </option>
                                <option value="0"
                                    <?php if ($categoria['estado'] == 0) echo "selected"; ?>>Inactivo
                                </option>
                            </select>

                        </div>

                        <div class="text-center ">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('../../includes/footer.php'); ?>