<?php

$arcihvo=fopen("archivo.txt", "r")
or die("Problemas al abrir el archivo.txt");

while (!feof($arcihvo)) 
{
    $traer = fgets($archivo);
    $saltodelinea = nl2br($traer);  //para leer los saltos de linea del texto
    echo $saltodelinea;
    
}

?>

