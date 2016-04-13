<?php
	@ob_start();
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['password']);
	unset($_SESSION['SESS_AUTH']);
	session_destroy();
	include "layout.php";
	// echo'
	// <div class="container">
	// <div class="row">
	// 	<div class="col-md-4"></div>
	// 	<div class="col-md-4">
	// 	<div class="alert alert-success">
	// 	    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
	// 		You have been logged out successfully
	// 	</div>
	// <a href="index.php"> Login Again</a>
	// </div></div>	
	// </div>
	// ';

	header('Location: login.php');
?>