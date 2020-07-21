<?php require_once 'view/layout/header.php' ?>
<div class="form-center">
<?php while($producto = $productos->fetch_object()): ?>
    <form method="POST" action="" class="needs-validation" novalidate>
    <h1 class="aver text-align-center">Actualiza Producto <?=$producto->descripcion?> </h1>
    <div class="form-row mt-5">
        <div class="col-md-4 mb-3">
            <label for="validarNombre">Clave:<span class="red">*</span></label>
            <input type="text" class="form-control" value="<?=$producto->id_producto?>" name="validarNombre">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="Descripcion">Descripcion:<span class="red">*</span></label>
            <input type="text" class="form-control" value="<?=$producto->descripcion?>">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="Gramaje">Gramaje:</label>
            <input type="text" class="form-control" value="<?=$producto->gramos?>">
        </div>
    </div>


    <div class="form-group mb-10">
        <button class="btn btn-secundary" type="" name="submit">Cancelar</button>
        <button class="btn btn-primary" type="submit" name="reset">Actualizar</button>
    </div>

</form>
</div>



<?php endwhile; ?>


<?php require_once 'view/layout/footer.php' ?>