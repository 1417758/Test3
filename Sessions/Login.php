<?php
//echo "you are here1! login page";
include("../Heros/DBConnection.php"); //Establishing connection with our database
//echo "you are here2! login page";
if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Both fields are required.";
}
//echo "you are here3! login page";
$username = $_POST['username'];
$password = $_POST['password'];

$riteUser = "Mike";
$ritePass = "mysecretpassword";

"<br/>";
/*  ----  TEST DB DATA REQUEST  -------
echo "Test here area 51";
echo $username . "   " . $password;

$sql_query = "SELECT * FROM marvelmovies";
$result = $db1->query($sql_query);

while ($row = $result->fetch_array()){
    $a = $row['title'];
    $b = $row['yearReleased'];

    echo "<p>{$a}</p>";
    echo "<h3>" . $b . "</h3>";
}*/

if ($username==$riteUser && $password==$ritePass){
    session_start();
    setcookie('access_level_cookie', 'standarduser');
}

header('Location: loggedIn.php');



?>
<form method="post" action="index.php">
    <input type="submit" name="submit" value="Try Again"/>
</form>

