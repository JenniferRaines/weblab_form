<?php


function db_connect(){

$servername = "localhost";
$username = "userapp";
$password = "9c2Jru2tY5vBM79n";
$db = "userapp";

// Create connection
$conn = new mysqli($servername, $username, $password,  $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



return $conn;

}


function db_close($conn){

  mysqli_close($conn);

}
