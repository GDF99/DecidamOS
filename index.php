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
    <title>Proyecto-Final</title>
</head>
<body>
    <div>
        <form action="">
            <h1>Crear Persona</h1>

            <input type="text" name="1er_Nombre" plasholder="1er_Nombre" >
            <input type="text" name="2do_Nombre" plasholder="2do_Nombre">
            <input type="text" name="1er_Apellido" plasholder="1er_Apellido">
            <input type="text" name="2do_Apellido" plasholder="2do_Apellido">
            <input type="number" name="CI" plasholder="CI">

            <input type="submit" value="Crear">
        </form>
    </div>
    <div>
        <h2>Personas</h2>
        <table>
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