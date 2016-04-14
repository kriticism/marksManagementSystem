<?php
	include_once "dbConnect.php";
	include_once "layout.php";
	
	require_once "Includes/SessionAuth.php";
	require_once "Includes/SessionAuthProf.php";	
	
	// var_dump($_POST);

	drawHeader("maksPage", "KS");
	// echo 'huhu '.$_POST['update_admn_no'];
	$new_admn_no = $_POST['update_admn_no'];
	$new_mid_sem_marks = $_POST['update_mid_sem_marks'];
	$new_end_sem_marks = $_POST['update_end_sem_marks'];
	$new_class_performance = $_POST['update_class_performance'];

	echo ("entered: ".$new_admn_no." ".$new_mid_sem_marks." ".$new_end_sem_marks." ".$new_class_performance);

	// update query


  	$update_marks_query = "INSERT INTO `marks` (`admn_no`, `course_id`, `subject_id`, `semester`, `mid_sem_marks`, `end_sem_marks`, `class_performance`, `total_marks`, `grade`,`status`) VALUES ('".$new_admn_no."', 'btechcse', 'phy', '1', '".$new_mid_sem_marks."', '".$new_end_sem_marks."','".$new_class_performance."','70', 'A', 1);";
  	mysql_query($update_marks_query) or die(mysql_error());

  	$update_gpa_card_query = "INSERT INTO `gpa_card` (`admn_no`, `course_id`, `semester`, `subject_id`, `credit_hours`, `credit_points`, `grade`, `grade_val`, `status`) VALUES ('".$new_admn_no."', 'btechcse', '1', 'phy', NULL, NULL, 'A', '9', '1');";
	mysql_query($update_gpa_card_query) or die(mysql_error());

	mysql_query("UPDATE `gpa_card`, `subject` SET `gpa_card`.`credit_hours` = `subject`.`credit_hours` WHERE `gpa_card`.`subject_id`=`subject`.`id`;") or die(mysql_error());

	mysql_query("UPDATE `gpa_card` SET `credit_points`=`credit_hours`*`grade_val`;") or die(mysql_error());
?>