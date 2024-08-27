<?php
$servername = "localhost";
$port = 3306; // Define a porta do MySQL
$username = "root";
$password = "Asenhanaoe123";
$dbname = "PedroPenha";


$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}





?>