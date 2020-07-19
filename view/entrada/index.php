<?php require_once 'view/layout/header.php';?>

<h1 class="text-center">Entradas</h1>

<!-- modal -->

<section class="container">
<button type="button" class="btn btn-primary mt-2 mb-2" data-toggle="modal" data-target="#add-new-register" data-whatever="@mdo">AGREGAR</button>

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
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha</label>
            <input type="date" class="form-control" id="date">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Precio:</label>
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


<!-- data table table-dark table-sm-->

<section class="container">
<div class="table-responsive">
<table id="example" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
        <thead class="text-center">
            <tr>
                <th>Numero</th>
                <th>Producto</th>
                <th>Fecha Entrada</th>
                <th>Entradas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="text-center">
           <?php while ($entrada=$entradas->fetch_object()):?>
            <tr>
            <td><?=$entrada->id_producto?></td>
            <td><?=$entrada->descripcion?></td>
            <td><?=$entrada->fecha_registro?></td>
            <td><?=$entrada->entradas?></td>
            <td>
            <span  id="elimina" value="<?php $entrada->id_producto?>" ><i class="far fa-trash-alt" id="delete"></i></span>
            <a href="#"  onclick="obtenerDatos(<?=$entrada->descripcion?>)"  data-toggle="modal" data-target="#Update" data-whatever="@mdo"><i class="far fa-edit"></i></a>
          </td>
            </tr>
           <?php endwhile; ?>
        </tbody>  
    </table>
</div>
</section>


<!-- modal update entradas  -->
<section class="container">
<div class="modal fade" id="Update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="name" value="">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha</label>
            <input type="date" class="form-control" id="date">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Precio:</label>
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


<?php require_once 'view/layout/footer.php';?>