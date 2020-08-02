<?php 

if(isset($_SESSION['user'])){
}
else{
    return header("Location:". base_url);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?=base_url?>view/asset/css/main.css">
  <link rel="stylesheet" href="<?=base_url?>view/asset/css/style.css">
  <link rel="stylesheet" href="<?=base_url?>view/asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url?>view/asset/fontawesome/css/all.min.css">   
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ul-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="#"> <strong> Bienvenido: <?= $_SESSION['user']?> <?=$_SESSION['userLastName']?>  <?=$_SESSION['userRol']?> </strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>usuario/deleteSessionLogin"><i class="fas fa-power-off"></i></a>
      </li>
    </ul>
  </div>
</nav>
<h1 class="display-4 text-center mt-5">FARMACIA</h1>


<div class="contenedor">


		<section class="contenido">
            <?php if($_SESSION['userRol'] == "admin"):?>
                <a href="" class="boton-2">Historial<i class="fas fa-history"></i></a>
			<a href="<?=base_url?>entrada/index" class="boton-3"> Entradas <i class="fas fa-person-booth"></i></a>
			<a href="<?=base_url?>inventario/index" class="boton-4"> Inventario<i class="fas fa-boxes"></i></a>
			<a href="<?=base_url?>registro/index" class="boton-5"> Registro <i class="fab fa-product-hunt"></i></a>
			<a href="" class="boton-6">Pendiente</a>
            <?php else: ?>
            <a href="" class="boton-1"> Cobrar  <i class="fas fa-cash-register"></i></a>
            <?php endif; ?>
		</section>
	</div>
<!-- <section class="fixed-bar">
<div class="container">
    <div class="fixed-bar-icon-2 mt-5">
<div class="row mov-1">
    <div class="col">
        <a href="">
          Cobrar <i class="fas fa-cash-register"></i>
        </a>
    </div>
    <div class="col">
        <a href="">
            Historial<i class="fas fa-history"></i>
        </a> 
    </div>
        <div class="col">
            <a href="entrada/index">
                Entradas <i class="fas fa-person-booth"></i>
            </a>
    </div>
   </div>
   <div class="row ro-2">
        <div class="col com-2">
            <a href="inventario/index">
                Inventario<i class="fas fa-boxes"></i>
            </a>
        </div>
        <div class="col com">
            <a href="registro/index">
                Registro <i class="fab fa-product-hunt"></i>
            </a>
        </div>
        </div>
    </div>
</div>
</section> -->

<!-- <section class="fixed-bar">
        <h1 class="display-4 text-center mt-5">FARMACIA</h1>
        <div class="container">
            <div class="fixed-bar-icon mt-5">
                <a href="">
                   Cobrar <i class="fas fa-cash-register"></i>
                </a>
                <a href="">
                Historial<i class="fas fa-history"></i>
                </a> 	
                <a href="<?=base_url?>entrada/index">
                   Entradas <i class="fas fa-person-booth"></i>
                </a>
                <a href="<?=base_url?>inventario/index">
                   Inventario<i class="fas fa-boxes"></i>
                </a>
                <a href="<?=base_url?>registro/index">
                    Registro <i class="fab fa-product-hunt"></i>
                </a>
            </div>                   
        </div>
    </section> -->
    

</body>
<script src="<?=base_url?>js/jquery.js"></script>
<script src="<?=base_url?>view/asset/bootstrap/js/bootstrap.min.js"></script>
</html>