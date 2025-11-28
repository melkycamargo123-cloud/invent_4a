<!-- crear un formulario para crear un nuevo producto -->
<?php require('../../includes/header.php'); ?>   
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4 class="mb-0">Crear Nuevo Producto</h4>
                    <!-- Botón en el header que también envía el formulario -->
                    <button type="button" class="btn btn-success btn-sm ms-auto" onclick="document.getElementById('productoForm').submit();">Guardar Producto</button>
                </div>
                <div class="card-body">
                    <form id="productoForm" action="guardar.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del Producto</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="precio_compra" class="form-label">Precio de compra</label>
                            <input type="number" step="0.01" class="form-control" id="precio_compra" name="precio_compra" required>
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" step="1" class="form-control" id="stock" name="stock" required>
                        </div>
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Codigo</label>
                            <input type="number" step="1" class="form-control" id="codigo" name="codigo" required>
                        </div>
                        <!-- crear el selct para estado -->
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-select" id="estado" name="estado" required>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                        <!-- Solo se guardarán las columnas: nombre, codigo, precio_compra, stock, estado -->
                        <button type="submit" class="btn btn-primary">Guardar Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('../../includes/footer.php'); ?>