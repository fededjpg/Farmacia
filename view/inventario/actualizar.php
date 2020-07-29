<?php require_once 'view/layout/header.php' ?>
<?php while ($inventario = $inventarios->fetch_object()) : ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">
                <div class="card">
                    <div class="card-header"><h5 class="text-center">   Igualacion de Inventario de <?= $inventario->descripcion?></h5></div>
                    <div class="scroll">
                    <div class="card-body">
                        <form action="<?=base_url?>inventario/insertarIgualiacion" method="post">
                           
                        <input type="hidden" name="id_inventario" value="<?= $inventario->id_producto?>" class="form-control" placeholder="" aria-describedby="helpId">

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Clave producto:</label>
                                <div class="col-md-6">
                                    <input type="text" name="id_producto" value="<?= $inventario->id_producto?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Sobrantes:</label>
                                <div class="col-md-6">
                                    <input type="text" name="restantes" value="0" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Faltantes:</label>
                                <div class="col-md-6">
                                    <input type="text" name="faltantes" value="0"class="form-control" placeholder="" aria-describedby="helpId">
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