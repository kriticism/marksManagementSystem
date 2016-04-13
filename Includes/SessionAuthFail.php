<?php
	@session_start();
	@session_destroy();
	// header("Location: ../login.php?error=Access denied");
	header("Location: ../login.php");
	echo ('sess auth failed');
	exit;
?>