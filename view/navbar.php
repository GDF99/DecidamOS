<?php
echo "<nav>
    <i class='icon-th-menu toggle-sidebar' ></i>
    <form action='#'>
        <div class='form-group'>
            <input type='text' placeholder='Buscar...'>
            <i class='icon-search10 icon' ></i>
        </div>
    </form>
    <a href='#' class='nav-link'>
        <i class='icon-bell3 icon' ></i>
        <span class='badge'>5</span>
    </a>
    <a href='#' class='nav-link'>
        <i class='icon-mail7 icon' ></i>
        <span class='badge'>8</span>
    </a>
    <span class='divider'></span>
    <div class='profile'>"
        ?><?php
        if(!is_null($_SESSION['imagen'])){
            $imagen = $_SESSION['imagen'];
        echo	"<img src=$imagen alt=''>";
        }else{
            echo "<img src='../assest/img/user.png' alt=''>";
        }
        ?><?php
        "
        <ul class='profile-link'>
            <li><a href='#'><i class='icon-edit4 icon' ></i> Perfil</a></li>
            <li><a href='#'><i class='icon-settings5 icon'></i>Ajustes</a></li>
            <li><a href='../index.php'><i class='icon-log-out icon' ></i>Cerrar secion</a></li>
        </ul>
    </div>
</nav>
<script src='../js/dashboard.js'></script>
";
?>