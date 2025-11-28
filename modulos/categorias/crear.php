<?php require('../../includes/header.php'); ?>
<?php require('../../app/conexion.php'); ?>
<h1 class="text-center">Crear Categoria</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card bg-light">
                <div class="card-body">
                    <form action="guardar.php" method="post">
                        <div class="mb-3 mt-3">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese Nombre de la Categoria" name="nombre">

                        </div>

                        <div class="mb-3">
                            <label for="estado">Estado:</label>
                            <select class="form-select" name="estado" id="estado">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
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