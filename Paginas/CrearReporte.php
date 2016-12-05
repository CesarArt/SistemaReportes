<?php
   session_start();
   if(isset($_SESSION['valido'])){
 
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Sistema de Reportes</title>
      <link rel="stylesheet" type="text/css" href="../css/Plantilla.css"/>
       <link rel="stylesheet" type="text/css" href="../css/form.css"/>
  </head>
  <body>

  <header>
    <div id="Encabezado">
      <a href="sesion.php"><img  class="image" src="../imagenes/logo_fesc.png" alt="Logo"/> </a>
      <a href="sesion.php"><img  class="imagen" src="../imagenes/logo_unam.png" alt="Logo" /> </a>
      <h1 id="Titulo"> Universidad Nacional Autónoma de México Facultad de Estudios Superiores Cuautitlán </h1>
    </div>
    
  </header>

  <nav>
    <div id ="Menu">
       <ul id="regreso">

          <li><a href="sesion.php">Inicio</a></li>
          <!-- <li><a  href="Acerca.html">Acerca de Nosotros</a>
             <ul class="submenu">
                <li><a  href="mision.html">Mision</a></li>
                <li><a href="Vision.html">Vision</a></li>
                <li><a href="Valores.html">Valores</a></li>
              </ul> -->
          </li>
          <li><a  href="http://www.cuautitlan.unam.mx/institucional/secretaria_atencion_comunidad.html">Contacto</a></li>
          <li><a  href="Contenido.html">Contenido</a></li>
          
          <li><a  href="../Paginas/Consulta.php">Consultar Reporte</a></li>
           <li> 
          <li > 
            <?php
            echo "<h1>".$_SESSION['Nombreadm']."</h1>";
            ?>
         
<ul class="submenu">
  <a href="../php/cerrar.php">cerrar sesi&oacute;n</a>
        </ul>
        </li>

                    
        </ul>
      </div>
  </nav>


    <section>
         <h2>CAPTURAR REPORTE </h2>
      <div id="formulario">
     <form class="Formulario" action="../php/registra_reporte.php" method="POST">
<label>Tipo de Rerporte : </label><br> 

<div><input type="radio" name="tipo" value="Queja" checked> Queja <br>
<input type="radio" name="tipo" value="Denuncia"> Denuncia <br>
<input type="radio" name="tipo" value="Comentario"> Comentario <br>
<input type="radio" name="tipo" value="Sugerencia"> Sugerencia <br></div>

<div><label>FOLIO: </label><input type="number" name="Folio" value=""></div><br>
<div><label>Fecha de Reporte: </label><input type="date" name="fechaNa" value=""></div><br>
<div><label>Nombre: </label><input type="text" name="Nombrep" value=""></div><br>
<div><label>Núm. de Cuenta: </label><input type="number" name="NumCuenta" value=""></div><br>
<div><label>Carrera: </label><input type="text" name="Carrera" value=""></div><br>
<div><label>Correo Electronico: </label><input type="text" name="Correo" value=""></div><br>
<div><label>Télefono Particular: </label><input type="number" name="NumeroP" value=""></div><br>
<div><label>Télefono Celular: </label><input type="number" name="NumeroCel" value=""></div><br>
<div><label> Descripcion: </label><br> <textarea rows="7" cols="50" name="Des" ></textarea></div>

<div><input type="submit" value="Enviar"></div><br>
</form>     <br>
      </div>
    </section>


   

    <footer>
        <p>Copyright © 2016 Facultad de Estudios Superiores Cuautitlán / México 2016.  SECRETARÍA DE ATENCIÓN
A LA COMUNIDAD.</p>
    </footer>
   

  </body>
</html>

<?php
}
else{
      echo "<p>No puedes ver esto</p>";
}
?>