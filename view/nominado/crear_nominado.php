<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="../assest/css/formulario.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">Formulario de Registro</h1>
      <form action="#">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="nombre1"> Primer Nombre</label>
            <input type="text"
                    id="nombre1"
                    name="nombre1"
                    placeholder="Introduzca primer nombre"/>
          </div>
          <div class="user-input-box">
            <label for="nombre2">Segundo Nombre</label>
            <input type="text"
                    id="nombre2"
                    name="nombre2"
                    placeholder="Introduzca segundo nombre"/>
          </div>
          <div class="user-input-box">
            <label for="email">Primer Apellido</label>
            <input type="text"
                    id="apellido1"
                    name="apellido1"
                    placeholder="Introduzca primer apellido"/>
          </div>
          <div class="user-input-box">
            <label for="apellido2">Segundo Apellido</label>
            <input type="text"
                    id="apellido2"
                    name="apellido2"
                    placeholder="Introduzca segundo apellido"/>
          </div>
          <div class="user-input-box">
            <label for="ci">Carnet de Identidad</label>
            <input type="text"
                    id="text"
                    name="ci"
                    placeholder="Carnet de identidad"/>
          </div>
          <div class="user-input-box">
            <label for="vinculacion">Vinculación</label>
            <input type="text"
                    id="ctoe"
                    name="ctoe"
                    placeholder="Centro de Trabajo o Estudio"/>
          </div>
        </div>
        <div class="gender-details-box">
          <hr>
          <div class="gender-category">
            <span>Voto</span>
           <input type="radio" name="gender" id="si">
            <label for="si">SI</label>
            <input type="radio" name="gender" id="no">
            <label for="no">NO</label>
          <div class="Boton">
            <span>Categoría</span>
            <select name="" id="">
                <option value="">Elector</option>
                <option value="">Nominado</option>
            </select>
        </div>
      </div>
        <div class="form-submit-btn">
          <input type="submit" value="Guardar">
        </div>
        </div>
      </form>
    </div>
  </body>
</html>