<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>EXERCISE 3</h1>


    <?php
    /*
        Exercise 3
        Make a script that generates 7 random numbers to play the Euromillones game. The first 5 numbers
        must be between 1 and 50, and the last 2 numbers must be between 1 and 12. Use the function
        mt_rand() (read the documentation).
        The numbers must be stored in two numeric arrays, one for the numbers between 1 and 50 and the
        other for the numbers from 1 to 12. Don’t worry if the numbers are repeated.
        Once stored, show them using the arrays orderly, from least to greatest number

    
    
    */

    // NUMEIC ARRAYS 
    $number50 = [];
    $number12 = [];

    for($i = 0; $i < 5; $i++) {
        $number50[] = mt_rand(1,50);
    }

    for($i = 0; $i < 2; $i++) {
        $number12[] = mt_rand(1,12);
    }

    sort($number50); 
    sort($number12); 
    
    echo "Numbers between 1 and 50 : " ,implode("- ", $number50), "<br>";
    echo "Numbers between 1 and 12 : " ,implode("- ", $number12);









    ?>

</body>
</html>