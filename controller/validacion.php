<?php
    require_once('ManageDB.php');

    session_start();
    // Obtener los valores enviados
    $nombre = $_POST['email'];
    $password = $_POST['password'];
    $pass_b64 = base64_encode($password);
    
    $db = new ManageDB();
    $result = $db->search('usuario','nombre,correo,imagen',"nombre='$nombre' and password='$pass_b64'");
    
    if ($result != null && count($result) > 0){
        $_SESSION['nombre'] = $result['nombre'];
        $_SESSION['imagen'] = $result['imagen'];
        header("Location: ../view/dashboard.php?url=inicio");
    }else{
        header("Location: ../index.php");
    }
?>