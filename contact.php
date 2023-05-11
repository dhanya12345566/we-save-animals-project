<?php 
session_start(); 
include "db_conn.php";



	

	$email = ($_POST['email']);
	$subject = ($_POST['subject']);
    $message = ($_POST['message']);

	$user_data = 'email='. $email.'subject='.$subject. '&message='. $message;


	
	

	if(empty($email)){
        header("Location: index.php?error=mailid is required&$user_data");
	    exit();
	}

	

	else{

		// hashing the password
        

	    $sql = "SELECT * FROM contactus WHERE email='$email'  ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: index.php?error=please fill details&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO contactus(email,subject,message) VALUES( '$email','$subject','$message')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php?success=sent");
	         exit();
           }else {
	           	header("Location: index.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}

   


