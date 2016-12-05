<?php
  require "conexion.php";
 $query="SELECT `NombreA` FROM `administrador` WHERE `NombreA` LIKE 'imelda' ";
 $consulta=mysqli_query($conecta,$query)or die(mysqli_error());
 while($a = mysqli_fetch_array($consulta))   
 $b= 'Hola  '.$a['NombreA'].'<br/>' ;
  $nom=$_POST['numA'];
  $pas=$_POST['contraseña'];

  $query="SELECT NumeroA,password FROM Administrador WHERE password='$pas'"; 


  $n=mysqli_query($conecta,$query)or die(mysqli_error());
  $dato=mysqli_fetch_array($n,MYSQLI_NUM);
  //mysqli_close($conecta);
  
  if($nom==$dato[0] && $pas==$dato[1])
    {
     session_start();//inicializo sesión
     $_SESSION['NombreUs']=$nom;
     $_SESSION['Nombreadm']=$b;
     $_SESSION['valido']=true;

    header("Location:../Paginas/sesion.php");#redireccionar
     
    
     
     }

  
  
  else{
    echo "<script type='text/javascript'>
             alert('Usuario o contraseña incorrecta');
             location.href='../Paginas/iniciarSesion.html';
             </script>";
     
  }
 ?>
