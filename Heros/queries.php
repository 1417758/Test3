<?php
/**
 * Created by PhpStorm.
 * User: 1417758
 * Date: 22/03/2016
 * Time: 09:39
 */


// create a SQL query as a string
$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%laser%'";
// execute the SQL query
$result = $db -> query($sql_query);

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
while($row = $result -> fetch_array()){
// process the $row
}

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
while($row = $result -> fetch_array()){
// print out fields from row of data
    echo "<p>" . $row['superheroName'] . "</p>";
}

?>