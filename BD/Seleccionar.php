<?php

include ("conexion.php");

$con=mysql_connect($host,$user,$pw) or die("Problemas al conectar al server");

mysql_select_db($db,$con) or die("problemas al conectar a la bd");

$registro = mysql_query("Select * from codigof where nombre='$_POST[nombre]]'") or die ("problemas en consulta");

while($reg = mysql_fetch_array($registro)){ //sirve para traer los datos ordenados de una tabla
    echo $reg['nombre']."<br/>"; 
    echo $reg['pw']."<br/>";
    echo $reg['telefono'];
}



?>

