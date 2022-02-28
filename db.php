<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dentalnews";
$_DOMAIN_Client = 'http://localhost/DentalClinic/';

$myCon = new mysqli($servername, $username, $password, $dbname);

if ($myCon->connect_error) {
    die("Connection failed: " . $myCon->connect_error);
}
?>