<?php
	//start the session
	session_start();
	//connect to the database
	include_once "dbConnect.php";
	include "layout.php";
	
	//store form info
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	//-->to protect from sql injection
	$username = addslashes($username);
	$password = addslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	// Encrypt password for protection	
	// $password = md5($password);

	$qry = "SELECT * FROM user WHERE id='$username' and password='$password' ";
	$result = mysql_query($qry);
	
	//mysql_num_row count_row
	$count  = mysql_num_rows($result);

	// If the result matched one entry
	if($count==1){
			$row = mysql_fetch_array($result);
			//if the row matched is fetched successfully
			if(is_array($row)){
				$_SESSION["user"]=$row['id'];
				$_SESSION["password"]=$row['password'];
				$_SESSION['SESS_AUTH']=$row['auth_id'];
				if($row['auth_id']=='admin') //  && $row['verified']==1
				{
					
					header('Location: admin-home.php');
					// echo ('ADMIN!!!');
				}
				else if($row['auth_id']=='prof') //  && $row['verified']==1
				{
					header('Location: prof-home.php');
					// echo ('PROF!!!');
				}
				else if($row['auth_id']=='stu') // && $row['verified']==0
				{
					header('Location: student-home.php');
					// echo ('STUD!!!');
				}

			}
	}
	else{
		// drawHeader("","");
		// drawNavbar();
		echo'';
		echo'
		<div class="container">
			<div class="col-md-5">
				<div class="alert alert-danger">
					Oops! The password you entered is incorrect. <br/>Please try again (make sure your caps lock is off).
				</div>
				<button class="btn btn-warning">
					<a href="index.php" style="color:white;text-decoration:none;">Try again</a>
				</button>
			</div>
		</div>';
		//echo $usernameCL."<br/>";
		//echo $passwordCL."<br/>";
		//echo $count."<br/>";
		//echo"bye";
	}


?>