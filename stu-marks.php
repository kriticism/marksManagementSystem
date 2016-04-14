<?php
	include_once "dbConnect.php";
	include_once "layout.php";
	require_once "Includes/SessionAuth.php";
	require_once "Includes/SessionAuthStu.php";	
	drawHeader("View Marks", "KS");

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
								<h3>Semester-wise records</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>subjjjject_id</th>
											<th>semester</th>
											<th>mid_sem_marks</th>
											<th>end_sem_marks</th>
											<th>grade</th>
										</tr>
									</thead>
									<tbody>

										<?php 
											
											$admn_no_queried_for = $_SESSION['user'];


									  	$read_query = "SELECT * FROM marks WHERE admn_no = '".$admn_no_queried_for."' ORDER BY semester ASC;";
										$read_ptr = mysql_query($read_query);

										while($read_list = mysql_fetch_assoc($read_ptr)){
											
											echo '
												<tr class="odd gradeX">
													<td>'.$read_list['subject_id'].'</td>
													<td>'.$read_list['semester'].'</td>
													<td>'.$read_list['mid_sem_marks'].'</td>
													<td class="center">'.$read_list['end_sem_marks'].'</td>
													<td class="center">'.$read_list['grade'].'</td>
												</tr>
											';
										}


										 ?>
										
										
									</tbody>
									<tfoot>
										<tr>
											<th>subject_id</th>
											<th>semester</th>
											<th>mid_sem_marks</th>
											<th>end_sem_marks</th>
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
