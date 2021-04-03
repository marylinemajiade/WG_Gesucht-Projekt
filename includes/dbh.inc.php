<?php
//Database handler (Connect to our Database)
$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "loginsystem";

$conn =  mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

//if connection fails
if (!$conn) {
    //kill everything
    die("Connection failed" . mysqli_connect_error());
}
