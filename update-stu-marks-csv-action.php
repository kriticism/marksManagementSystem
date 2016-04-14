<?php

//database connection details
include_once "dbConnect.php";
include_once "layout.php";

require_once "Includes/SessionAuth.php";
require_once "Includes/SessionAuthProf.php";    


drawHeader("maksPage", "KS");

echo 'hi!';
// $connect = mysql_connect('localhost','root','123456');

// if (!$connect) {
//  die('Could not connect to MySQL: ' . mysql_error());
// }

//your database name
// $cid =mysql_select_db('test',$connect);

// path where your CSV file is located
define('CSV_PATH','C:\wamp\www\mms\\');

// Name of your CSV file
$csv_file = CSV_PATH . "test.csv"; 


if (($handle = fopen($csv_file, "r")) !== FALSE) {
   fgetcsv($handle);   
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
          $col[$c] = $data[$c];
        }
// 1admn_no	2course_id	3subject_id	4semester	5mid_sem_marks	6end_sem_marks	
// 7class_performance	8total_marks	9grade	10status	11grade_val

 $col1 = $col[0];
 $col2 = $col[1];
 $col3 = $col[2];
 $col4 = $col[3];
 $col5 = $col[4];
 $col6 = $col[5];
 $col7 = $col[6];
 $col8 = $col[7];
 $col9 = $col[8];
 $col10 = $col[9];
 $col11 = $col[10];
   
// SQL Query to insert data into DataBase
// $query = "CREATE TABLE IF NOT EXISTS csvtbl (
//         ID INT NOT NULL,
//         PRIMARY KEY(id),
//         name   VARCHAR(10) NOT NULL,
//         city   VARCHAR(10) NOT NULL
//     );";
// $s = mysql_query($query)  or die(mysql_error());

//$query = "INSERT INTO csvtbl(ID,name,city) VALUES('".$col1."','".$col2."','".$col3."')";
$query = "INSERT INTO marks(admn_no,course_id,subject_id,semester,mid_sem_marks,end_sem_marks,class_performance,total_marks,grade,status
) VALUES('".$col1."','".$col2."','".$col3."','".$col4."','".$col5."','".$col6."','".$col7."','".$col8."','".$col9."','".$col10."')";
$s = mysql_query($query) or die(mysql_error());

$query = "INSERT INTO `gpa_card` (`admn_no`, `course_id`, `semester`, `subject_id`, `credit_hours`, `credit_points`, `grade`, `grade_val`, `status`) VALUES('".$col1."','".$col2."','".$col4."','".$col3."','NULL','NULL','".$col9."','".$col11."','".$col10."')";
$s = mysql_query($query) or die(mysql_error());

$query = "UPDATE `gpa_card`,`subject`
	SET `gpa_card`.`credit_hours` = `subject`.`credit_hours`
WHERE `gpa_card`.`subject_id`=`subject`.`id`;";
$s = mysql_query($query) or die(mysql_error());

$query = "UPDATE `gpa_card` SET `credit_points`=`credit_hours`*`grade_val`;";

$s = mysql_query($query) or die(mysql_error());

 }
    fclose($handle);
}

echo "File data successfully imported to database!!!";
// header('Location: admin-home.php');
echo ('HOGAYA!!!');
?>