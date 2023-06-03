<?php 
    session_start(); 
    if(isset($_SESSION['nombre'])){
    }
?>
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assest/css/index.css">
    <link rel="icon" type="image/png" href="assest/img/logo.png">
    <title>Login</title>
   
</head>
<body>
    <div class="contenedor">
     <div class="contenedorcentrado">
         <div class="login">
                 <div class="titulo">
                    BIENVENIDO
                 </div>
                 <hr>
                 <form action="controller/validacion.php" method="POST">
                     <div class="field email">
                        <div class="input-area">
                            <input id="nombre" type="text" name="email" placeholder="Usuario o correo" required>
                         </div>
                    </div>
                    <div class="field password">
                         <div class="input-area">
                            <input id="password" type="password" placeholder="Contraseña" name="password">
                         </div>
                         <div class="error error-txt">Credenciales incorrectas</div>
                    </div>
                         <button type="submit" title="Ingresar" name="Ingresar">Acceder</button>
                        </form>
         </div>  
         <div id="derecho">
         </div>
        </div>
 </div>
<script src="assest/js/scriptlo.js"></script>

</body>


</html>