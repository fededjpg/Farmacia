<?php require_once 'view/layout/header.php'; ?>
<div class="scroll2">
<section class="container">
    <div class="table-responsive mt-4">
        <table id="example" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Gramos</th>
                    <th>Contenido</th>
                    <th>Tipo</th>
                    <th>Precio Publico</th>
                    <th>Stock</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
            <?php while ($inventario = $inventarios->fetch_object()) : ?>
                        <tr>
                            <td><?= $inventario->id_producto ?></td>
                            <td><?= $inventario->descripcion ?></td>
                            <td><?= $inventario->gramos ?></td>
                            <td><?= $inventario->contenido ?></td>
                            <td><?= $inventario->tipo ?></td>
                            <td><?= $inventario->precio_publico ?></td>
                            <td><?= $inventario->stock ?></td>
                            <td><input class="agregar" type="button" value="Agregar"></td>
                        </tr>
                    <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</section>
</div>


<div class="scroll2">
<section class="container">
    <div class="table-responsive mt-4">
        <table id="tabla2" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
                <thead>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Gramos</th>
                    <th>Contenido</th>
                    <th>Tipo</th>
                    <th>Precio Publico</th>
                    <th>Cantidad</th>
                </thead>

        </table>
    </div>
</section>

</div>

<section>
    <div class="container">
        <h4 class="text-center">Subtotal</h4>
        <div class="input-group mb-3">
            <input class="subtotal" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="d-flex justify-content-end">
            <h4 class="mr-4">Descuento</h4><input type="text" placeholder="Subtotal"><span>%</span>
        </div>
        <h4 class="text-center">Total</h4>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="d-flex justify-content-center">
           <input type="button" class="btn btn-primary mr-4" value="Factura">
           <input type="button" class="btn btn-success" value="Cobrar">
        </div>
    </div>
</section>


<?php require_once 'view/layout/footer.php'; ?>