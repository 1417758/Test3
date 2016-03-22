<?php
/**
 * Created by PhpStorm.
 * User: michaelcrabb
 * Date: 18/11/2015
 * Time: 09:43
 */
$db = new mysqli(
    "ap-cdbr-azure-east-c.cloudapp.net",
    "b592f05b3b6e2e",
    "4e021d86",
    "acsm_0c1b561097cfd9e"
);
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}