<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V19</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="view/asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="view/asset/css/login.css">
	<!--===============================================================================================-->
</head>
<style>
    .carga{
       
        display: none;
    }
    .carga.visible{
      
        display: block;
    }
</style>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form id="login" class="100-form validate-form">
					<span class="login100-form-title p-b-33">
						Farmacia
					</span>

					<div class="wrap-input100">
						<input class="input100 user" name="user" type="text" placeholder="Usuario">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100 password" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button type="submit" class="login100-form-btn" id="registrar">
							Iniciar Sesión
						</button>
					</div>


					<div id="respuesta">

					</div>
					<div class="response"></div>
					<div class="draw">
					<img src='img/preview.gif' width='200px' class="carga"></img>
					</div>
					<div class="text-center">
						<span class="txt1">
							&copy; ST-TUX 2020-08-02
						</span>

					</div>
					<div class="text-center">
						<span class="txt1">
							Contacto: +52 961-336-91-12
						</span>

					</div>
				</form>
			</div>
		</div>
	</div>



	<!--===============================================================================================-->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!--===============================================================================================-->
	<!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
	<!--===============================================================================================-->
	<script src="view/asset/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<!-- <script src="vendor/select2/select2.min.js"></script> -->
	<!--===============================================================================================-->
	<!-- <script src="vendor/daterangepicker/moment.min.js"></script> -->
	<!-- <script src="vendor/daterangepicker/daterangepicker.js"></script> -->
	<!--===============================================================================================-->
	<!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
	<!--===============================================================================================-->
	<script src="js/login.js"></script>

	<?php

	// devuelve: Noviembre de 2017
	// setlocale(LC_TIME, "Spanish");
	// echo strftime("%A, %d de %B de %Y");
	// devuelve: viernes, 17 de noviembre de 2017
	?>

</body>

</html>