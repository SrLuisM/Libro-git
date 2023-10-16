<?php


function showTable(array $data, ?array $header = null): void {
    echo '<table border="1">';

    if($header !== null) {
        echo '<tr>';
        foreach ($header as $heading) {
            echo '<th>' , htmlspecialchars(strtoupper($heading)) , '</th>';
        }
        echo '</tr>';
    } 

    foreach ($data as $row) {
        echo '<tr>';
        foreach ($row as $value) {
            echo '<td>' , htmlspecialchars($value) , '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';


   
}

$genericData = array(
    array("id"=> 10, "name"=> "Luis Muñoz", "age"=> 20),
    array("id"=> 20, "name"=> "Mery Jane Smith", "age"=> 34),
    array("id"=> 30, "name"=> "Arthur McFly", "age"=> 45),
);

$headerView = array("ID","NAME","AGE");
showTable($genericData,$headerView);


?>