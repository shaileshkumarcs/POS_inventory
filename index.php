<!DOCTYPE html>
<html>
<head>
	<title>Make Ajax Call</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<!-- <form action="" id="saveformdata"> -->
			<div class="form-group">
				<label>Name</label>
				<input type="text" id="name" name="name" placeholder="Name" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Employee Id</label>
				<input type="text" id="employee_id" name="employee_id" placeholder="Employee Id" class="form-control" required>
			</div>
			<input type="submit"  name="SAVE" onclick="saveformdata();" class="btn btn-primary">
		<!-- </form> -->

		<div class="row">
			<div class="" style="padding-top: 50px">
				<h1>Employee List</h1>
				<div id="employeeListHtml">
				</div>
			</div>
		</div>
	</div>
</body>

<script type="text/javascript">

getEmployeeList();
function getEmployeeList(){
	// alert("getEmployeeList");
	$.ajax({
	  type: "GET",
	  url: 'getEmployeeList.php',
	  dataType: 'json',
	  success: function(data){
	  	// console.log("RESPONSE", data.data);
	  	if(data.status == 100){
	  		var data = data.data;
	  		var datahtml = "<table class='table table-bordered'><tr><th>Sl.No.</th><th>Name</th><th>Email</th><th>Employee Id</th></tr>";
	  		$.each(data, function(index, value){
	  			// console.log(value.name);
	  			datahtml += "<tr><td>"+(index+1)+"</td><td>"+value.name+"</td><td>"+value.email_id+"</td><td>"+value.employee_id+"</td></tr>";

	  		});
	  		datahtml += "</table>";
	  		$('#employeeListHtml').html(datahtml);	

	  	}
	  	else{
	  		alert(data.msg);
	  	}
	  }
	});
}

function saveformdata(){
	var name = $('#name').val();
	var email = $('#email').val();
	var employee_id = $('#employee_id').val();

	var data = {
		'name': name,
		'email': email,
		'employee_id': employee_id,
	}
	$.ajax({
	  type: "POST",
	  url: 'save.php',
	  data: data,
	  dataType: 'json',
	  success: function(data){
	  	if(data.statuis == 100){
	  		alert(data.msg);
	  	}
	  	else{
	  		alert(data.msg);
	  	}
	  }
	});
}
</script>
</html>