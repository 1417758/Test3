<?php
//echo "you are here1! login page";
include("DBConnection.php"); //Establishing connection with our database
//echo "you are here2! login page";
if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Both fields are required.";
}

//echo "you are here3! login page";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT uid FROM users WHERE username='$username' and password='$password'";
$queryResult = mysqli_query($db, $sql);

if (mysqli_num_rows($queryResult) == 1) {
    header("location: home.php"); // Redirecting To another Page
} else {
    echo "Incorrect username or password!". "<br>";
    $d_start = strtotime(time, now);
    echo date('h:i:s') . "<br>";

    //sleep for 15 seconds
    ob_flush();
    flush();
    sleep(15);

    //start again
    $d_end = strtotime(time, now);
    echo date('h:i:s') . "<br>";

    $diff = abs(strtotime($d_end) - strtotime($d_start));
    $seconds = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60 - $minuts * 60));

    echo "Did you wait 15 secs? " . $seconds;
    ob_end_flush();
    // header("location: index.php");
}

?>
<form method="post" action="index.php">
    <input type="submit" name="submit" value="index"/>
</form>

