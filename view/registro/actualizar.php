<?php require_once 'view/layout/header.php' ?>

<?php while ($producto = $productos->fetch_object()) : ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">
                <div class="card">
                    <div class="card-header"><h5 class="text-center">   Actualizar Medicamento <?= $producto->descripcion ?></h5></div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Número</label>
                                <div class="col-md-6">
                                    <input type="text" value="<?= $producto->id_producto ?>" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Nombre</label>
                                <div class="col-md-6">
                                    <input type="text" value="<?= $producto->descripcion ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Gramage</label>
                                <div class="col-md-6">
                                    <input type="text" value="<?= $producto->gramos ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>

                            <div class="form-group col">
                                <div class="text-md-center">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; ?>


<?php require_once 'view/layout/footer.php' ?>