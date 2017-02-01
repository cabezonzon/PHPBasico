<?php
//array predefinido
$predefinido = array("elemento1", 0 ,"elemento 2");

foreach ($predefinido as $elementos){
    echo $elementos."<br>";
}

//arrar personalizado o asociativo
$asoci = array("clave1" => "elemento1", "clave2" => 2);

foreach ($asoci as $clave => $elemento){
    echo $clave." = ".$elemento."<br>";
    
}

?>

