<?php require_once 'view/layout/header.php';?>

<h1 class="text-center">Entradas</h1>

<!-- modal -->

<section class="container">
<button type="button" class="btn btn-primary mt-2 mb-2" data-toggle="modal" data-target="#add-new-register" data-whatever="@mdo">AGREGAR</button>

<div class="modal fade" id="add-new-register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar una Nueva Entrada</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?=base_url?>entrada/insertEntra" >
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Clave:</label>
            <input type="text" class="form-control" id="name" name="clave">
          </div>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="name" name="">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Gramaje:</label>
            <input type="text" name="gramos" id="prime" class="form-control">
          </div>
       
          <div class="form-group">
            <label for="message-text" class="col-form-label">Tipo:</label>
            <input type="text" name="tipo" id="prime" class="form-control">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha de Registro</label>
            <input type="text" class="form-control" id="date" name="fecha" value="<?=date('Y-m-d')?>">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Entradas:</label>
            <input type="text" name="entradas" id="prime" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Agregar</button>

          </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</section>


<!-- data table table-dark table-sm-->
<div class="scroll">
<section class="container">
<div class="table-responsive">
<table id="example" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
        <thead class="text-center">
            <tr>
                <th>Numero</th>
                <th>Producto</th>
                <th>Gramos</th>
                <th>Contenido Neto</th>
                <th>Tipo</th>
                <th>Fecha Entrada</th>
                <th>Entradas</th>
            </tr>
        </thead>
        <tbody class="text-center">
           <?php while ($entrada=$entradas->fetch_object()):?>
            <tr>
            <td><?=$entrada->id_producto?></td>
            <td><?=$entrada->descripcion?></td>
            <td><?=$entrada->gramos?></td>
            <td><?=$entrada->contenido?></td>
            <td><?=$entrada->tipo?></td>
            <td><?=$entrada->fecha_registro?></td>
            <td><?=$entrada->entradas?></td>
            </tr>
           <?php endwhile; ?>
        </tbody>  
    </table>
</div>
</section>
</div>


<?php require_once 'view/layout/footer.php';?>