<?php 

require("connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$employee_id = $_POST['employee_id'];

$sql = "INSERT INTO employee (`name`, `email_id`, `employee_id`) VALUE('$name', '$email', '$employee_id')";
if($conn->query($sql) === TRUE){

	$response = array('status'=> 100, 'msg'=> 'Employee successfully inserted!');
}
else{
	$response = array('status'=> 101, 'msg'=> 'Employee not inserted!');

}

echo json_encode($response);