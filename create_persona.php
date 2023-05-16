<?php

    include('connection.php');
    $con = connection();

    $id = null;
    $primer_nombre = $_POST['1er_Nombre'];
    $segndo_nombre = $_POST['2do_Nombre'];
    $primer_apellido = $_POST['1er_Apellido'];
    $segundo_apellido = $_POST['2do_Apellido'];
    $ci = $_POST['CI'];

    $sql = "INSERT INTO persona VALUES
    ('$id','$primer_nombre','$segndo_nombre','$primer_apellido','$segundo_apellido','$ci')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };

?>