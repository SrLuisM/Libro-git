<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Exercise 3.2 (2)</h1>
    
<form method="post" action='../1/functions.php'>
    <label for="birthday">Enter your birthday (yyyy-mm-dd) : </label>
    <input type="text" id="birthday" name="birthday" required>
    <input type="submit" value="Send">
</form>

<?php


/*
Write in the file functions.php a function named checkBirthday that accepts a string containing a date in the format “yyyy-mm-dd” and returns the number of days until the birthday. For example, if the input data is “1990-10-10” and today is “2023-10-15”, the function must return 5. Then, in the main script, if the number o days returned is 0, show the message: 
• Today is your birthday. IES Jaume II el Just - DWES 1/3 Course 2023-2024 
If the number of days is between 1 and 7, show the message: 
• There are X days left for your birthday. 
Use the previous function to check if the input date is valid. If it’s not valid, return null. Remember to comment all the functions!! 
*/

// Incluir el archivo functions.php
include '../1/functions.php';

// Obtener la fecha de entrada del formulario
$fechaNacimiento = $_POST['date'];

// Verificar el número de días hasta el cumpleaños
$diasHastaCumpleaños = checkBirthday($fechaNacimiento);

if ($diasHastaCumpleaños === null) {
    echo "¡Fecha no válida ingresada!";
} elseif ($diasHastaCumpleaños === 0) {
    echo "¡Hoy es tu cumpleaños!";
} elseif ($diasHastaCumpleaños > 0 && $diasHastaCumpleaños <= 7) {
    echo "Faltan $diasHastaCumpleaños días para tu cumpleaños.";
} else {
    echo "Todavía no es tu cumpleaños.";
}
?>


</body>
</html>

