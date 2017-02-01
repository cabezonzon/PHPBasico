<?php

session_start();

if(isset($_SESSION['username'])){
    echo"puedes ver esta pagina";
    echo "<br> <a href=destruir.php>Cerrar Sesion</a>"; //crea un link para destruir.php
}else{
    echo"no puedes ver esta pagina, registrate antes";
}

?>

