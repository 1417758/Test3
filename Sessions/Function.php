<?php
/**
 * Created by PhpStorm.
 * User: 1417758
 * Date: 12/04/2016
 * Time: 11:02
 */

//function doesnt work on homepage
function displayAccessLevelInformation2($accessLevel)
{
    if ($accessLevel == "standarduser") {
        echo "<p style=\"background-color:lightgreen\">You are currently logged in as a standard user</p>";
    } elseif ($accessLevel == "root") {
        echo "<p style=\"background-color:palevioletred\">You are currently logged in as a root user</p>";
        echo "<p style=\"background-color:palevioletred\">You now have access to additional administrative features</p>";
    }
}

//function
function PrintKeyAndValue(String $key, String $value )//or simply ($key, $value )
{
    print("key: ".$key);
    echo "<br/>";
    print("value: ".$value);
    echo "<br/><br/>";

}