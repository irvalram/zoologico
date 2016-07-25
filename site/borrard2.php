<!DOCTYPE html>
<html>
<head>
   <title>borrard2.php</title>
   <center><img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/a2cdf511099589.560f194265a01.png"></center>
</head>
<body>

<?php
DEFINE('DB_USER', 'studentweb');
DEFINE('DB_PASSWORD', 'omaleycat');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'dept_emp');

$enlace = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR dies('No se pudo conectar a Mysql: ' .
  mysqli_connect_error());

      //mysql_connect("localhost","root","");//Conexion a BD
      $Depart= $_POST["Bloque"];
      
      //$ssql="DELETE FROM dept WHERE deptno=$Depart";
      //mysql_db_query("dept_emp",$ssql);
      $ssq1 = "DELETE FROM dept WHERE deptno=$Depart";
      $stmt = mysqli_prepare($enlace, $ssq1);
      mysqli_stmt_execute($stmt);
   ?>
   <h1><div align="center">Registro Eliminado</h1></div>
   <div align="center">
   <a href="bloques.php">Visualizar la tabla "Bloques"</a></div>
</body>
</html>

