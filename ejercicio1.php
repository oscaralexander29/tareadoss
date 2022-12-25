<?php
/* Crear un arreglo unidimensional de 5 valores enteros e imprimir el promedio y mostrarlos
ordenados descendentemente. */

/* Crear arreglo de valores enteros */
$array = array(10, 20, 30, 40);

/* Calcular promedio */
$sum = array_sum($array);
$count = count($array);
$average = $sum / $count;

/* Orden descendente del arreglo */
rsort($array);

echo "Promedio de cuatro numeros enteros es igual a:   " . $average ."%" . "\n";
echo "----------------Arreglo ordenado descendentemente------------------"."\n" . implode("\n", $array) ;


?>