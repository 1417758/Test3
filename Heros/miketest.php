<?php
/**
 * Created by PhpStorm.
 * User: 1417758
 * Date: 22/03/2016
 * Time: 10:05
 */
include("DBConnection.php");
"<br/>";
echo "Mike Test53";

$sql_query = "SELECT * FROM marvelmovies";
$result = $db1->query($sql_query);

while ($row = $result->fetch_array()){
    $a = $row['title'];
    $b = $row['yearReleased'];

    echo "<p>{$a}</p>";
    echo "<h3>" . $b . "</h3>";
}



?>