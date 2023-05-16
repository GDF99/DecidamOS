<?php
    include('connection.php');
    $con = connection();

    $selet_sql = "SELECT * FROM persona";
    $query = mysqli_query($con,$selet_sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DecidamOS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
    <div class="input-group justify-content-center alig-items-center">
        <form action="create_persona.php" method="POST"><!-- metodo para crear -->
            <h1>Crear Persona</h1>

            <input type="text" name="1er_Nombre" placeholder="1er_Nombre"  class="form-control" >
            <input type="text" name="2do_Nombre" placeholder="2do_Nombre"  class="form-control">
            <input type="text" name="1er_Apellido" placeholder="1er_Apellido"  class="form-control">
            <input type="text" name="2do_Apellido" placeholder="2do_Apellido"  class="form-control">
            <input type="number" name="CI" placeholder="CI" class="form-control">
            <div class="row w-100 align-items-center">
    			<div class="col text-center">
                <input type="submit" value="Crear" class="btn btn-warning regular-button">
    			</div>	
    		</div>
        </form>
    </div>
    <div>
        <h2>Personas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>CI</th>

                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                <th><?=$row['ID']?></th>
                <th><?=$row['1er_Nombre'].' '.$row['2do_Nombre'];?></th>
                <th><?=$row['1er_Apellido'].' '.$row['2do_Apellido'];?></th>
                <th><?=$row['CI']?></th>

                <th><a href="">Editar</a></th>
                <th><a href="">Eliminar</a></th>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>

</body>
</html>