<?php
	if(!isset($_SESSION['id'])&& !isset($_SESSION['name']) ) // If session is not set then redirect to Login Page
		{
			header("Location:Login.html");  
		}
	else{				
		$id = $_GET['id'];
		$result = mysqli_query($db, "DELETE FROM users WHERE id=$id");
		header('Location:../home.php/?page=home', true, 302);
		exit;
	}
?>