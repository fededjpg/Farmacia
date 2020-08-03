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


<h1 class="text-center">Inventario</h1>


<div class="container mt-2">
    <form action="<?= base_url ?>inventario/exportar" method="post">
        <button class="btn btn-primary"> Exportar Pdf <i class=" ml-1 far fa-file-pdf"></i></button>
        <!-- <a href="<?= base_url ?>inventario/exportar" class="btn btn-primary">Exportar <i class=" ml-1 far fa-file-pdf"></i></a> -->
    </form>
</div>

<div class="scroll">
    <section class="container">
        <div class="table-responsive">
            <table id="example" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
                <thead class="text-center">
                    <tr>
                        <th>Clave Producto</th>
                        <th>Producto</th>
                        <th>Gramos</th>
                        <th>Contenido Neto</th>
                        <th>Tipo</th>
                        <th>Stock</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php while ($inventario = $inventarios->fetch_object()) : ?>
                        <tr>
                            <td><?= $inventario->id_producto ?></td>
                            <td><?= $inventario->descripcion ?></td>
                            <td><?= $inventario->gramos ?></td>
                            <td><?= $inventario->contenido ?></td>
                            <td><?= $inventario->tipo ?></td>
                            <td><?= $inventario->stock ?></td>
                            <td><a href="<?=base_url?>inventario/actualizar&id=<?=$inventario->id_producto?>"><i class="far fa-edit"></i></a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php require_once 'view/layout/footer.php'; ?>