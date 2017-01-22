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
		
	$sql = "DELETE FROM users WHERE uid =".$id;
	
	if(mysqli_query($conn, $sql)){
		header('Location:operations.php');
	} else{
		echo mysqli_error($conn);
	}
	
?>









