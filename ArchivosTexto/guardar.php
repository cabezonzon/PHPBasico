<?php

$file = fopen("archivo.txt", "a")
or die("Problemas al crear archivo"); //crea un archivo si no existe y si hay problema avisa

fwrite($file, "Datos: ");
fwrite($file, "\n");
fwrite($file, $_POST['nombre']);
fwrite($file, "\n");
fwrite($file, $_POST['comentario']);
fwrite($file, "\n");
fclose($file);
echo "Datos guardados";
?>

