<?php

  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assest/css/dashboard.css">
	<link rel="stylesheet" href="../assest/icon/style.css">
	<link rel="icon" type="image/png" href="../assest/img/logo.png">
	<title>DecidamOS</title>
</head>
<body>	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<?php include('siderbar.php');?>
	</section>
	<!-- SIDEBAR -->
	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='icon-th-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Buscar...">
					<i class='icon-search10 icon' ></i>
				</div>
			</form>
			<a href="#" class="nav-link">
				<i class='icon-bell3 icon' ></i>
				<span class="badge">5</span>
			</a>
			<a href="#" class="nav-link">
				<i class='icon-mail7 icon' ></i>
				<span class="badge">8</span>
			</a>
			<span class="divider"></span>
			<div class="profile">
				<?php
				if(!is_null($_SESSION['imagen'])){
					$imagen = $_SESSION['imagen'];
				echo	"<img src=$imagen alt=''>";
				}else{
					echo '<img src="../assest/img/user.png" alt="">';
				}
				?>
				
				<ul class="profile-link">
					<li><a href="#"><i class='icon-edit4 icon' ></i> Perfil</a></li>
					<li><a href="#"><i class='icon-settings5 icon'></i>Ajustes</a></li>
					<li><a href="../index.php"><i class='icon-log-out icon' ></i>Cerrar secion</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->
		<!-- MAIN -->
		<main>
			<?php 
			$url = $_GET['url'];
			if ($url== 'inicio') {
				include('inicio/portal.php');
			}else if ($url == 'elector'){
				include('elector/list.php');
			}else if ($url == 'nominado'){
				echo 'nominado';
			}elseif ('elector_create') {
				include('elector/create.php');
			}
			?>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->
	<script src="../assest/js/dashboard.js"></script>
</body>
</html>
<?php 
    
