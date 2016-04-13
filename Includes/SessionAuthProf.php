<?php 
	if($_SESSION['SESS_AUTH']!='prof')
		{
		header("location:Includes/SessionAuthFail.php");
		}
?>