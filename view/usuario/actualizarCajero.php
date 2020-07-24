<?php require_once 'view/layout/header.php' ?>

<?php while ($cajero = $cajer->fetch_object()) : ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">
                <div class="card">
                    <div class="card-header"><h5 class="text-center">   Actualizar Cajero<?= $cajero->usuario?></h5></div>
                    <div class="scroll">
                    <div class="card-body">
                        <form action="<?=base_url?>usuario/actualizarElCajero" method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Usuario:</label>
                                <div class="col-md-6">
                                    <input type="text" name="usuario" value="<?= $cajero->usuario ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Nombre:</label>
                                <div class="col-md-6">
                                    <input type="text" name="nombre" value="<?= $cajero->nombre ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">apellido:</label>
                                <div class="col-md-6">
                                    <input type="text" name="apellido" value="<?= $cajero->apellido ?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Fecha de Nacimiento:</label>
                                <div class="col-md-6">
                                    <input type="text" name="fechaNac" value="<?= $cajero->f_nacimiento ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Telefono:</label>
                                <div class="col-md-6">
                                    <input type="text"name="telefono" value="<?= $cajero->telefono ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Rol</label>
                                <div class="col-md-6">
                                    <select name="seleccion" class="form-control" id="">
                                        <?php if($cajero->rol == 'cajero'):?>
                                        <option value="cajero"selected>Cajero</option>
                                        <?php endif; ?>
                                        <option value="admin">Administrador</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Contraseña:</label>
                                <div class="col-md-6">
                                    <input type="text" name="contra" value="<?= $cajero->contraseña ?>" class="form-control" placeholder="" aria-describedby="helpId">
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