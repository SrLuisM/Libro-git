<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>EXERCISE 4</h1>

    <?php

    /*
    Read a date via query string with the values day, month and year as integers. Then show the read and
    the current date formatted (for instance “Saturday the 13th of April, 2019”) and the difference in days
    between them.
    Also show both dates as Unix timestamps.

    */ 


    // Returns the integer value of a variable. (Query String)
    $day  = intval($_GET['day']); 
    $month = intval($_GET['month']);
    $year = intval($_GET['year']); 

    // J-< DAY N-< MONTH Y-< YEAR 
    $inputDate = DateTime::createFromFormat('j-n-Y', $day . '-' . $month . '-' . $year);
    // OBJETCT 
    $currentDate = new DateTime(); 

    // l -< Day | t -< the | jS -< 1st,2nd,3rd | of-< characters of | F- < Month | Y -< Year
    $inputDateFormat = $inputDate->format('l \t\h\e jS \of F, Y');
    $currentDateFormat = $currentDate->format('l \t\h\e jS \of F,Y'); 

    // Difference in Days 
    $interval = $inputDate->diff($currentDate);
    $daysDifference = $interval->days; 

    // Obtaining Timestamps Unix
    $inputUnixTimestamp = $inputDate->getTimestamp();
    $currentUnixTimestamp = $currentDate->getTimestamp();


    echo "Entry date : $inputDateFormat<br>";
    echo "Current date : $currentDateFormat<br>";
    echo "Diffrence in Days : $daysDifference Days<br>";
    echo "Timestamp Unix From the date of entry : $inputUnixTimestamp <br>";
    echo "Timestamp Unix From the current date : $currentUnixTimestamp <br>";





    ?>

</body>
</html>