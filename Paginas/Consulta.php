<?php
   session_start();
   if(isset($_SESSION['valido'])){
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Consulta</title>
      <link rel="stylesheet" type="text/css" href="../css/Plantilla.css"/>
      <link rel="stylesheet" type="text/css" href="../css/formC.css"/>
      </head>
  <body>

  <header>
    <div id="Encabezado">
      <a href="sesion.php"><img  class="image" src="../imagenes/logo_fesc.png" alt="Logo"/> </a>
      <a href="sesion.php"><img  class="imagen" src="../imagenes/logo_unam.png" alt="Logo"/> </a>
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
      <div class="Consulta">
                <h2>Consultar Reporte</h2> 

                  <form style="margin: 15px" class="FormularioC" method=POST action="../php/valida2.php">
                 
         
                     <div><label> Ingresa el folio del Reporte a Consultar </label><input style="margin-top: 8px" type="number" name="folioc" value="" placeholder="Folio"></div>
                        
                      <div> <input type="submit" name="consulta" value="Consultar "></div><br>
               
                 </form>
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