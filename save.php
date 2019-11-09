<?php
	include 'require/dbconnect.php';
	session_start();
	$date = date("d/m/Y H:i");
	
	if($_POST['type']==1){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$repassword=$_POST['repassword'];

		$encr_password = hash('sha256', $password);

		$duplicate=mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo json_encode(array("statusCode"=>201));
		}
		else{
			$sql = "INSERT INTO `users`(`name`,`email`,`password`) 
			VALUES ('$name','$email','$encr_password')";

			if (mysqli_query($conn, $sql)) {
				echo json_encode(array("statusCode"=>200));
			}
			else {
				echo json_encode(array("statusCode"=>201));
			}
		}
		mysqli_close($conn);
	}
?>