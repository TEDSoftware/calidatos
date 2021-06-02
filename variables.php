<?php
$config = include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
	<title>Admin Del sistema</title>

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="style.css">

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
				<li>
					<a href="" class="active"><span class="las la-igloo"></span>
						<span>Dashboard</span></a>
				</li>
				<li>
					<a href=""><span class="las la-user"></span>
						<span>Customer</span></a>
				</li>
				<li>
					<a href=""><span class="las la-user-circle"></span>
						<span>Accounts</span></a>
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
				Dashboard
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


		</header>



		<main>
			<div class="cards">
				<div class="card-single" class="one">
					<div>

					<h1><?php 
				
					$mysqli = new mysqli("localhost", "root", "", "tutorial_crud");

					/* verificar la conexión */
					if (mysqli_connect_errno()) {
						printf("Conexión fallida: %s\n", mysqli_connect_error());
						exit();
					}
					
					  $query = "SELECT nombre FROM alumnos ORDER BY id DESC LIMIT 1";
					  $result = $mysqli->query($query);
					  while ($row = $result->fetch_assoc()) {
						echo $row['nombre']."<br>";
			
					}
					  
			

					?></h1>

						<span>Temperatura</span>
					</div>
					<div>
						<span class="las la-temperature-low"></span>
					</div>
				</div>

				<div class="card-single" class="two">
					<div>
						<h1>two</h1>
						<span>two</span>
					</div>
					<div>
						<span class="las la-clipboard"></span>
					</div>
				</div>
				<div class="card-single" class="three">
					<div>
						<h1>three</h1>
						<span>three</span>
					</div>
					<div>
						<span class="las la-clipboard"></span>
					</div>
				</div>

				<div class="card-single" class="four">
					<div>
						<h1>four</h1>
						<span>four</span>
					</div>
					<div>
						<span class="las la-clipboard"></span>
					</div>
				</div>


				<div class="cardss">
					<div class="card-single" class="one">
						<div>
							<h1>Mapa</h1>
							<span>Mapa</span>
						</div>
						<div>
							<span class="las la-users"></span>
						</div>
					</div>

				</div>


			</div>


		</main>

	</div>
</body>

</html>