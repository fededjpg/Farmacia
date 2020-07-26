<?php require_once 'view/layout/header.php'; ?>

<?php 
if(isset($_SESSION['success'])):?>
<div class="alert alert-success d-flex justify-content-center" role="alert">
<?=$_SESSION['success']?>
</div>
<?php endif; ?>

<?php 

$destroy= new Destroy();
$destroy->deleteSession('success');

?>
<h1 class="text-center">Admin</h1>
<!-- modal -->
<section class="container">
  <button type="button" class="btn btn-primary mt-2 mb-2" data-toggle="modal" data-target="#add-new-register" data-whatever="@mdo">AGREGAR</button>
  <!-- modal-lg -->
  <div class="modal fade" id="add-new-register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Un Administrador Nuevo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url ?>usuario/addAdmin">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Usuario</label>
                <input type="text" class="form-control" id="name" name="usuario">
              </div>
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="nombre">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Apellidos</label>
                <input type="text" name="apellido" id="prime" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <label for="message-text" class="col-form-label">Fecha Nacimiento</label>
                <input type="date" name="fechaNac" id="prime" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Telefono</label>
                <input type="text" class="form-control" id="date" name="telefono">
              </div>
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Contraseña</label>
                <input type="text" class="form-control" id="date" name="contra">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>

<!-- data table table-dark table-sm-->
  <section class="container">
    <div class="table-responsive">
    <div class="scroll">
      <table id="example" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
        <thead class="text-center">
          <tr>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha Nacimiento</th>
            <th>Contraseña</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody class="text-center">
  <?php while($admin=$admins->fetch_object()):?>
        <tr>
            <td><?=$admin->usuario?></td>
            <td><?=$admin->nombre?></td>
            <td><?=$admin->apellido?></td>
            <td><?=$admin->f_nacimiento?></td>
            <td><?=$admin->contraseña?></td>
            <td><a href="<?=base_url?>usuario/actualizarAdmin&id=<?=$admin->id?>"><i class="far fa-edit"></i></a></td>
        </tr>
  <?php endwhile; ?>
        </tbody>
      </table>
      </div>
    </div>
  </section>


<?php require_once 'view/layout/footer.php'; ?>