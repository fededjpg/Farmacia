<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  body {
  margin: 0;
  font-family: sans-serif;
  color: #333; 
}
table{
  border-collapse: collapse;

}

.container{
  display: flex;
  justify-content: center;
}

th{
  background-color: #1A8CFF;
  color: #fff;
}
.container .cosas{
  width: 87px;
  text-align: center;
}
.container .columna{
  width: auto;
}
</style>
<body>
  <div class="container">
<table border="1px">
    <thead> 
        <tr>
                <th>Numero</th>
                <th>Producto</th>
                <th>Gramos</th>
                <th>Contenido Neto</th>
                <th>Tipo</th>
                <th>Stock</th>     
                <th> &nbsp; &nbsp; </th>     
                <th> &nbsp; &nbsp; </th>
        </tr>
    </thead>
    <tbody>
    <?php while ($inventario=$inventarios->fetch_object()):?>
            <tr>
            <td class="cosas"><?=$inventario->id_producto?></td>
            <td class="cosas columna"><?=$inventario->descripcion?></td>
            <td class="cosas"><?=$inventario->gramos?></td>
            <td class="cosas"><?=$inventario->contenido?></td>
            <td class="cosas"><?=$inventario->tipo?></td>
            <td class="cosas"><?=$inventario->stock?></td>
            <td class="cosas"></td>        
            <td class="cosas"></td>
            </tr>
           <?php endwhile; ?>
    </tbody>
</table>
</div>

</body>
</html>