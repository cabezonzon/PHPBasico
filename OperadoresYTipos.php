<?php
/*
Operadores de Aritmetica
Adicion (+)
Substraccion (-)
Multiplicacion (*)
Division (/)
Porcentaje (%)
*/
//ejemplo +, idem para -,*,/
$adicion = 4 + 4; 
$multiplicacion = $adicion * 3;
echo "<p> OPERADORES ARITMETICOS <p/>";
echo "<p> EJEMPLO DE LA SUMA <p/>";
echo $adicion;
echo "<br>";
echo $multiplicacion;

//ejemplo =
$valor1 = "hola";
$valor2 = 20;

echo "<p> EJEMPLO ASIGNACION <p/>";
echo $valor1;
echo "<br>";
echo $valor2;

//ejemplo .
$texto = "yo tengo ". 20 ."anos";
echo "<p>EJEMPLO DE CONCATENACION <p/>";
echo $texto;

/*Operadores de comparacion
Igual (==)
Identico (===)
Diferente (!= o <>)
No identicos (!==)
menos mayor etc, igual a java
 */
echo "<p> OPERADORES DE COMPARACION <p/>";
echo (6 >= 4);
echo "<br>";
echo (5 == 11);

//ejemplo  @ (comparador de errores), al ponerlo ante de la sentecia que da el error, lo saca de la vista de usuario
echo "<p> OPERADORES DE ERROR <p/>";
echo 'hola';
@define(); //esto deberia producir un error

//Operadores de incremento (++) o decrecimiento (--)
$variable = 3;

echo "<p> OPERADORES DE INCREMENTO <p/>";
echo $variable++;
echo "<br>";
echo $variable;

/*
OPERADORES DE LOGICA
Y (&& o and) - Devuelve 1 si ambos operadores son 1
O (|| o or) - Devuelve 1 si algun operador es 1
O exclusivo (xor) - Devuelve 1 si solo 1 operador es 1
*/

echo "<p> Operadores de logica <p/>";
echo ((2 == 2) && (2 !=1));
echo "<br>";
echo ((3 == 3) or (4 != 4));

?>

