<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>EXERCISE 2</h1>

    <! -- FORMULARIO -->
    <form action="Clase02.php" method="get">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="surname">Surname : </label>
        <input type="text" id="surname" name="surname" required>
        <input type="submit" value="Send">
        <br>
    </form>


    <?php
    /*

    Make a script that reads from a query string 2 values, name and surname. Store the values in a
    associative array with the keys “name” and “surname”.
    Then, do the next operations, using the array:
    • Show the read values x 
    • Show the length of each value  X
    • Show both values in uppercase and in lowercase  x
    • Show the number of times the letter ‘a’, uppercase and lowercase, appears in each value (you
    can choose the letter you want to be shown)
    • Show both values replacing the letter ‘o’, uppercase or lowercase, by the number 0 (you can
    choose the characters if you want)


    */



    if(isset($_GET['name']) && isset($_GET['surname'])) {
        $name = $_GET['name']; 
        $surname = $_GET['surname'];

        // ARRAY 
        $asociativo = [
            'name' => $name,
            'surname' => $surname
            
        ];

        // SHOW THE READ VALUES
        echo "Name: " , $asociativo['name'], "<br>";
        echo "Surname: " , $asociativo['surname'] , "<br>";

        //SHOW THE LENGHT OF EACH VALUE
        echo "Show the lenght of each value : NAME : ",strlen($asociativo['name']) , "<br>";
        echo "Show the lenght of each value : SURNAME : ",strlen($asociativo['surname']) , "<br>";

        // SHOW BOTH VALUES IN UPPERCASE
        echo "Show both values in Uppercase : Name : ", strtoupper($asociativo['name']), "<br>";
        echo "Show both values in Uppercase : Surname : ", strtoupper($asociativo['surname']), "<br>";

        // SHOW BOTH VALUES IN LOWERCASE
        echo "Show both values in Lowercase : Name : ", strtolower($asociativo['name']), "<br>";
        echo "Show both values in Lowercase: Surname : ", strtolower($asociativo['surname']), "<br>";

        // SHOW THE NUMBER OF TIMES THE LETTER ‘A’, UPPERCASE AND LOWERCASE, 
        // APPEARS IN EACH VALUE (YOU CAN CHOOSE THE LETTER YOU WANT TO BE SHOWN) 
        $letra = "a"; 
        echo "Show the number of times the letter 'A' Uppercase : Name ", substr_count(strtoupper($asociativo['name']),strtoupper($letra)), "<br>";
        echo "Show the number of times the letter 'A' Uppercase : Surname ", substr_count(strtoupper($asociativo['surname']),strtoupper($letra)), "<br>";
        echo "Show the number of times the letter 'A' Lowercase : Name ", substr_count(strtolower($asociativo['name']),strtolower($letra)), "<br>";
        echo "Show the number of times the letter 'A' Lowercase : Surname ", substr_count(strtolower($asociativo['surname']),strtolower($letra)), "<br>";  
        
        $letraSegunda = "o";
        $remplazo = "0"; 

        // Show both values replacing the letter ‘o’, uppercase or lowercase, by the number 0 (you can
        // choose the characters if you want)
        echo "Show both values replacing the letter 'o' by the number 0 : Name : " , str_ireplace($letraSegunda, $remplazo, $asociativo['name']), "<br>";
        echo "Show both values replacing the letter 'o' by the number 0 : Surname : " , str_ireplace($letraSegunda, $remplazo, $asociativo['surname']), "<br>";



    } else {
        echo "Incorrecto";

    }

    ?>    

</body>
</html>