<div class="scroll2">
<section class="container">
    <div class="table-responsive mt-4">
        <table id="tabla2" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
                <thead>
                    <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Gramos</th>
                    <th>Contenido</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($datos = $fede->fetch_object()) : ?>
                        <tr>
                            <td><?= $datos->folio ?></td>
                            <td><?= $datos->id_producto ?></td>
                            <td><?= $datos->usuario ?></td>
                            <td><?= $datos->cantidad ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
        </table>
    </div>
</section>

</div>

