<?php
include("Function.php");

//comment
session_start();
$accessLevel = ($_COOKIE['access_level_cookie']);
echo $accessLevel;"<br/>";

//invoke function
displayAccessLevelInformation2($accessLevel);

//function (GO TO Functions.php)
function displayAccessLevelInformation($accessLevel)
{
    if ($accessLevel == "standarduser") {
        echo "<p style=\"background-color:lightgreen\">You are currently logged in as a standard user</p>";
    } elseif ($accessLevel == "root") {
        echo "<p style=\"background-color:palevioletred\">You are currently logged in as a root user</p>";
        echo "<p style=\"background-color:palevioletred\">You now have access to additional administrative features</p>";
    }
}

?>


