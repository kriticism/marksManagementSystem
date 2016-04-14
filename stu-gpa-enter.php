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
								<h3>Enter the following information</h3>
							</div>
							<div class="module-body">


									<form class="form-horizontal row-fluid" action="stu-gpa-action.php" method="get">
																			
                                        <!-- <div class="control-group">
											<label class="control-label" for="basicinput">Degree</label>
											<div class="controls">
												<select tabindex="1" name="degree" data-placeholder="Permanent" class="span8">
													<option value="">Select here..</option>
													<option value="Category 1">Bachelor of Technology</option>
													<option value="Category 2">Masters of Technology</option>
													<option value="Category 3">Integrated Masters of Technology</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Branch</label>
											<div class="controls">
												<select tabindex="1" name="branch" data-placeholder="Permanent" class="span8">
													<option value="">Select here..</option>
													<option value="Category 1">Computer Science and Engineering</option>
													<option value="Category 2">Mining Engineering</option>
												</select>
											</div>
										</div> -->
                                        
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
													<option value="7">6</option>
													<option value="8">6</option>
												
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

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>