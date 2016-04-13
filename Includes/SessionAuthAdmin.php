<?php 
	if($_SESSION['SESS_AUTH']!='admin')
		{
		header("location:Includes/SessionAuthFail.php");
		}
?>