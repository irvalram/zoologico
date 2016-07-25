<!DOCTYPE html>
<html>
<head>
   <title>actualizard2.php</title>
   <center><img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/a2cdf511099589.560f194265a01.png"></center>
</head>
<body>
   <div align = "center"><h1>Actualizar un registro</h1><br>
   
<?php

DEFINE('DB_USER', 'studentweb');
DEFINE('DB_PASSWORD', 'omaleycat');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'dept_emp');

$enlace = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR dies('No se pudo conectar a Mysql: ' .
  mysqli_connect_error());

      //mysql_connect("localhost","root","");
      $NAme = $_POST ["nombre"];
      $LOca = $_POST ["localidad"];
      $DEpart = $_POST ["Bloque"];
      $ssql="UPDATE dept SET dname='$NAme',loc='$LOca' WHERE deptno='$DEpart'";
      $result = @mysqli_query($enlace, $ssql);

      //mysqli_db_query("dept_emp",$ssql);
   ?>
   <h2><div align ="center">Registro Actualizado</div></h2>
   <a href="bloques.php"><center>Visualizar el contenido de la tabla
             Bloques</center></a>
</body>
</html>
