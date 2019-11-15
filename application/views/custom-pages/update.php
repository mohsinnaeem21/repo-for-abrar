<?php	
	if(isset($_POST['id'])){    
		if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['cell']) && !empty($_POST['cnic']))
		{
			$id = $_POST['id'];
			$name = $_POST['name'];
			$age = $_POST['age'];
			$email = $_POST['email'];    
			$address = $_POST['address'];
			$cell = $_POST['cell'];
			$cnic = $_POST['cnic'];
			$result = mysqli_query($db, "UPDATE users SET name='$name',age='$age',email='$email',address='$address',cell='$cell',cnic='$cnic' WHERE id=$id");				
			$data = array(
				'error' => false,
				'message' => "Data Updated Successfully!"
			);
			//header("Location: index.php");
		}
		else{				
			$data = array(
				'error' => true,
				'message' => "All fields are not filled!"
			);
			}
			echo json_encode($data);
	}