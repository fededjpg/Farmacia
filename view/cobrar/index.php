<?php 

if(isset($_SESSION['user'])){
}
else{
    return header("Location:". base_url);
    exit();
}
if($_SESSION['userRol'] == 'admin'){
    header("Location:".base_url. "bienvenida/index");
  }  
?>


<?php require_once 'view/layout/header.php'; ?>

<style>
    /*Estilos generales para todos los proyectos*/
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: sans-serif;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .table-rwd {
        font-size: .85em;
        border: 1px solid rgba(181, 213, 144, 0.5);
        color: #666;
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
    }

    .table-rwd td,
    .table-rwd th {
        padding: .8em;
        border-bottom: 1px solid rgba(181, 213, 144, 0.5);
    }

    .table-rwd th {
        background: #1A8CFF;
        color: #fff;
        font-weight: normal;
        text-align: right;
    }

    .table-rwd td {
        text-align: right;
    }

      
      .table-rwd .averwe:after{
        content: "%";
      } 
    .table-rwd td:first-of-type {
        text-align: left;
    }

     .table-rwd td:first-of-type:before {
        content: "";
    } 

    .table-rwd td:first-of-type:after {
        content: "";
    } 

     .table-rwd tr:hover {
        background: rgba(181, 213, 144, 0.2);
    }

    .table-rwd tr td:nth-child(2n) {
        background: rgba(181, 213, 144, 0.2);
    } 

    .table-container {
        overflow-x: auto;
    }

</style>

<input type="text" id="inicioSesion" hidden value="<?=$_SESSION['user']?>">
<div class="form-group container mt-4 mb-4 d-flex justify-content-center">
    <div class="row">
            <input type="email" class="buscar form-control " id="descripcion" aria-describedby="emailHelp" placeholder="Buscador">
    </div>
</div>

<section class="container">
        <div class="table-responsive mt-4">
        <div class="scroll2">
<table class="table-rwd">
    <thead>
        <tr>
            <th>Folio</th>
            <th>Clave</th>
            <th>Descripcion</th>
            <th>Gramos</th>
            <th>Contenido</th>
            <th>Precio Pubico</th>
            <th>Tipo</th>
            <th>Existencia</th>
            <th>Cantidad</th>
            <th>Descuento</th>
            <th>Precio Total</th>
            <th>Acciones</th>
        </tr>
    <tbody>
        <tr>
            <td id="folio"><?=$_SESSION['numeral']?></td>
            <td id="clave"></td>
            <td class="descripcion"></td>
            <td id="gramos"></td>
            <td id="contenido"></td>
            <td id="precio_publico"></td>
            <td id="tipo"></td>
            <td id="stock"></td>
            <td> <input type="text" require class="peque" id="cantidad" disabled> </td>
            <td class="averwe"> <input type="text" require class="peque" id="descuento"  disabled> </td>
            <td id="total"></td>
            <td> <a class="ocultar oculto agregar" href="">agregar</a> </td>

        </tr>
    </tbody>
    </thead>
</table>
</div>
        </div>
</section>

<style>
    .oculto {
        display: none;
    }

    .peque {
        width: 30px;
    }

    .peque-2 {
        width: 80px;
    }
</style>
    <section class="container">
        <div class="table-responsive mt-4">
        <div class="scroll2">
            <table <table class="table-rwd">
                <thead>
                    <tr>
                        <th class="centrar"><a href="" class="eliminame btn btn btn-danger petition"><i class="fas fa-trash"></i></a></th>
                        <th>Folio</th>
                        <th>Descripción</th>
                        <th>Gramos</th>
                        <th>Contenido</th>
                        <th>tipo</th>
                        <th>Precio Publico</th>
                        <th>Existencia</th>
                        <th>Cantidad</th>
                        <th>Total</th>

                    </tr>
                </thead>
                <tbody id="tablaDatos">

                </tbody>
            </table>
        </div>
    </section>
</div>



<section>
    <div class="container">
        <h4 class="text-center">TOTAL</h4>
        <div class="input-group mb-3">
            <input type="text" disabled class="form-control subtotal" id="totalAPagar">
            <input type="text" class="form-control" placeholder="RECIBO" id="recibo">
            <input type="text" disabled class="form-control" placeholder="Cambio" id="cambio">
        </div>
        <div class="d-flex justify-content-center">
            <form action="<?=base_url?>cobrar/btnCobrar"> 
                <input type="submit" class="btn btn-success" name="cobrar" id="cobrar" value="Cobrar">
            </form>
        </div>
    </div>
</section>


<?php require_once 'view/layout/footer.php'; ?>