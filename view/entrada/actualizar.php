
<?php 

if(isset($_SESSION['user'])){
}
else{
    return header("Location:". base_url);
    exit();
}
if($_SESSION['userRol'] != 'admin'){
    header("Location:".base_url. "cobrar/index");
  }  
?>

<?php require_once 'view/layout/header.php' ?>


<?php while ($inventario = $entradas->fetch_object()) : ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">
                <div class="card">
                    <div class="card-header"><h5 class="text-center">   Igualacion de Inventario de <?= $inventario->descripcion?></h5></div>
                    <div class="scroll">
                    <div class="card-body">
                        <form action="<?=base_url?>entrada/insertEntra" method="post">
                           
                        <input type="hidden" name="clave" value="<?= $inventario->id_producto?>" class="form-control" placeholder="" aria-describedby="helpId">

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Clave producto:</label>
                                <div class="col-md-6">
                                    <input type="text" name="clave" value="<?= $inventario->id_producto?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Nombre:</label>
                                <div class="col-md-6">
                                    <input type="text" name="descripcion" value="<?= $inventario->descripcion?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Gramos</label>
                                <div class="col-md-6">
                                    <input type="text" name="gramos" value="<?= $inventario->gramos?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Tipo</label>
                                <div class="col-md-6">
                                    <input type="text" name="tipo" value="<?= $inventario->tipo?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Fecha</label>
                                <div class="col-md-6">
                                    <input type="text" name="fecha" value="<?=date('Y-m-d')?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Entradas</label>
                                <div class="col-md-6">
                                    <input type="text" name="entradas" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Producto:</label>
                                <div class="col-md-6">
                                    <input type="text" name="" value="0" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Gramos:</label>
                                <div class="col-md-6">
                                    <input type="text" name="" value="0"class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Contenido:</label>
                                <div class="col-md-6">
                                    <input type="text" name="" value="0"class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Tipo:</label>
                                <div class="col-md-6">
                                    <input type="text" name="" value="0"class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div> -->
<!-- 
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Fecha:</label>
                                <div class="col-md-6">
                                    <input type="text" name="fecha" value="<>"class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Entradas:</label>
                                <div class="col-md-6">
                                    <input type="text" name="entradas" value="0"class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div> -->

                            <div class="form-group col">
                                <div class="text-md-center">
                                <a class="btn btn-outline-secondary" data-dismiss="modal" href="<?=base_url?>entrada/index">Cancelar</a>
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