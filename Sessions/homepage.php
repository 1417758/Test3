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
<br/><br/>
<h3>Week 10 - Advanced PHP</h3>
<h2>Task Two: Using Forms to Send Information</h2>
<form id="form1" autocomplete="on" action="<? echo $_SERVER["PHP_SELF"] ?>" method="get">
    name <input type="text" name="title" value="John&John ARR Haulage" readonly disabled size="40">
    <br/>
    email <input type="email" name="email" autocomplete="off" autofocus>
    <br/>
    category <input list="browsers" name="browseList">
    <datalist id="browsers">
        <option value="cat">
        <option value="dog">
        <option value="alien">
        <option value="monster">
        <option value="bambi">
    </datalist>
    <br/>
    comments <textarea rows="4" cols="25" name="shoeHelp_iptProb"></textarea>
    <br/>
    <input type="submit" value="Submit">
    <input type="submit" formmethod="post" formaction="demo_post.asp" value="Submit using POST">
    <input type="submit" formtarget="_blank" value="Submit to a new window">
</form>


