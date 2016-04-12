<?php
include("Function.php");

//comment
session_start();
$accessLevel = ($_COOKIE['access_level_cookie']);
echo $accessLevel;
"<br/>";

//invoke function
displayAccessLevelInformation2($accessLevel);

/*function (GO TO Functions.php)
function displayAccessLevelInformation($accessLevel)
{
    if ($accessLevel == "standarduser") {
        echo "<p style=\"background-color:lightgreen\">You are currently logged in as a standard user</p>";
    } elseif ($accessLevel == "root") {
        echo "<p style=\"background-color:palevioletred\">You are currently logged in as a root user</p>";
        echo "<p style=\"background-color:palevioletred\">You now have access to additional administrative features</p>";
    }
}
*/
?>
<form id="form1" autocomplete="on" action="<? echo $_SERVER["PHP_SELF"] ?>" method="get">
    <input type="text" name="title" value="John&John ARR Haulage" readonly disabled size="40">
    <br>
    <input type="email" name="email" autocomplete="off" autofocus>
    <br>
    <input list="browsers" name="browser">
    <datalist id="browsers">
        <option value="cat">
        <option value="dog">
        <option value="alien">
        <option value="monster">
        <option value="bambi">
    </datalist>

    <input type="submit" value="Submit">
    <input type="submit" formmethod="post" formaction="demo_post.asp" value="Submit using POST">
    <input type="submit" formtarget="_blank" value="Submit to a new window">
</form>


