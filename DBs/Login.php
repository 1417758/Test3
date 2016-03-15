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
        echo "Incorrect username or password!\n";
        echo date('h:i:s') . "<br>";

    //sleep for 25 seconds
        ob_flush();
        flush();
        sleep(25);

    //start again
        echo date('h:i:s');
        echo "Try logging in again!";
        ob_end_flush();
       // header("location: index.php");
    }

?>