<?php
$host = 'localhost';
$username = 'root';
$dbname = 'e-ticket';
$password = '';

$conn = mysqli_connect($host,$username,$password,$dbname);

if (!$conn) {
    die('Connection Error '. mysqli_connect_error());
}