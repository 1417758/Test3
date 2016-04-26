<?php

static $count=4;

//function
function PrintBug($name, $cat, $sum)
{
    print("Bug Name: " . $name) . "<br>";
    print("Bug Category: " . $cat) . "<br>";
    print("Bug Summary: " . $sum) . "<br>";
    print "<hr>";
}

function addBug($db, $name, $sum, $cat)
{
    PrintBug($name, $sum, $cat);
    $count = $GLOBALS['count'];
    print $count;
    print "<hr>";
    // create a SQL query as a string
    $sql_query = "INSERT INTO BUGS VALUES ($count, $name, $sum, $cat)";
    // execute the SQL query
    $result = $db->query($sql_query);

    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array
    while ($row = $result->fetch_array()) {

        echo $row;
        /*$a = $row['title'];
        $b = $row['yearReleased'];
        echo "<p>{$a}</p>";
        echo "<h3>" . $b . "</h3>";*/
    }

    //increment counter
    $GLOBALS['count']++;

}


function getBugs($db)
{
    $sql_query = "SELECT * FROM marvelmovies";
    $result = $db->query($sql_query);

    while ($row = $result->fetch_array()) {
        $a = $row['title'];
        $b = $row['yearReleased'];

        echo "<p>{$a}</p>";
        echo "<h3>" . $b . "</h3>";
    }
}

function getBugs2($db)
{
    $sql_query = "SELECT * FROM marvelmovies";
    $result = $db->query($sql_query);

    while ($row = $result->fetch_array()) {
        $a = $row['title'];
        $b = $row['yearReleased'];

        echo "<p>{$a}</p>";
        echo "<h3>" . $b . "</h3>";
    }
}