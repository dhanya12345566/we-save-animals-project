<?php 
session_start(); 
include "db_conn.php";



	

	$mailid = ($_POST['mailid']);
	$username = ($_POST['username']);

	$user_data = 'name='. $username. '&mailid='. $mailid;


	
	

	if(empty($username)){
        header("Location: index.php?error=Name is required&$user_data");
	    exit();
	}

	

	else{

		// hashing the password
        

	    $sql = "SELECT * FROM member WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: index.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO member(username,mailid) VALUES( '$username','$mailid')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: index.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}

   


