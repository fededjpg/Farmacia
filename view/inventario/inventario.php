<?php require_once 'view/layout/header.php'; ?>

<h1 class="text-center">Inventario</h1>


<div class="container mt-2">
    <form action="<?= base_url ?>inventario/exportar" method="post">
        <select>
            <option disabled selected>Seleciona una letra</option>
            <option value="a" name="a">A</option>
            <option value="b" name="b">B</option>
            <option value="c" name="c">C</option>
            <option value="d" name="d">D</option>
            <option value="e" name="e">E</option>
            <option value="f" name="f">F</option>
            <option value="g" name="g">G</option>
            <option value="h" name="h">H</option>
            <option value="i" name="i">I</option>
            <option value="j" name="j">J</option>
            <option value="k" name="k">K</option>
            <option value="l" name="l">L</option>
            <option value="m" name="m">M</option>
            <option value="n" name="n">N</option>
            <option value="o" name="o">O</option>
            <option value="p" name="p">P</option>
            <option value="q" name="q">Q</option>
            <option value="r" name="r">R</option>
            <option value="s" name="s">S</option>
            <option value="t" name="t">T</option>
            <option value="u" name="u">U</option>
            <option value="v" name="v">V</option>
            <option value="w" name="w">W</option>
            <option value="x" nema="x">X</option>
            <option value="y" name="y">Y</option>
            <option value="z" name="z">Z</option>
        </select>
        <select>
            <option disabled selected>Seleciona una letra</option>
            <option value="a" name="a">A</option>
            <option value="b" name="b">B</option>
            <option value="c" name="c">C</option>
            <option value="d" name="d">D</option>
            <option value="e" name="e">E</option>
            <option value="f" name="f">F</option>
            <option value="g" name="g">G</option>
            <option value="h" name="h">H</option>
            <option value="i" name="i">I</option>
            <option value="j" name="j">J</option>
            <option value="k" name="k">K</option>
            <option value="l" name="l">L</option>
            <option value="m" name="m">M</option>
            <option value="n" name="n">N</option>
            <option value="o" name="o">O</option>
            <option value="p" name="p">P</option>
            <option value="q" name="q">Q</option>
            <option value="r" name="r">R</option>
            <option value="s" name="s">S</option>
            <option value="t" name="t">T</option>
            <option value="u" name="u">U</option>
            <option value="v" name="v">V</option>
            <option value="w" name="w">W</option>
            <option value="x" nema="x">X</option>
            <option value="y" name="y">Y</option>
            <option value="z" name="z">Z</option>
        </select>
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
                            <td><a href="<?=base_url?>inventario/actualizar&id=<?=$inventario->id_producto?>&id_inventario=<?=$inventario->id_inventario?>"><i class="far fa-edit"></i></a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php require_once 'view/layout/footer.php'; ?>