<?php
	if(isset($_POST['create'])) {
		$conn = mysqli_connect('localhost', 'root', 'vlab', 'hack5'); 
			
		if($conn) {
			echo 'Connected';
		} else {
			die(mysqli_connect_error());
		}
		
		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];
		$userName = $_POST['uname'];
		$password = $_POST['pass'];
	
		//variable names starts with doller ($) sign
	
		$sql = "INSERT INTO users(firstName, lastName, username, password)
							 VALUES('".$firstName."','".$lastName."','".$userName."','".$password."')";
	
		if(mysqli_query($conn, $sql)) {
			echo 'successfully created';
			header('Location:index.php');
		} else {
			die (mysqli_error($conn));
		}
		
	}
	
	
?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<title></title>
</head>
<body>
<div class="create-acc">






















<div class="panel panel-primary" style="width:350px; margin:auto;margin-top: 250px">
		<div class="panel-heading"><h3>Create Account</h3></div>
		<div class="panel-body">
		
		<form action="" method="post">
		
		<div style="display: inline-flex;">
			<input class="form-control" style="margin-bottom: 10px; margin-right: 10px;" type="text" name="fname"
			 					placeholder="Enter First name"/>
			<input class="form-control" style="margin-bottom: 10px" type="text" name="lname"
							 placeholder="Enter Last name"/>
		</div>
		
		
		
		
			<input class="form-control" style="margin-bottom: 10px" type="text" name="uname" placeholder="Enter username"/>
			<input class="form-control" style="margin-bottom: 10px" type="password" name="pass" placeholder="Enter password" />
			<input class="btn btn-primary" type="submit" name="create" value="Create" />
		<a class="new-acct" href="index.php">Login</a>
		</form>
		</div>
	</div>













</div>
</body>
<html>
