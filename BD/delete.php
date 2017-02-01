<?php

include ("conexion.php");
$con = mysql_connect($host, $user,$pw) or die("Problemas en el servidor");
mysql_select_db($db,$con) or die("Problemas en bd");
$reg = mysql_query("SELECT id from codigof where nombre = '$_POST[nombre]'",$con);

if ($re=  mysql_fetch_array($reg))
{
    mysql_query("DELETE FROM codigof where nombre='$_POST[nombre]'",$con);
    echo "Datos eliminados";
}else
{
    echo "Datos no han sido eliminiados";
}
?>

