<?php
session_start();//permite trabajar con sesiones
include ("conexion.php");
if(isset($_POST['user'])&& !empty($_POST['user'])&&
   isset($_POST['pw'])&& !empty($_POST['pw']))
{
$con=mysql_connect($host,$user,$pw) or die ("Problemas con el server");
mysql_select_db($db,$con) or die ("Problemas con bd");

$sel=mysql_query("SELECT user,pw FROM registro where user='$_POST[user]'",$con);
$sesion=mysql_fetch_array($sel);

if ($_POST['pw']==$sesion['pw']){ //si el campo pw es igual al campo pw de la bd
    $_SESSION['username'] = $_POST['user'];
    echo "Sesion exitosa";

}else{
    echo "Combinacion erronea";
}
}else{
echo "Debes llenar ambos campos";    
}

?>
