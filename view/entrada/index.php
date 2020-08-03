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


<h1 class="text-center">Entradas</h1>



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
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php while ($entrada = $entradas->fetch_object()) : ?>
            <tr>
              <td><?= $entrada->id_producto ?></td>
              <td><?= $entrada->descripcion ?></td>
              <td><?= $entrada->gramos ?></td>
              <td><?= $entrada->contenido ?></td>
              <td><?= $entrada->tipo ?></td>
              <td><?= $entrada->fecha_registro ?></td>
              <td><?= $entrada->entradas ?></td>
              <td><a href="<?=base_url?>entrada/actualizar&id=<?=$entrada->id_producto?>"><i class="far fa-edit"></i></a></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </section>
</div>


<?php require_once 'view/layout/footer.php'; ?>