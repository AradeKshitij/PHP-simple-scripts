<?php
	session_start();
	
	if(isset($_SESSION['UID'])){
		header('Location:home.php');
	}
	
	if(isset($_POST['login'])){
		$conn = mysqli_connect('localhost','root','vlab', 'hack5');
		
		if($conn) {
			
		}else {
			die (mysqli_connect_error());
		}
		
		$user = $_POST['uname'];
		$pass = $_POST['pass'];
		
		$sql = "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'";
	
		$res = mysqli_query($conn, $sql);
		
		$count = mysqli_num_rows($res);
		
		if($count == 0){
			echo 'login failed';
		} else {
			//starts the session
			session_start();
			while($row = mysqli_fetch_assoc($res)) {
				$_SESSION['UID'] = $row['uid'];
				$_SESSION['FIRST_NAME'] = $row['firstName'];
				$_SESSION['LAST_NAME'] = $row['lastName'];
				$_SESSION['USERNAME'] = $row['username'];
			}
			header("Location:home.php");
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


<div class="main">


	<div class="panel panel-primary" style="width:300px; margin:auto;margin-top: 250px">
		<div class="panel-heading"><h3>Login</h3></div>
		<div class="panel-body">
		
		<form action="" method="post">
		Username: <input class="form-control field-margin" type="text" name="uname"/>
		Password: <input class="form-control field-margin" type="password" name="pass"/>
		<input class="btn btn-primary" type="submit" name="login" value="Login" />
		<a class="new-acct" href="createAccount.php">Create Account</a>
		</form>
		</div>
	</div>
	
	
</div>



























</body>
</html>
