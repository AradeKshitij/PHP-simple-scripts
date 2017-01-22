<?php
 	session_start();
 	if(!isset($_SESSION['UID'])){
		header('Location:index.php');
	}
	
	$id = $_REQUEST['uid'];
	
	$conn = mysqli_connect('localhost','root','vlab', 'hack5');
		
		if($conn) {
			
		}else {
			die (mysqli_connect_error());
		}
		
		$sql = "SELECT * FROM users WHERE uid =".$id;
	
		$res = mysqli_query($conn, $sql);
		?>
		
		
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="operations.php">User operations</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<div class="panel" style="width: 500px; margin: auto">

<form action="saveUser.php?id=<?php echo $id ?>" method="post" style="width:400px;">
		<?php 
		
			while($row = mysqli_fetch_assoc($res)) {
			?>
			
			<div style="display: inline-flex; width: 400px;">
			<input class="form-control" style="margin-bottom: 10px; margin-right: 10px;" 
							type="text" name="fname" value="<?php echo $row['firstName'] ?>"
			 				placeholder="Enter First name"/>
			
			<input class="form-control" style="margin-bottom: 10px" 
							type="text" name="lname" placeholder="Enter Last name" 
							value="<?php echo $row['lastName'] ?>"/>
		</div>
		
			<input class="form-control" style="margin-bottom: 10px" type="text" 
					name="uname" placeholder="Enter username" value="<?php echo $row['username'] ?>"/>
		
			<input class="btn btn-primary" type="submit" name="Save" value="save" />
			
			<?php
		}
	?>
		
</form>	
</div>


















