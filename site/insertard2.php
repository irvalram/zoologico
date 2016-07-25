<!DOCTYPE html>
<html>
<head>
   <title>insertard2.php</title>
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

     // $enlace = mysql_connect("localhost","","");//Conexion a BD
     // mysql_select_db("emp_dept", $enlace);
      $num   = $_POST ["numero"];
      $nomb  = $_POST ["nombre"]; 
      $local = $_POST ["localidad"];

      $query = "INSERT INTO  dept(deptno, dname, loc) VALUES ($num,'$nomb','$local')";
      $stmt = mysqli_prepare($enlace, $query);
      mysqli_stmt_execute($stmt);
      
      //mysqli_stmt_bind_param($stmt, $num, $nomb, $local);
      //mysqli_stmt_execute($stmt);

      //mysqli_db_query("dept_emp","INSERT INTO dept(deptno, dname, loc)
      //VALUES($num,'$nomb','$local')");
   ?>
   <h1><div align="center">Registro insertado</div></h1>
   <center><a href="bloques.php">Visualizar contenido de los bloques</a></center>
</body>
</html>
