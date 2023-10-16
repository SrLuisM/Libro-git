<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>EXERCISE 5</h1>
    
    <?php

    /*

    Make a numeric array with the names of 4 fruits. Then do the next operations:
    • Show the array as a string with the elements separated by commas.
    • Show the array ordered alphabetically, in ascending order.
    • Show the array ordered alphabetically, in descending order.
    • Show the position of your favorite fruit in the array.

    */

    // ARRAYS OF FRUITS
    $fruits = array("Apple","Orange","Banana","Strawberry");

    // • Show the array as a string with the elements separated by commas.
    echo "Show the array : ", implode(", ",$fruits), "<br>";

    // ORDERED ALPHABETICALLY ASCENDING
    sort($fruits);
    echo "Show the array Ascending: ", implode(", ",$fruits), "<br>";

    // ORDERED ALPHABETICALLY DESCENDING
    rsort($fruits);
    echo "Show the array Descending: ", implode(", ",$fruits), "<br>";

    // SHOW THE FRUIT FAVORITE
    $fruitFavorite = "Apple";
    $position = array_search($fruitFavorite, $fruits);
    echo "Show the fruit favorite : $position";

    ?>


</body>
</html>