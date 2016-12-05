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
      <a href="Home.html"><img  class="image" src="../imagenes/logo_fesc.png" alt="Logo"/> </a>
      <a href="Home.html"><img  class="imagen" src="../imagenes/logo_unam.png" alt="Logo" /> </a>
      <h1 id="Titulo"> Universidad Nacional Autónoma de México Facultad de Estudios Superiores Cuautitlán </h1>
    </div>
    
  </header>

  <nav>
    <div id ="Menu">
       <ul id="regreso">

          <li><a href="../Home.html">Inicio</a></li>
          <!-- <li><a  href="Acerca.html">Acerca de Nosotros</a>
             <ul class="submenu">
                <li><a  href="mision.html">Mision</a></li>
                <li><a href="Vision.html">Vision</a></li>
                <li><a href="Valores.html">Valores</a></li>
              </ul> -->
          </li>
          <li><a  href="contacto.html">Contacto</a></li>
          <li><a  href="Contenido.html">Contenido</a></li>
          <li><a  href="Reporte.html">Crear Reporte</a></li>
          <li><a  href="Consulta.php">Consultar Reporte</a></li>
           <li> 
          <li > 
            <?php
            echo "<h1>".$_SESSION['Nombreadm']."</h1>";
            ?>
         
<ul class="submenu">
  <a href="php/cerrar.php">cerrar sesi&oacute;n</a>
        </ul>
        </li>

                    
        </ul>
      </div>
  </nav>


    <section>
         <?php

 echo '<h1> Reporte: </h1>'.'<br/>'.'<br/>';
 while($a =  $_SESSION['FolioCo'])   
 {
      echo "<table border = '.1'> \n"; 
   echo "<tr><td>Tipo de queja </td><td>Folio</td><td>Fecha</td><td>Nombre</td><td>Numero de cuenta</td><td>Carrera<td>E-Mail</td><td>Telefono Particular</td><td>Telefono Celular</td><td>Descripcion</td> </tr> \n"; 
  
      echo "<tr><td>".$a["TipodeQueja"]."</td><td>".$a["Folio"]."</td><td>".$a["Fecha"]."</td> <td>".$a["NombrePersona"]."</td><td>".$a["NumCuenta"]."</td><td>".$a["Carrera"]."</td><td>".$a["CorreoElectronico"]."</td><td>".$a["TelefonoPart"]."</td><td>".$a["TelefonoCel"]."</td><td>".$a["Descripcion"]."</td></tr> \n"; 
    
   echo "</table> \n"; 
    
 }   
 ?>
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