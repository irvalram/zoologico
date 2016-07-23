<!DOCTYPE html>
<html>
<head>
    <title>Bloques</title>
    <center><img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/a2cdf511099589.560f194265a01.png"></center>
</head>
<body>
   <h1><div align="center">Lectura de la tabla </div></h1>
   <br>
   <?php //Comentario. Conexión con la base de datos
       $enlace = mysql_connect ("127.0.0.1","root",""); //conexion a mysql
       mysql_select_db("dept_emp",$enlace); //conexion con la bd
       $result=mysql_db_query("dept_emp","SELECT * FROM dept" );
   ?>
   <table align="center" border=1>
   <tr>
      <th>Bloques</th>
      <th>Nombre</th>
      <th>Zona</th>
   </tr>
   <?php //Mostrar los registros
      while($renglon=mysql_fetch_array($result))
      {
         echo '<tr><td>' . $renglon[0]. '</td>';
         echo     '<td>' . $renglon[1]. '</td>';    
         echo     '<td>' . $renglon[2]. '</td></tr>'; 
      }
      mysql_free_result($result);
   ?>
   </table>
   <br><br>
   <div align="center">
   <a href="insertard1.php">Insertar un nuevo registro</a><br>
   <a href="actualizard1.php">Actualizar un registro </a><br>
   <a href="borrard1.php">Borrar un registro</a></Br>
   </div>
</body>
</html>
