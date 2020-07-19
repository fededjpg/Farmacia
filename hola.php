<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-dark bg-dark navbar-expand-sm sticky-top">
<a class="navbar-brand" href="#">

    <!-- <img src="" width="30" height="30" alt="" loading="lazy"> -->
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto ml-auto text-center">
      <li class="nav-item active">
        <a class="nav-link" href="#">Entradas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Inventario</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Más Opciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Cobrar</a>
          <a class="dropdown-item" href="#">Corte</a>
          <a class="dropdown-item" href="#">Retiro</a>
          <a class="dropdown-item" href="#">Descuento</a>

        </div>
      </li>
    </ul>
  </div>
</nav>

<!-- end header  -->

<!-- modal -->

<section class="container">
<button type="button" class="btn btn-primary mt-2 mb-2" data-toggle="modal" data-target="#add-new-register" data-whatever="@mdo">AGREGAR</button>

<div class="modal fade" id="add-new-register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Medicamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha</label>
            <input type="date" class="form-control" id="date">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Precio:</label>
            <input type="text" name="price" id="prime" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
</section>

<!-- data table table-dark table-sm-->

<section class="container">
<div class="table-responsive">
<table id="example" class="table table-hover table-striped navbar-expand-sm table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Numero</th>
                <th>Clave</th>
                <th>Producto</th>
                <th>Fecha Entrada</th>
                <th>Entradas</th>
                <th>mass</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td><i class="far fa-trash-alt" id="delete"></i>
                <i class="far fa-edit"></td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td><i class="far fa-trash-alt" id="delete"></i>
                <i class="far fa-edit"></td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td><i class="far fa-trash-alt" id="delete"></i>
                <i class="far fa-edit"></td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td><i class="far fa-trash-alt" id="delete"></i>
                <i class="far fa-edit"></td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td><i class="far fa-trash-alt" id="delete"></i>
                <i class="far fa-edit"></td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td><i class="far fa-trash-alt" id="delete"></i>
                <i class="far fa-edit"></td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td><i class="far fa-trash-alt" id="delete"></i>
                <i class="far fa-edit"></td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td><i class="far fa-trash-alt" id="delete"></i>
                <i class="far fa-edit"></td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <th>Numero</th>
                <th>Clave</th>
                <th>Producto</th>
                <th>Fecha Entrada</th>
                <th>Entradas</th>
                <td><i class="far fa-trash-alt" id="delete"></i>
                <i class="far fa-edit"></td>
            </tr>
        </tfoot>
    </table>
</div>
</section>

<footer class="foot">
    <b><p>Desarrollado Por &copy; ST-TUX <?= date('Y') ?> </p><b>
</footer>
</body>
<script src="jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="main.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>