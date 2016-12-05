<?php
    session_start();
    require "conexion.php";
     $a=$_POST['tipo'];
     $b=$_POST['Folio'];
     $c=$_POST['fechaNa'];
     $d=$_POST['Nombrep'];
     $e=$_POST['NumCuenta'];
     $f=$_POST['Carrera'];
     $g=$_POST['Correo'];
     $h=$_POST['NumeroP'];
     $i=$_POST['NumeroCel'];
     $j=$_POST['Des'];

    $revisa="SELECT * FROM reporte WHERE Folio='$b'";
    $registro=mysqli_query($conecta,$revisa);
    $dato=mysqli_fetch_array($registro,MYSQLI_NUM);
    if($dato[0]==1){
    	echo "Ya existe ese registro";
    }
    else{
     $inserta=("INSERT INTO reporte (TipodeQueja,Folio,Fecha,NombrePersona,NumCuenta,Carrera,CorreoElectronico,TelefonoPart,TelefonoCel,Descripcion) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')");
      #$consulta=mysqli_query($conecta,$inserta);
      if(mysqli_query($conecta,$inserta))
        
      	echo "<script type='text/javascript'>
             alert('Reporte Creado');
             location.href='../sesion1.php';
             </script>";
      else
      	 echo "<script type='text/javascript'>
            alert('No se inserto registro');
            </script>"; 
   }
      echo "<br/><br/><a href='../sesion1.php'>Regresa</a>";
 ?>