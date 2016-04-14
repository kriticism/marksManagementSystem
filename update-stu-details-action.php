<?php
	include_once "dbConnect.php";
	include_once "layout.php";
	
	require_once "Includes/SessionAuth.php";
	require_once "Includes/SessionAuthStu.php";	
	
	drawHeader("maksPage", "KS");

?>

UPDATE student_details
SET sex='F', nationality='Indian', blood_grp='O+', mobile_no='7549009342', email_id='kriti96.singh@gmail.com', permanent_addr_1='jhgfj', permanent_addr_2='kjhkj', city='M', state='M', father_name='pa', mother_name='Ma', parent_mobile_number='54533.2'
WHERE admn_no='2013JE0385';