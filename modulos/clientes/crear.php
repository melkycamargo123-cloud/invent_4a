<?php require('../../includes/header.php'); ?> 
<?php require('../../app/conexion.php'); ?>
<!-- crear el formulario para crear un nuevo cliente -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Crear Nuevo Cliente</h4>
                </div>
                <div class="card-body">
                    <form action="guardar.php" method="POST">
                        <!-- crear un select para tipo de documento -->
                        <div class="mb-3">
                            <label for="doc_tipo" class="form-label">Tipo de Documento</label>
                            <select class="form-select" id="doc_tipo" name="doc_tipo" required>
                                <option value="DNI">DNI</option>
                                <option value="RUC">RUC</option>
                                <option value="CE">CE</option>
                            </select>
                        </div>
                        <!-- crear input para numero de documento -->
                        <div class="mb-3">
                            <label for="numero_documento" class="form-label">Número de Documento</label>
                            <input type="text" class="form-control" id="numero_documento" name="numero_documento" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                        div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-select" id="estado" name="estado" required>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>

                        <!-- Nota: la tabla 'clientes' no tiene una columna 'estado', por eso se omitió -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>