<?php require_once 'view/layout/header.php'; ?>

<h1 class="text-center">Registro de Productos</h1>

<!-- modal -->

<section class="container">
  <button type="button" class="btn btn-primary mt-2 mb-2" data-toggle="modal" data-target="#add-new-register" data-whatever="@mdo">Agregar</button>

  <div class="modal fade" id="add-new-register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class= "modal-title" id="exampleModalLabel">Agregar Nuevo Medicamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?=base_url?>registro/insertProduct" >
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Clave:</label>
              <input type="text" class="form-control" id="clave" name="clave">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nombre:</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Gramaje:</label>
              <input type="text" class="form-control" id="gramos" name="gramos">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Contenido:</label>
              <input type="text" name="contenido" id="contenido" class="form-control">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Tipo:</label>
              <input type="text" name="tipo" id="tipo" class="form-control">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Precio:</label>
              <input type="text" name="precio" id="precio" class="form-control">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Entrada Inicial:</label>
              <input type="text" name="entrada" id="entrada" class="form-control">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Fecha Entrada:</label>
              <input type="text" name="fecha" id="fecha" class="form-control">
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

<div class="scroll">
<section class="container">
  <div class="table-responsive">
    <table id="example" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Clave</th>
          <th>Descripción</th>
          <th>Gramage</th>
          <th>Contenido</th>
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
          
          <td><a href="<?=base_url?>registro/actualizar&id=<?=$producto->id_producto?>"><i class="far fa-edit"></i></a></td>
        </tr>

      <?php endwhile;?>
      </tbody>
    </table>
  </div>
</section>
</div>
<?php require_once 'view/layout/footer.php'; ?>