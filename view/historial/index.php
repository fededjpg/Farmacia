<?php 

if(isset($_SESSION['user'])){
}
else{
    return header("Location:". base_url);
    exit();
}
?>

<?php require_once 'view/layout/header.php'; ?>

<h1 class="text-center">Historial</h1>
<div class="container mt-2">
    <!-- <form action="<?=base_url?>historial/corte" method="post"> -->
     <input type="date" id="fechas" name="fechas">
     <input type="date" id="fechass" name="fechass">

     <input type="text" placeholder="Usuario" id="corteUsuario" name="corteUsuario">
        <button class="btn btn-success" id="corte"> Corte <i class="fas fa-money-bill-wave"></i></button>
    <!-- </form> -->
        <input type="text" disabled placeholder="Corte Usuario" >
        <p id="totaleshion"></p>
</div>
<div class="scroll">
    <section class="container">
        <div class="table-responsive">
            <table id="example" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
                <thead class="text-center">
                    <tr>
                        <th>Folio</th>
                        <th>Fecha</th>
                        <th>Producto</th>
                        <th>Gramos</th>
                        <th>Contenido Neto</th>
                        <th>Tipo</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Descuento</th>
                        <th>Total</th>
                        <th>Usuario</th>
                    </tr>
                </thead>
                <tbody class="text-center">     
                        <?php while ($historial = $historiales->fetch_object()) : ?>
                            <tr>
                            <td><?= $historial->folio ?></td>
                            <td><?= $historial->fecha?></td>
                            <td><?= $historial->descripcion ?></td>
                            <td><?= $historial->gramos ?></td>
                            <td><?= $historial->contenido ?></td>
                            <td><?= $historial->tipo ?></td>
                            <td><?= $historial->precio_publico?></td>
                            <td><?= $historial->cantidad ?></td>
                            <td><?= $historial->descuento ?></td>
                            <td><?= $historial->total?></td>
                            <td><?= $historial->usuario ?></td>
                            </tr>
                        <?php endwhile; ?>
                     </tbody>

                </tbody>
            </table>
        </div>
    </section>
</div>


<?php require_once 'view/layout/footer.php'; ?>
