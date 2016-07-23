<html>
<head>
   <title>insertard2.php</title>
   <center><img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/a2cdf511099589.560f194265a01.png"></center>
</head>
<body>
   <?php
      $enlace = mysql_connect("localhost","","");//Conexion a BD
      mysql_select_db("emp_dept", $enlace);
      $num   = $_POST ["numero"];
      $nomb  = $_POST ["nombre"]; 
      $local = $_POST ["localidad"];
      mysql_db_query("emp_dept","INSERT INTO dept(deptno, dname, loc)
      VALUES($num,'$nomb','$local')");
   ?>
   <h1><div align="center">Registro insertado</div></h1>
   <center><a href="departamento.php">Visualizar contenido del departamento</a></center>
</body>
</html>
