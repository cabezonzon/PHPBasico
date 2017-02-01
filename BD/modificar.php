<?php

include ("conexion.php");
$con =mysql_connect($host,$user,$pw) or die("Problemas en el server");
mysql_select_db($db,$con) or die ("Problemas con base de datos");
mysql_query("UPDATE codigof set nombre='$_POST[nuevo]' where nombre='$_POST[viejo]'",$con)
        or die (mysql_error());
echo"Actualizacion correcta";
?>

