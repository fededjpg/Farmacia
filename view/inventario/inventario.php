<?php require_once 'view/layout/header.php';?>

<h1 class="text-center">Inventario</h1>


<div class="container mt-2">
<a href="<?=base_url?>inventario/exportar" class="btn btn-primary">Exportar Pdf<i class=" ml-1 far fa-file-pdf"></i></a>
</div>

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
                <th>Stock</th>          
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody class="text-center">
           <?php while ($inventario=$inventarios->fetch_object()):?>
            <tr>
            <td><?=$inventario->id_producto?></td>
            <td><?=$inventario->descripcion?></td>
            <td><?=$inventario->gramos?></td>
            <td><?=$inventario->contenido?></td>
            <td><?=$inventario->tipo?></td>
            <td><?=$inventario->stock?></td>
            <td></td>
            <td></td>
        
            </tr>
           <?php endwhile; ?>
        </tbody>  
    </table>
</div>
</section>
</div>

<?php require_once 'view/layout/footer.php';?>
