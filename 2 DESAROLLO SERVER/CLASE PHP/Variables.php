<?php
// VARIABLE NUMERICA
$numero = 5; 
echo "Esto es una variable : $numero";
echo "<br>";

// VARIABLE TEXTO
$palabra = "Palabra";
echo "Esto es una variable texto : $palabra"; 
echo "<br>";

// VARIABLE BOOLEAN
$boleana = true;

echo "Esto es una variable boleana : $boleana";
echo "<br>";

// VARIABLE ARREGLO
$colores = array("rojo","amarillo");

echo "Esto es una variable arreglo : $colores[0]";
echo "<br>";

// VARIABLE ARREGLO CON PROPIEDADES
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "Esto es una variable arreglo con propiedades : $verduras[verdura1]";
echo "<br>";

// VARIABLE OBJETO

$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto : $frutas->fruta1";
echo "hola $frutas";


?>