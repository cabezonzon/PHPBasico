<?php
include ("conexion.php");
if ((isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
    (isset($_POST['pw']) && !empty($_POST['telefono'])) && 
    (isset($_POST['telefono']) && !empty($_POST['telefono'])))
{

$con = mysql_connect($host, $user, $pw) or die("Problemas al conectar"); //conectar con el servidor
mysql_select_db($db,$con) or die("problemas al conectar a la bd"); //conectar con la bd

mysql_query("INSERT INTO codigoF (nombre,pw,telefono) VALUES ('$_POST[nombre]','$_POST[pw])','$_POST[telefono]')",$con); //para hacer consultas
ECHO "Datos insertados";    
}else{
    ECHO "Problemas al instertar datos";
}

?>

