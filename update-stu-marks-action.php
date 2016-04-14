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
	
	
	
	$new_course_id = $_POST['course_id'];
	$new_semester = $_POST['semester'];
	$new_subject_id = $_POST['subject_id'];

	$total = $new_mid_sem_marks+ $new_end_sem_marks+ $new_class_performance;

	$gradeStr = '';
	$gradeVal = 0;
	$statusVal = 1;

	if($total >= 90){
		$gradeStr = 'A+';
		$gradeVal = 10;

	}else if($total >= 80 && $total < 90){
		$gradeStr = 'A';
		$gradeVal = 9;
	}
	else if($total >= 70 && $total < 80){
			$gradeStr = 'B+';
			$gradeVal = 8;
		}
	else if($total >= 60 && $total < 70){
			$gradeStr = 'B';
			$gradeVal = 7;
		}
		else if($total >= 50 && $total < 60){
				$gradeStr = 'C+';
				$gradeVal = 6;
			}
	else if($total >= 40 && $total < 50){
			$gradeStr = 'C';
			$gradeVal = 5;
		}
	else if($total >= 35 && $total < 40){
			$gradeStr = 'D';
			$gradeVal = 4;
		}
		else if($total < 35 ){
				$gradeStr = 'F';
				$gradeVal = 0;
				$statusVal = 0;
			}

	echo "total is ".$total;

	echo ("entered: ".$new_admn_no." ".$new_mid_sem_marks." ".$new_end_sem_marks." ".$new_class_performance);

	// update query


  	$update_marks_query = "INSERT INTO `marks` (`admn_no`, `course_id`, `subject_id`, `semester`, `mid_sem_marks`, `end_sem_marks`, `class_performance`, `total_marks`, `grade`,`status`) VALUES ('".$new_admn_no."', '".$new_course_id."', '".$new_subject_id."', '".$new_semester."', '".$new_mid_sem_marks."', '".$new_end_sem_marks."','".$new_class_performance."','".$total."', '".$gradeStr."', ".$statusVal.");";
  	mysql_query($update_marks_query) or die(mysql_error());

  	$update_gpa_card_query = "INSERT INTO `gpa_card` (`admn_no`, `course_id`, `semester`, `subject_id`, `credit_hours`, `credit_points`, `grade`, `grade_val`, `status`) VALUES ('".$new_admn_no."', '".$new_course_id."', '".$new_semester."', '".$new_subject_id."', NULL, NULL, '".$gradeStr."', '".$gradeVal."', '".$statusVal."');";
	mysql_query($update_gpa_card_query) or die(mysql_error());

	mysql_query("UPDATE `gpa_card`, `subject` SET `gpa_card`.`credit_hours` = `subject`.`credit_hours` WHERE `gpa_card`.`subject_id`=`subject`.`id`;") or die(mysql_error());

	mysql_query("UPDATE `gpa_card` SET `credit_points`=`credit_hours`*`grade_val`;") or die(mysql_error());

	header('Location: prof-home.php');
?>