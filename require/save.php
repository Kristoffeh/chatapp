<?php
	include 'dbconnect.php';
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
			$sql = "INSERT INTO `users`(`name`,`email`,`password`,`datecreated`) 
			VALUES ('$name','$email','$encr_password','$date')";

			if (mysqli_query($conn, $sql)) {
				echo json_encode(array("statusCode"=>200));
			}
			else {
				echo json_encode(array("statusCode"=>201));
			}
		}
		mysqli_close($conn);
	}

	if($_POST['type']==2){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$encr_pass = hash('sha256', $password);

		// get ID and use to set session to ID instead of email
		$res=mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$encr_pass'");
        $row=mysqli_fetch_array($res);
		$count = mysqli_num_rows($res);
		if($count == 1){
            $_SESSION['id'] = $row['id'];
			echo json_encode(array("statusCode"=>200));
        }
        else {
            echo json_encode(array("statusCode"=>201));
        }
        if (!$res){
	    	printf("Error: %s\n", mysqli_error($conn));
	    	exit();
		}

		/*if (mysqli_num_rows($check)>0)
		{
			$_SESSION['email'] = $email;
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}*/

		mysqli_close($conn);
	}

	if($_POST['type']==5){
		$msg = $_POST['msg'];
		$user = $_POST['user'];

		$sql = "INSERT INTO `messages`(`sentby`,`message`,`date`) 
		VALUES ('$user','$msg','$date')";

		if (mysqli_query($conn, $sql)){
			echo json_encode(array("statusCode"=>200));
		}
		else {
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
	}
?>