<?php require_once 'view/layout/header.php'; ?>

<h1 class="text-center">Registro de Productos</h1>

<!-- modal -->

<section class="container">
  <button type="button" class="btn btn-primary mt-2 mb-2" data-toggle="modal" data-target="#add-new-register" data-whatever="@mdo">Agregar</button>

  <div class="modal fade" id="add-new-register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Medicamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Clave:</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nombre:</label>
              <input type="date" class="form-control" id="date">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Gramaje:</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Cantidad:</label>
              <input type="text" name="price" id="prime" class="form-control">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Precio:</label>
              <input type="text" name="price" id="prime" class="form-control">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Fecha de Registro:</label>
              <input type="text" name="price" id="prime" class="form-control">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Entrada:</label>
              <input type="text" name="price" id="prime" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Agregar</button>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="container">
  <div class="table-responsive">
    <table id="example" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Clave</th>
          <th>Descripción</th>
          <th>Gramage</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th>Tipo</th>
          <th>Acciones</th>

        </tr>
      </thead>
      <tbody>
      <?php while($producto = $productos->fetch_object()):?>
        <tr>
          <td><?=$producto->id_producto?></td>
          <td><?=$producto->descripcion?></td>
          <td><?=$producto->gramos?></td>
          <td><?=$producto->contenido?></td>
          <td><?=$producto->tipo?></td>
          <td><?=$producto->precio?></td>
          <td><i class="far fa-edit"></i></td>
        </tr>

      <?php endwhile;?>
      </tbody>
    </table>
  </div>
</section>
<?php require_once 'view/layout/footer.php'; ?>