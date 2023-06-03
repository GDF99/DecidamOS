<?php

session_start();

if (isset($_SESSION['user_id'])) {
	header('Location: php-login');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../assest/css/dashboard.css">
	<link rel="stylesheet" href="../../assest/icon/style.css">
	<link rel="icon" type="image/png" href="../../assest/img/logo.png">
	<title>Nominados</title>
</head>

<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="../inicio/dashboard.php" class="brand"><i class='icon-autotask icon'></i>DecidamOS</a>
		<ul class="side-menu">
			<li><a href="../elector/listar_elector.php"><i class="icon-users5 icon"></i><span>Electores</span></a></li>
			<li><a href="#"><i class="icon-user12 icon"></i><span>Nominados</span></a></li>
			<li><a href="../votacion/listar_votacion.php"><i class="icon-bar-chart-2 icon"></i><span>Votacion</span></a></li>
		</ul>

		</div>
	</section>
	<!-- SIDEBAR -->
	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='icon-th-menu toggle-sidebar'></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Buscar...">
					<i class='icon-search10 icon'></i>
				</div>
			</form>
			<a href="#" class="nav-link">
				<i class='icon-bell3 icon'></i>
				<span class="badge">5</span>
			</a>
			<a href="#" class="nav-link">
				<i class='icon-mail7 icon'></i>
				<span class="badge">8</span>
			</a>
			<span class="divider"></span>
			<div class="profile">
				<img src="../assest/img/user.png" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='icon-edit4 icon'></i> Perfil</a></li>
					<li><a href="#"><i class='icon-settings5 icon'></i>Ajustes</a></li>
					<li><a href="../index.php"><i class='icon-log-out icon'></i>Cerrar secion</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->
		<!-- MAIN -->
		<main>
			<h1 class="title">Listar Nominados <a href="crear_nominado.php" i class="icon-user-plus2 icon" id="crear"></a></h1>
			<ul class="breadcrumbs">
				<li><a href="#">Inicio</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Nominados</a></li>
			</ul>
			<div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2>15</h2>
							<p>Municipios</p>
						</div>
						<i class='icon-trending-up icon'></i>
					</div>
					<span class="progress" data-value="40%"></span>
					<span class="label">40%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>105</h2>
							<p>Circunscripciones</p>
						</div>
						<i class='icon-trending-up icon'></i>
					</div>
					<span class="progress" data-value="60%"></span>
					<span class="label">60%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>167</h2>
							<p>Consejos Electorales</p>
						</div>
						<i class='icon-trending-down icond'></i>
					</div>
					<span class="progress" data-value="30%"></span>
					<span class="label">30%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>1695</h2>
							<p>CDR</p>
						</div>
						<i class='icon-trending-up icon'></i>
					</div>
					<span class="progress" data-value="80%"></span>
					<span class="label">80%</span>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->
	<script src="../../assest/js/dashboard.js"></script>
</body>

</html>