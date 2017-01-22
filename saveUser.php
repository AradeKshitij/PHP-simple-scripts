<?php
	session_start();
	
	if(!isset($_SESSION['UID'])){
		header('Location:index.php');
	}
	
	$id = $_REQUEST['id'];
	
	$f = $_POST['fname'];
	$l = $_POST['lname'];
	$u = $_POST['uname'];
	
	$sql = "UPDATE users SET firstName='".$f."', lastName='".$l."', 
						username='".$u."' WHERE uid=".$id;
						
	$conn = mysqli_connect('localhost','root','vlab', 'hack5');
		
	if($conn) {
			
	}else {
		die (mysqli_connect_error());
	}
		
	
	if(mysqli_query($conn, $sql)) {
		header('Location:operations.php');
	} else {
		echo mysqli_error($conn);
	}
?>

























