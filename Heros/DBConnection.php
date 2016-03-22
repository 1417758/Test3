<?php
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'b592f05b3b6e2e');
define('DB_PASSWORD', '4e021d86');
define('DB_DATABASE', 'acsm_0c1b561097cfd9e');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$db2 = mysqli_connect('Database=acsm_0c1b561097cfd9e;Data Source=ap-cdbr-azure-east-c.cloudapp.net;User Id=b592f05b3b6e2e;Password=4e021d86');

// test if connection was established, and print any errors
if ($db -> connect_error) {
    die('Connectfailed['.$db -> connect_error.']');
}
?>