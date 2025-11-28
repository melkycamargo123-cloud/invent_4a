<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ingresar a InVent</title>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-light">
                    <div class="card-body">
                        <h1 class="text-center"><i class="fa fa-shopping-cart text-primary"></i> Ingresar a InVent</h1>
                        <hr>
                        <form action="modulos/categorias/crear.php" method="post">
                            <div class="mb-3 mt-3">
                                <label for="nombre_usuario">Nombre:</label>
                                <input type="text" class="form-control" id="nombre_usuario" placeholder="Ingrese el Nombre de Usuario" name="nombre_usuario">

                            </div>

                            <div class="mb-3">
                                <label for="contrasena">Contraseña:</label>
                                <input type="password" class="form-control" id="contrasena" placeholder="Ingrese la Contraseña" name="contrasena">

                            </div>
                            <hr>
                            <div class="text-center ">
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>