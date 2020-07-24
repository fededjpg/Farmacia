<?php require_once 'view/layout/header.php' ?>
<?php while ($inventario = $inventarios->fetch_object()) : ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">
                <div class="card">
                    <div class="card-header"><h5 class="text-center">   Igualacion <?= $inventario->descripcion?></h5></div>
                    <div class="scroll">
                    <div class="card-body">
                        <form action="<?=base_url?>usuario/actualizar" method="post">
                           
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Stock:</label>
                                <div class="col-md-6">
                                    <input type="text" name="stock" value="<?= $inventario->id_inventario ?>" class="form-control" placeholder="" disabled aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Faltantes:</label>
                                <div class="col-md-6">
                                    <input type="text" name="faltantes" value="<?= $inventario->id_producto?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Sobrantes:</label>
                                <div class="col-md-6">
                                    <input type="text" name="restantes" value="<?= $inventario->descripcion ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Sobrantes:</label>
                                <div class="col-md-6">
                                    <input type="text" name="restantes" value="<?= $inventario->gramos ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Sobrantes:</label>
                                <div class="col-md-6">
                                    <input type="text" name="restantes" value="<?= $inventario->contenido ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Sobrantes:</label>
                                <div class="col-md-6">
                                    <input type="text" name="restantes" value="<?= $inventario->tipo ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Sobrantes:</label>
                                <div class="col-md-6">
                                    <input type="text" name="restantes" value="<?= $inventario->stock ?>" class="form-control" placeholder="" aria-describedby="helpId">
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
</div>

<?php endwhile; ?>


<?php require_once 'view/layout/footer.php' ?>