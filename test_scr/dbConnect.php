<?php
	// echo "Page khul gaya!";
	//database name
	$db_name="mmsdb";
	// database host
	$db_host="localhost";
	$db_user="root";
	$db_password="";

	$dbconnect = mysql_connect("$db_host","$db_user","$db_password");
	//verifying succcessful connection to the database

	if(! mysql_select_db("$db_name")){
		echo "Unable to locate database";
	}

	if(!$dbconnect){
		echo "failed to connect to databse";
		exit();
	} else{
		echo "connected to databse";
	}

?>