<?php

$HOST = 'localhost';
$DATABASE = 'test';
$USERNAME = 'root';
$password = "";


$conn = mysqli_connect($HOST, $USERNAME, "", $DATABASE);
if($conn->connect_error){
	die("ERROR on Connection");
}
// echo "CONNECT SUCCESSFULLY";