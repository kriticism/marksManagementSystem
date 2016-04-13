<?php 
	if($_SESSION['SESS_AUTH']!='MODUSER')
		{
		header("location:Includes/SessionAuthFail.php");
		}
?>