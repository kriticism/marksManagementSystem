<?php
	include_once "dbConnect.php";

	  	$read_query = "SELECT * FROM branch;";
		$read_ptr = mysql_query($read_query);

		while($read_list = mysql_fetch_assoc($read_ptr)){
			echo "item_id =". $read_list['id']." "."item_name =". $read_list['name']."<br>";
		}

?>