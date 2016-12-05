<!DOCTYPE html>
<html>
<head>
	<title>Procesa con php</title>
	<meta charset="utf-8"/>
</head>	
<body>
<?php
   /* procesa.php */
   /*Usando método POST*/
   /*$_POST es una variable global de php
   también se le conoce como arreglo asociativo */
   echo "<p>Nombre del Usuario: ".$_GET['Nombre']."</p>";
   
   echo "<br/>".$_GET['c'];



?>
</body>
</html>