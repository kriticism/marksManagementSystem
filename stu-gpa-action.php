<?php
	include_once "dbConnect.php";
	include_once "layout.php";
	require_once "Includes/SessionAuth.php";
	require_once "Includes/SessionAuthStu.php";	
	drawHeader("View GPA", "KS");

?>


	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
				<?php 
					drawStuSidebar();
				 ?>
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">

							<?php
									// $sem_queried_for = 6;
									// echo "ye aaya: ".$_GET['semester'];
									// $sem_queried_for = $_GET['name'];
									// $sem_queried_for = $_GET['branch'];
									$sem_queried_for = $_GET['semester'];
									$admn_no_queried_for = $_SESSION['user'];
									// $admn_no_queried_for = '2013JE0364';
								  	$read_query = "SELECT `gpa` FROM `result` WHERE `admn_no`='2013JE0364' AND `semester`=".$sem_queried_for.";";
									$read_ptr = mysql_query($read_query) or die((mysql_error()));
									$read_list = mysql_fetch_assoc($read_ptr);

								echo '
									<h3>Semester-wise records | GPA '.$sem_queried_for.'th sem: '.$read_list['gpa'].'</h3>
								';
							?>
								
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>subject_id</th>
											<th>cred hrs</th>
											<th>cred pts</th>
											<th>grade</th>
										</tr>
									</thead>
									<tbody>

<?php 

	$read_query = "INSERT INTO result SELECT `gpa_card`.`admn_no`,`student_academic`.`course_id`,`semester`,'R',ROUND(SUM(`credit_points`)/SUM(`credit_hours` *10),2),FLOOR(SUM(`status`)/count(DISTINCT `subject_id`)) FROM `gpa_card`,`student_academic` WHERE `gpa_card`.`admn_no`=`student_academic`.`admn_no` AND `gpa_card`.`admn_no`='".$admn_no_queried_for."' and `semester`=".$sem_queried_for.";";
	mysql_query($read_query) or die((mysql_error()));

	$read_query = "SELECT `subject`.`name` as sub_name, `gpa_card`.`credit_hours`,`credit_points`,`grade`
	FROM `gpa_card`, `subject`
	WHERE `gpa_card`.`subject_id`=`subject`.`id` AND `admn_no`='".$admn_no_queried_for."' AND `semester`=".$sem_queried_for.";";
	$read_ptr = mysql_query($read_query) or die((mysql_error()));

while($read_list = mysql_fetch_assoc($read_ptr)){
	echo '
		<tr class="odd gradeX">
			<td>'.$read_list['sub_name'].'</td>
			<td>'.$read_list['credit_hours'].'</td>
			<td class="center">'.$read_list['credit_points'].'</td>
			<td class="center">'.$read_list['grade'].'</td>
		</tr>
	';
}


 ?>
										
										
									</tbody>
									<tfoot>
										<tr>
											<th>subject_id</th>
											<th>cred hrs</th>
											<th>cred pts</th>
											<th>grade</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php  
	drawFooter();
?>
