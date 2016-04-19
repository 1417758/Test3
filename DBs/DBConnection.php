<?php
define('DB_SERVER', 'us-cdbr-azure-southcentral-e.cloudapp.net');
define('DB_USERNAME', 'be31e1c134797a');
define('DB_PASSWORD', 'd1447901');
define('DB_DATABASE', 'MY1417758');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$db2 = mysqli_connect('Database=MY1417758;Data Source=us-cdbr-azure-southcentral-e.cloudapp.net;User Id=be31e1c134797a;Password=d1447901');

$user = $userName;

function SaveUser($userName) {
    $user = $userName;
}
function GetUser() {
    return $user;
}
?>