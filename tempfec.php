
<?php include "templates/header.php"; ?>
<?php include "templates/footer.php"; ?>

<?php

 session_start();
 $us = $_SESSION["usuario"];
 if ($us == ""){
 header("Location:index.php");
 }
include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

$error = false;
$config = include 'config.php';

try {
  $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
  $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

  if (isset($_POST['apellido'])) {
    $consultaSQL = "SELECT * FROM datosnodo WHERE apellido LIKE '%" . $_POST['apellido'] . "%'";
  } else {
    $consultaSQL = "SELECT * FROM datosnodo";
  }

  $sentencia = $conexion->prepare($consultaSQL);
  $sentencia->execute();

  $alumnos = $sentencia->fetchAll();

} catch(PDOException $error) {
  $error= $error->getMessage();
}

$titulo = isset($_POST['apellido']) ? 'Lista de alumnos (' . $_POST['apellido'] . ')' : 'Lista de alumnos';
?>

<?php include "templates/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
	<title>Admin Del sistema</title>

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

	<link rel="stylesheet" href="estilos.css">


</head>


<body>
	<input type="checkbox" id="nav-toggle">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2>
				<span class="lab la-accusoft"></span> <span>Inteligentes</span> 
						</h2>
		</div>



		<div class="sidebar-menu">
			<ul>
				<li >
					<a href="" class="active"><span class="las la-temperature-low"></span>

						<span>Filtar Fecha</span></a>
				</li>

				<li >
					<a id="btn-abrir-popup" ><span class="lar la-calendar"></span>
						<span>Exportar</span></a>
				</li>
				<li>
					<a href=""><span class="las la-sign-out-alt"></span>
						<span>salir</span></a>
				</li>

			</ul>
		</div>
	</div>

	<div class="main-content">
		<header>
			<h2>
				<label for="nav-toggle">

					<span class="las la-bars"></span>
				</label>
				Temperatura
			</h2>

			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here" />

			</div>

			<div class="user-wrapper">
				<img src="imag-admin.png" width="40px" height="40px" alt="">
				<div>
					<h4>Admin Admin</h4>

					<a href="logout.php">✖️ Log Out</a>
		


				</div>
			</div>


		</header>

		<main>

	
		<?php
if ($error) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $error ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>


<div class="container">
  <div class="row">
    <div class="col-md-12">

      <table class="table">
        <thead>
          <tr align="center">
            <th>NODO</th>
            <th>LLUVIA</th>
            <th>Cantidad Basura</th>
            <th>Residuos</th>
            <th>Porcentaje Agua</th>
			<th>Nivel Agua</th>
			<th>Opciones</th>
          </tr>
        </thead>
        <tbody>

        <tbody>
		<?php include'range.php'?>	
      </table>
    </div>
  </div>
</div>

	
			
<?php include "templates/footer.php"; ?>
	
		</main>

	</div>


  <body>
	<div class="contenedor">

		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h4>Elejir el Rango de Fecha</h4>

        
        <form class="form-inline" method="POST" action="">
			<label>Fecha Desde:</label>
			<input type="date" class="form-control" placeholder="Start"  name="date1"/>
     
      <label>Hasta:</label>
			<input type="date" class="form-control" placeholder="End"  name="date2"/></br>

      <button class="btn btn-primary" name="search">
        <span class="glyphicon glyphicon-search">br>

		</form>


	<script src="popup.js"></script>


</body>

</html>

