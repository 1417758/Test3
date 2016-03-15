<?php
include("DBConnection.php"); //Establishing connection with our database

if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Both fields are required.";
}

echo "you are here! login page";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT uid FROM users WHERE username='$username' and password='$password'";
$queryResult = mysqli_query($db, $sql);

    if (mysqli_num_rows($queryResult) == 1) {
        header("location: home.php"); // Redirecting To another Page
    } else {
        echo "Incorrect username or password!";
        echo date('h:i:s') . "<br>";

    //sleep for 5 seconds
        sleep(5);

    //start again
        echo date('h:i:s');
        echo "Try logging in again!";
        header("location: index.php");
    }

?>