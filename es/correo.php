<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="php_login_database";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 //recuperar las variables
 if (!empty($_POST['hotel']) && !empty($_POST['checkin']) && !empty($_POST['checkout']) && !empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['correo'])) {
 $hotel=$_POST['hotel'];
 $checkin=$_POST['checkin'];
 $checkout=$_POST['checkout'];
 $nombre=$_POST['nombre'];
 $apellidos=$_POST['apellidos'];
 $correo=$_POST['correo'];
 $telefono=$_POST['telefono'];
 $mensaje=$_POST['mensaje'];
 //hacemos la sentencia de sql
 $sql="INSERT INTO datos VALUES('$hotel','$checkin','$checkout','$nombre','$apellidos','$correo','$telefono','$mensaje')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion

 echo"<h4>Datos Guardados Correctamente</h4>";
 }
   
  ?>