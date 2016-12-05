<?php
  session_start();
  session_unset();
  session_destroy();

echo "<script type='text/javascript'>
             alert('Sesion Cerrada');
             location.href='../index.html';
             </script>";
?>