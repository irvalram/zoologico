<!DOCTYPE html>
<html>
<head>
   <title>actualizard1.php</title>
   <center><img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/a2cdf511099589.560f194265a01.png"></center>
</head>
<body>
   <div align = "center"><h1>Actualizar un registro</h1>
   <form method=“post” action="actualizard2.php">

<?php
DEFINE('DB_USER', 'studentweb');
DEFINE('DB_PASSWORD', 'omaleycat');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'dept_emp');
 

$enlace = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR dies('No se pudo conectar a Mysql: ' .
  mysqli_connect_error());

      echo 'Bloque<br>';
      $ssql = "SELECT deptno FROM dept ORDER BY deptno";
      $result = @mysqli_query($enlace, $ssql);
      echo '<select name="Bloque">';
      while ($renglon=mysqli_fetch_array($result))
      {
         echo '<option>' .$renglon[0];
      }
      echo '</select>'
?>

   <br>
   Nombre&nbsp;&nbsp;
   <input type="text" name="nombre"><br>
   Localidad&nbsp;&nbsp;
   <input type="text" name="localidad"><br><br>
   <input type="submit" value="actualizar">
   </form>
   </div>
</body>
</html>
