<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url?>view/asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url?>view/asset/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url?>view/asset/fontawesome/css/all.min.css">   
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<body id="portada">

<nav class="navbar navbar-dark bg-primary navbar-expand-sm sticky-top letras">
<a class="navbar-brand" href="#">

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul id="mainMenu" class="navbar-nav  mr-auto ml-auto text-center nav">
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>bienvenida/index">Inicio</a>
      </li>
      
      <?php if($_SESSION['userRol'] == "admin"): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>entrada/index">Entradas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>inventario/index">Inventario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>inventario/igualacion">Registros de Inventario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>registro/index">Resgistro de Productos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>historial/index">Historial</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Configuraciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="<?=base_url?>usuario/cajero">Cajero</a>
        <a class="dropdown-item" href="<?=base_url?>usuario/admin">Administrador</a>
        </div>
      </li>
    </ul>
    <div class="d-flex justify-content-end">
        
        <a class="nav-link" href="<?=base_url?>usuario/deleteSessionLogin"><i class="fas fa-power-off"></i></a>
        
        </div>
  </div>
      <?php else: ?>
        <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>cobrar/index">Cobrar</a>
      </li>
      <div class="d-flex justify-content-end">
         
        <a class="nav-link" href="<?=base_url?>usuario/deleteSessionLogin"><i class="fas fa-power-off"></i></a>
       
        </div>
      <?php endif; ?>
</nav>
<div class="general">

