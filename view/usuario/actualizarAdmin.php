<?php require_once 'view/layout/header.php' ?>

<?php while ($admin = $admins->fetch_object()) : ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">
                <div class="card">
                    <div class="card-header"><h5 class="text-center">   Actualizar Cajero<?= $admin->usuario?></h5></div>
                    <div class="scroll">
                    <div class="card-body">
                        <form action="<?=base_url?>usuario/actualizarElAdmin" method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Usuario:</label>
                                <div class="col-md-6">
                                    <input type="text" name="usuario" value="<?= $admin->usuario ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Nombre:</label>
                                <div class="col-md-6">
                                    <input type="text" name="nombre" value="<?= $admin->nombre ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">apellido:</label>
                                <div class="col-md-6">
                                    <input type="text" name="apellido" value="<?= $admin->apellido ?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Fecha de Nacimiento:</label>
                                <div class="col-md-6">
                                    <input type="text" name="fechaNac" value="<?= $admin->f_nacimiento ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Telefono:</label>
                                <div class="col-md-6">
                                    <input type="text"name="telefono" value="<?= $admin->telefono ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Rol</label>
                                <div class="col-md-6">
                                    <select name="seleccion"  class="form-control" id="">
                                        <?php if($admin->rol == 'admin'):?>
                                            <option value="admin" selected>Administrador</option>
                                        <?php endif; ?>
                                        <option value="cajero" >Cajero</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 text-md-right col-form-label">Contraseña:</label>
                                <div class="col-md-6">
                                    <input type="text" name="contra" value="<?= $admin->contraseña ?>" class="form-control" placeholder="" aria-describedby="helpId">
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