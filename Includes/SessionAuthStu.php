<?php 
	if($_SESSION['SESS_AUTH']!='stu')
		{
		header("location:Includes/SessionAuthFail.php");
		}
?>