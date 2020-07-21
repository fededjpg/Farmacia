<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    /* Estilos de etiqueta*/
body {
    background-color: #CCBBEE;
  }
  
  table {
    background: white;
    width: 50%;
    margin: 0 auto;
    margin-top: 2%;
    border-collapse: collapse;
    text-align: center;
  }
  
  th {
    background-color: rgba(5, 5, 100, 95);
    height: 35px;
    border-bottom: 1px solid rgb(210, 220, 250);
    color: rgb(120, 120, 120);
  }
  
  td {
    color: rgba(100, 100, 100, 60);
    height: 30px;
    border: 0.5px solid rgba(240, 240, 240, 10);
  }
  
  tfoot {
    font-weight: bold;
  }
  
  /*Pseudo-clases*/
  th:hover {
    background-color: rgba(20, 20, 20, 90);
  }
  
  tr:hover {
    background-color: rgba(15, 25, 25, 90);
  }
  
  /* Estililos de clases*/
  .PrecioTotal:hover,
  .CantidadTotal:hover {
    color: rgb(230, 50, 50);
  }
  
  .Cabecera {
    background-color: rgba(5, 5, 100, 0.99);
    border-radius: 4px;
    height: 30px;
    padding: 2em;
    margin: 0 25%;
    text-align: center;
    color: white;
  }
  
  a{
    text-decoration: none;
    color: white;
    font-size: 14pt;
  }
  
  footer {
    margin-top: 40px;
    text-align: center;
  }
</style>
<body>
<table border="1">
    <thead> 
        <tr>
                <th>Numero</th>
                <th>Producto</th>
                <th>Gramos</th>
                <th>Contenido Neto</th>
                <th>Tipo</th>
                <th>Stock</th>          
        </tr>
    </thead>
    <tbody>
    <?php while ($inventario=$inventarios->fetch_object()):?>
            <tr>
            <td><?=$inventario->id_producto?></td>
            <td><?=$inventario->descripcion?></td>
            <td><?=$inventario->gramos?></td>
            <td><?=$inventario->contenido?></td>
            <td><?=$inventario->tipo?></td>
            <td><?=$inventario->stock?></td>        
            </tr>
           <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>