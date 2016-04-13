<?php
@session_start();
if(!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
		header("location: Includes/SessionAuthFail.php");
		exit();
}
?>