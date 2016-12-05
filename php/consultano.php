<?php
    session_start();
    require "conexion.php";

    
    
  $query="SELECT `NombreA` FROM `administrador` WHERE `NombreA` LIKE 'imelda' ";
 $consulta=mysqli_query($conecta,$query)or die(mysqli_error());
 while($a = mysqli_fetch_array($consulta))   
 $b= 'Hola:  '.$a['NombreA'].'<br/>' ;
 {
 echo $b;
 }
session_start();
 $_SESSION['Nombreadm']=$b;
echo $_SESSION['Nombreadm'];
 ?>