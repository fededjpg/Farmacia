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

<?php while ($producto = $productos->fetch_object()) : ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">
                <div class="card">
                    <div class="card-header"><h5 class="text-center">   Actualizar Medicamento <?= $producto->descripcion ?></h5></div>
                    <div class="scroll">
                    <div class="card-body">
                        <form action="<?=base_url?>registro/actualizarProducto" method="post">
                            <div class="form-group row">
                               
                                <div class="col-md-6">
                                    <input type="hidden" name="id_producto" value="<?= $producto->id_producto ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Clave:</label>
                                <div class="col-md-6">
                                    <input type="text" name="id_producto" value="<?= $producto->id_producto ?>" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Nombre:</label>
                                <div class="col-md-6">
                                    <input type="text" name="descripcion" value="<?= $producto->descripcion ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Gramage:</label>
                                <div class="col-md-6">
                                    <input type="text"name="gramos" value="<?= $producto->gramos ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Contenido:</label>
                                <div class="col-md-6">
                                    <input type="text" name="contenido" value="<?= $producto->contenido ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Precio Proveedor:</label>
                                <div class="col-md-6">
                                    <input type="text" name="precio_proveedor" value="<?= $producto->precio_proveedor ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Precio Publico:</label>
                                <div class="col-md-6">
                                    <input type="text" name="precio_publico" value="<?= $producto->precio_publico ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Tipo:</label>
                                <div class="col-md-6">
                                    <input type="text" name="tipo" value="<?= $producto->tipo ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>


                            <div class="form-group col">
                                <div class="text-md-center">
                                <a class="btn btn-outline-secondary" data-dismiss="modal" href="<?=base_url?>registro/index">Cancelar</a>
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