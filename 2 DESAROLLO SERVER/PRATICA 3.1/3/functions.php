<?php
/*
Taking the next array:
Write a function that takes the array as argument and shows all the data formatted as a table. The
function must take a second optional argument, an array of strings, for the table header (if no header
is provided, use the keys as header). So, the function signature must be:
function showStudentsTable (array $data, ?array $header)
Use strict types.
In the grade column, if the grade is lower than 5, it will be coloured in red, otherwise in green. Use a
foreach loop and format the table in the style you prefer

*/

declare(strict_types=1);

function showStudentsTable(array $data, ?array $header = null): void {
    // CREATE TABLE
    echo '<table border="1">';

    echo '<tr>';
    //
    if($header !== null)  {
        foreach ($header as $heading) {
            echo '<th>' , htmlspecialchars(strtoupper($heading)) , '</th>'; 
        }
    } else {
        foreach (array_keys($data[0]) as $key) {
            echo '<th>' , htmlspecialchars(strtoupper($key)), "</th>";
        }
    }
    echo '</tr>';
 

    foreach ($data as $student) {
        echo '<tr>'; 
        foreach ($student as $key => $value) {
            //
            if ($key === 'grade') {
                $value = strval($value);
                if ($value < 5) {
                    echo '<td style="color: red;">' , htmlspecialchars(strtoupper($value)) , '</td>';
                } else {
                    echo '<td style="color: green;">' , htmlspecialchars(strtoupper($value)) , '</td>';
                }
            } else {
                echo '<td>', htmlspecialchars(strval($value)) , '</td>';
            }
        }
            echo '</tr>';        
        }

        echo '</table>';
    }

$students = array(
    array("id"=> 101, "name"=> "Mike Molina", "grade"=> 5),
    array("id"=> 102, "name"=> "Mery Jane Smith", "grade"=> 8),
    array("id"=> 104, "name"=> "Arthur McFly", "grade"=> 4),
    array("id"=> 112, "name"=> "Lory Grimes", "grade"=> 1),
    array("id"=> 120, "name"=> "Carla Fontana", "grade"=> 6),
    array("id"=> 121, "name"=> "Abdul Bahar", "grade"=> 10)
);

//var_dump($students);
showStudentsTable($students); 





?> 