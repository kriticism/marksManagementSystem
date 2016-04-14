<?php
	include_once "dbConnect.php";
	include_once "layout.php";

	
	require_once "Includes/SessionAuth.php";
	require_once "Includes/SessionAuthProf.php";	
	

	drawHeader("maksPage", "KS");

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
								<h3>Please choose the batch to proceed</h3>
							</div>
							<div class="module-body">

									<form class="form-horizontal row-fluid" action="indiv-marks-upload-form.php" method="post">
										
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