<?php
   session_start();
   if(isset($_SESSION['valido'])){

    require "conexion.php";
  $FolioCo=$_POST['folioc'];

  $query="SELECT * FROM reporte WHERE Folio='$FolioCo'";
  
$consulta=mysqli_query($conecta,$query)or die(mysqli_error());
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Sistema de Reportes</title>
      <link rel="stylesheet" type="text/css" href="../css/Plantilla.css"/>
      <link rel="stylesheet" type="text/css" href="../css/formC2.css"/>
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
          <li><a  href="../Paginas/Contenido.html">Contenido</a></li>
          <li><a  href="../Paginas/CrearReporte.php">Crear Reporte</a></li>
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
    <?php
      echo '<h2>Reporte:</h2>'.'<br/>'.'<br/>';
while($a = mysqli_fetch_array($consulta))   
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