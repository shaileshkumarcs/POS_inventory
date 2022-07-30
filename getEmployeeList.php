<?php 


require("connection.php");

$sql = "SELECT * FROM employee";

$result = $conn->query($sql);

$employeeList = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	$employeeList[] = $row;
  }
  echo json_encode(array('status'=> '100', 'data' => $employeeList));
} else {
  echo json_encode(array('status'=> '101', 'msg' => 'Data not found!'));
}
$conn->close();
