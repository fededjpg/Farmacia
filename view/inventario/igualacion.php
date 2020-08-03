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

<?php require_once 'view/layout/header.php' ?>

<h1 class="text-center">Igualacion de Inventario</h1>

<div class="scroll">
    <section class="container">
        <div class="table-responsive">
            <table id="example" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
                <thead class="text-center">
                    <tr>
                        <th>Clave Producto</th>
                        <th>Nombre</th>
                        <th>Gramos</th>
                        <th>Contenido Neto</th>
                        <th>Tipo</th>
                        <th>Faltantes</th>
                        <th>Sobrantes</th>
                        <th>Fecha</th>

                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php while ($igualacion = $igualaciones->fetch_object()) : ?>
                        <tr>
                            <td><?= $igualacion->id_producto ?></td>
                            <td><?= $igualacion->descripcion ?></td>
                            <td><?= $igualacion->gramos ?></td>
                            <td><?= $igualacion->contenido ?></td>
                            <td><?= $igualacion->tipo ?></td>
                            <td><?= $igualacion->faltantes ?></td>
                            <td><?= $igualacion->sobrantes ?></td>
                            <td><?= $igualacion->fechas ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>



<?php require_once 'view/layout/footer.php' ?>
