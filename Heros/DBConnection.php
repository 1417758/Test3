<?php
/**/
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'b592f05b3b6e2e');
define('DB_PASSWORD', '4e021d86');
define('DB_DATABASE', 'MySqlDB');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$db2 = mysqli_connect('Database=acsm_0c1b561097cfd9e;Data Source=ap-cdbr-azure-east-c.cloudapp.net;User Id=b592f05b3b6e2e;Password=4e021d86');

// test if connection was established, and print any errors
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$db1 = new mysqli(
    "ap-cdbr-azure-east-c.cloudapp.net",
    "b592f05b3b6e2e",
    "4e021d86",
    "acsm_0c1b561097cfd9e"
);
// test if connection was established, and print any errors
if (!$db1) {
    die('Connect Error: ' . mysqli_connect_errno());
}

?>