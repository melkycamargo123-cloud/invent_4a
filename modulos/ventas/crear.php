<?php require('../../includes/header.php'); ?> 
<?php require('../../app/conexion.php'); ?>
<!-- crear el formulario para crear una nueva venta -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4> Ventas</h4>
                </div>
               
                        <div class="mb-3">
                            <label for="total" class="form-label">Total de la Venta</label>
                            <input type="number" step="0.01" class="form-control" id="total" name="total" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha de la Venta</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                        </div>
                        <!-- crear select para documento-->
                        <div class="mb-3">
                            <label for="documento" class="form-label">idUsuario</label>
                            <select class="form-select" id="documento" name="documento" required>
                                <option value="Boleta">1</option>
                                <option value="Factura">2</option>
                                <option value="Ticket">3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-select" id="estado" name="estado" required>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Guardar Venta</button>    
                        </div>
                    </form>
                </div>