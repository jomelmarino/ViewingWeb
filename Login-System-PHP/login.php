<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['studentid']) && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['studentid']);
	$pass = validate($_POST['email']);
	

	if (empty($uname)) {
		header("Location: index.php?error=Student ID is required");
	    exit();
	}
	else if(empty($pass)){
        header("Location: index.php?error=Email is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE student_id='$uname' AND email='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['student_id'] === $uname && $row['email'] === $pass) {
            	$_SESSION['student_id'] = $row['student_id'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: dashboard.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect Student ID or Email");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect Student ID or Email");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>