<?php
//if(!isset($_SESSION)) {
  //  session_start();
	//};
//	include_once("config.php"); 
	//if(!isset($_SESSION['id']) && !isset($_SESSION['name'])) {
		//header("Location: login.php");
	//}
	//else{	
		if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['cell']) && !empty($_POST['cnic']))
		{
			//$id		 = $_POST['id'];
			$name 	 = $_POST['name'];
			$age     = $_POST['age'];
			$email 	 = $_POST['email'];
			$address = $_POST['address'];
			$cell 	 = $_POST['cell'];
			$cnic 	 = $_POST['cnic'];
			
			$check_cnic = "SELECT * FROM users WHERE cnic='$cnic'";
			$result_cnic = mysqli_query($db,$check_cnic);
				if(mysqli_num_rows($result_cnic) > 0) {
					$data = array(
						'error' => true,
						'message' => "Record Exist with the same CNIC!"
					);	
				}
				else{
					$result = mysqli_query($db, "INSERT INTO users (name,age,email,address,cell,cnic) VALUES('$name','$age','$email','$address','$cell','$cnic')") or die("Unabe to connect");
					//echo "<font color='green'>Data added successfully.";
					//echo "<br/><a href='ind	ex.php'>View Result</a>";
					$data = array(
						'error' => false,
						'message' => "Data Saved Successfully!"
					);
				}
		}
			else{
			$data = array(
				'error' => true,
				'message' => "All fields are not filled!");
			}
				echo json_encode($data);
	//}	