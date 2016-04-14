<?php
	include_once "dbConnect.php";
	include_once "layout.php";
	
	require_once "Includes/SessionAuth.php";
	require_once "Includes/SessionAuthProf.php";	
	

	drawHeader("maksPage", "KS");

	// $courseID = $_POST['course_id'];
	// $semester = $_POST['semester'];
	// $subjectID = $_POST['subject_id'];

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
							
						</div><!--/.module-->
						
									<form class="form-horizontal row-fluid" action="update-stu-marks-action.php" method="post">
										

										                                        <div class="control-group">
																					<label class="control-label" for="basicinput">Course ID</label>
																					<div class="controls">
																						<select tabindex="1" name="course_id" data-placeholder="Permanent" class="span8">
																							<option value="">Select here..</option>
																							<?php 
																								  	$read_query = "SELECT * FROM course;";
																									$read_ptr = mysql_query($read_query);

																									while($read_list = mysql_fetch_assoc($read_ptr)){
																										echo '<option value="'.$read_list['id'].'">'.$read_list['id'].'</option>';
																									}
																							 ?>
																						</select>
																					</div>
																				</div>

																				
										                                        <div class="control-group">
																					<label class="control-label" for="basicinput">Semester</label>
																					<div class="controls">
																						<select tabindex="1" name="semester" data-placeholder="Permanent" class="span8">
																							<option value="">Select here..</option>


																							<option value="1">1</option>
																							<option value="2">2</option>
										                                                    <option value="3">3</option>
																							<option value="4">4</option>
																							<option value="5">5</option>
																							<option value="6">6</option>
																							<option value="7">7</option>
																							<option value="8">8</option>
																						
																						</select>
																					</div>
																				</div>
										                                        
										                                        
										                                        <div class="control-group">
																					<label class="control-label" for="basicinput">Subject ID</label>
																					<div class="controls">
																						<select tabindex="1" name="subject_id" data-placeholder="Permanent" class="span8">
																							<option value="">Select here..</option>
																							<?php 
																								  	$read_query = "SELECT * FROM subject;";
																									$read_ptr = mysql_query($read_query);

																									while($read_list = mysql_fetch_assoc($read_ptr)){
																										echo '<option value="'.$read_list['id'].'">'.$read_list['name'].'</option>';
																									}
																							 ?>
																						</select>
																					</div>
																				</div>
										                                        
																				
																				
										<div class="control-group">

							
										
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
												<input type="number" id="basicinput" name="update_class_performance" placeholder="Out of 10" class="span8">
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