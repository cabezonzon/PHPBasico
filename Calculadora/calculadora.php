<?php



$operacion = $_POST['lista'];



if((isset($_POST['c1']) && !empty($_POST['c1'])) &&
(isset($_POST['c1']) && !empty($_POST['c1'])) &&
(isset($_POST['c1']) && !empty($_POST['c1']))) {
    
echo "El resultado es: ";
switch ($operacion) 
{
    case "sumar":
    echo $_POST['c1'] + $_POST['c2'] + $_POST['c3'];
    break;    
    
    case "restar":
    echo $_POST['c1'] - $_POST['c2'] - $_POST['c3'];
    break;    
    
    case "multiplicar":
    echo $_POST['c1'] * $_POST['c2'] * $_POST['c3'];
    break;    
    
    case "dividir":
    echo $_POST['c1'] / $_POST['c2'] / $_POST['c3'];
    break;    
    
default : echo "No se a podido realizar la operacion";
}
}else{
    echo "debes insertar un valor en todos los campos";
}
?>

