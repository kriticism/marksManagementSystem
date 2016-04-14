<?php
	include_once "dbConnect.php";
	include_once "layout.php";
	
	require_once "Includes/SessionAuth.php";
	require_once "Includes/SessionAuthProf.php";	
	

	drawHeader("maksPage", "KS");

	$courseID = $_POST['course_id'];
	$semester = $_POST['semester'];
	$subjectID = $_POST['subject_id'];

	// $qry = "SELECT * FROM user WHERE id='$username' and password='$password' ";
	// $result = mysql_query($qry);
	
	// //mysql_num_row count_row
	// $count  = mysql_num_rows($result);

	// // If the result matched one entry
	// if($count==1){
?>
<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<?php  

					drawProfSidebar();
					?>
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Enter the following information</h3>
							</div>
							<div class="module-body">
        
                                    
                          <div class="module">
							<div class="module-head">
								<h3>Upload Marks</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Course ID</th>
											<th>Semester</th>
											<th>Subject ID</th>
										</tr>
									</thead>
									<tbody>
										<tr class="odd gradeX">
											<td class="center">'.$courseID.'</td>
											<td class="center">'.$semester.'</td>
											<td class="center">'.$subjectID.'</td>
										</tr>
										</tfoot>
								</table>
							</div>
						</div><!--/.module-->
						
									<form class="form-horizontal row-fluid" action="update-stu-marks-action.php" method="post">
										<div class="control-group">

										<input style="display: none;" type="text" id="basicinput" name="update_admn_no" placeholder="Enter Admission Number" class="span8">
										<input type="text" id="basicinput" name="update_admn_no" placeholder="Enter Admission Number" class="span8">
										<input type="text" id="basicinput" name="update_admn_no" placeholder="Enter Admission Number" class="span8">

										
											<label class="control-label" for="basicinput">Admission Number</label>
											<div class="controls">
												<input type="text" id="basicinput" name="update_admn_no" placeholder="Enter Admission Number" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Mid Semester Marks</label>
											<div class="controls">
												<input type="number" id="basicinput" name="update_mid_sem_marks" placeholder="Out of 30" class="span8">
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">End Semester Marks</label>
											<div class="controls">
												<input type="number" id="basicinput" name="update_end_sem_marks" placeholder="Out of 60" class="span8">
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Class Performanace</label>
											<div class="controls">
												<input type="text" id="basicinput" name="update_class_performance" placeholder="Out of 10" class="span8">
											</div>
										</div>
										
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Submit</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
<?php
	drawFooter();

	?>