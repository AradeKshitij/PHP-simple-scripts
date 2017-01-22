<?php
	session_start();
	
	if(!isset($_SESSION['UID'])){
		header('Location:index.php');
	}
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

<div class="panel panel-danger">
	<div class="panel-heading">User Operations</div>
	<div class="panel-body">
		
		
	<table class="table table-hover">
  <thead>
    <tr>
      <th>Uid</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
	
	<?php
		$conn = mysqli_connect('localhost','root','vlab', 'hack5');
		
		if($conn) {
			
		}else {
			die (mysqli_connect_error());
		}
		
		$sql = "SELECT * FROM users WHERE uid !=".$_SESSION['UID'];
	
		$res = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($res)) {
			?>
			
			<tr>
      	<td><?php echo $row['uid'] ?></td>
      	<td><?php echo $row['firstName'] ?></td>
      	<td><?php echo $row['lastName'] ?></td>
      	<td><?php echo $row['username'] ?></td>
      	<td>
      	<a href="updateUser.php?uid=<?php echo $row['uid'] ?>" style="color: #006699;">
      			<span class="glyphicon glyphicon-pencil"></span>
      		</a>
      	
      	</td>
      	<td>
      		<a href="deleteUser.php?uid=<?php echo $row['uid'] ?>" style="color: red;">
      			<span class="glyphicon glyphicon-remove"></span>
      		</a>
      	</td>
    	
    	</tr>
			
			<?php
		}
	?>
		
	
    
    
  </tbody>
	</table>
		
		
		
	</div>
</div>






















