<?php
echo "<h1 class='title'>Panel</h1>
<ul class='breadcrumbs'>
    <li><a href='#'>Inicio</a></li>
    <li class='divider'>/</li>
    <li><a href='#' class='active'>Panel</a></li>
</ul>
<div class='info-data'>
    <div class='card'>
        <div class='head'>
            <div>
                <h2>15</h2>
                <p>Municipios</p>
            </div>
            <i class='icon-trending-up icon' ></i>
        </div>
        <span class='progress' data-value='40%'></span>
        <span class='label'>40%</span>
    </div>
    <div class='card'>
        <div class='head'>
            <div>
                <h2>105</h2>
                <p>Consejos</p>
            </div>
            <i class='icon-trending-up icon' ></i>
        </div>
        <span class='progress' data-value='60%'></span>
        <span class='label'>60%</span>
    </div>
    <div class='card'>
        <div class='head'>
            <div>
                <h2>167</h2>
                <p>Circunscripciones</p>
            </div>
            <i class='icon-trending-down icond'></i>
        </div>
        <span class='progress' data-value='30%'></span>
        <span class='label'>30%</span>
    </div>
    <div class='card'>
    <div class='head'>
        <div>
            <h2>267</h2>
            <p>Zonas</p>
        </div>
        <i class='icon-trending-down icond'></i>
    </div>
    <span class='progress' data-value='30%'></span>
    <span class='label'>41%</span>
</div>
    <div class='card'>
        <div class='head'>
            <div>
                <h2>1695</h2>
                <p>CDR</p>
            </div>
            <i class='icon-trending-up icon' ></i>
        </div>
        <span class='progress' data-value='80%'></span>
        <span class='label'>80%</span>
    </div>
</div>
<div class='data'>
    <div class='sectores'>
        <div class='content-data'>
            <div class='content-datah'>
              <h3>Principales Sectores</h3>
              <div class='menu'>
                <i class='icon-more-horizontal icon'></i>
                <ul class='menu-link'>
                <li><a href='#'>Modificar</a></li>
                </ul>
            </div>
            </div>
            <div class='content-datab'>
               <div class='table-responsive'>
                <table width='100%'>  
                    <thead>
                         <tr>
                             <td>#</td>
                             <td><span class='las la-sort'></span>Sectores</td>
                             <td><span class='las la-sort'></span> %</td>
                             <td><span class='las la-sort'></span>Estatus</td>
                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                             <td>1</td>
                             <td>Educacion General</td>
                             <td>7,7%</td>
                             <td><span class='status verde'></span>
                              bien
                             </td>
                         </tr>
                         <tr>
                             <td>2</td>
                             <td>Salud</td>
                             <td>6,6%</td>
                             <td><span class='status verde'></span>
                             bien
                             </td>
                         </tr>
                         <tr>
                             <td>3</td>
                             <td>Educacion Superior</td>
                             <td>5,71%</td>
                             <td><span class='status amarillo'></span>
                             progreso
                             </td>
                     </tr>
                     <tr>
                             <td>4</td>
                             <td>Deporte</td>
                             <td>2,7%</td>
                             <td><span class='status rojo'></span>
                             mal
                             </td>
                     </tr>
                     <tr>
                             <td>5</td>
                             <td>Prensa</td>
                             <td>7,7%</td>
                             <td><span class='status rojo'></span>
                             mal
                             </td>
                     </tr>

                    </tbody>
                </table>
               </div>
            </div>

        </div>
    </div>
    <div class='menuchat'>
        <div class='content-data'>
            <div class='content-datah'>
              <h3>Mensajes</h3>
                <div class='menu'>
                    <i class='icon-more-vertical icon'></i>
                    <ul class='menu-link'>
                    <li><a href='#'>Eliminar</a></li>
                    </ul>
                </div>
            </div>
            <div class='content-datab'>
                <div class='chat-box'>
                       <p class='day'><span>Hoy</span></p>
                        <div class='msg'>
                            <img src='../assest/img/m.png' alt=''>
                                <div class='chat'>
                                    <div class='profile'>
                                      <span class='username'>Consejo Nacional ELectoral</span>
                                      <span class='time'>18:30</span>
                                    </div>
                                     <p>Hola , necesito el resultado de las votaciones del dia 26/03.</p>
                                </div>
                        </div>
                        <div class='msg me'>
                            <div class='chat'>
                                <div class='profile'>
                                   <span class='time'>18:30</span>
                                </div>
                                  <p>Correcto, en un momento se los adjunto.</p>
                            </div>
                        </div>
                        <div class='msg me'>
                            <div class='chat'>
                                <div class='profile'>
                                    <span class='time'>18:30</span>
                                </div>
                                    <p>!Lamento informarle: que las votaciones del dia 26/03 todavia no estan disponibles debido a que los resultados de la circunscripcion 56 no han sido enviados todavia</p>
                            </div>
                        </div>
                         <div class='msg me'>
                            <div class='chat'>
                                <div class='profile'>
                                    <span class='time'>18:30</span>
                                </div>
                                    <p>Pero a pesar de ese inconveniente podemos enviarle los demas si usted lo precisa .Recuerde que por ahora solo podemos brindarle información de la provincia La Habana</p>
                            </div>
                        </div>
                 </div>
                    <form action='#'>
                        <div class='form-group'>
                            <input type='text' placeholder='Enviar...'>
                            <button type='submit' class='btn-send'><i class='icon-send3' ></i></button>
                        </div>
                     </form> 
            </div>
        </div>
    </div>

";
?>