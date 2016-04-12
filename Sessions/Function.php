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
function PrintKeyAndValue($key, $value)
{

    print("<ul>");
    print("<li>");
    print("key: " . $key);
    print("</li>");
    echo "<br/>";
    print("<li>");
    print("value: " . $value);
    print("</li>");
    print("</ul>");
    print("</li>");
    echo "<br/><br/>";

}