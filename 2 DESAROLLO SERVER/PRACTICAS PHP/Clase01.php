<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>EXERCISE 1</h1>

    <! -- FORMULARIO -->
    <form action="Clase01.php" method="get">
        <label for="radius">Ingresa el Radio : </label>
        <input type="text" id="radius" name="radius" required>
        <input type="submit" value="Enviar">
        <br>
    </form>


    <?php
    /*

    Make a script that read from a query string a circle’s radius value and show the diameter, circumference
    (perimeter) and area values. Define a constant for the PI value.

    */

    // PI Constant
    define("PI", 3.14159); 

    if(is_numeric($_GET['radius'])) { // VALIDAMOS QUE INTRODUCCIMOS ALGO
        $radius = $_GET['radius']; // OBTENEMOS EL VALOR POR EL USUARIO
        echo "<br>";

        echo "<h3>You have entered the Radius value : $radius</h3><br>";

        // FORMULA OF DIAMETER
        $diameter = $radius * 2;
        echo "The diameter is : $diameter";
        echo "<br>";

        // FORMULA OF CIRCUMFERENCE 
        $circumference = 2 * PI * $radius; 
        echo "The Circumference is : $circumference";
        echo "<br>";

        // FORMULA OF AREA
        $area = PI * $radius * $radius; 
        echo "The area is : $area";
        echo "<br>";


    } else {
        echo "Incorrecto";
    }




    ?>    

</body>
</html>