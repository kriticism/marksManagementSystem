<?php
	include_once "dbConnect.php";
	include_once "layout.php";
	
	require_once "Includes/SessionAuth.php";
	require_once "Includes/SessionAuthStu.php";	
	
	drawHeader("maksPage", "KS");

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
								<h3>Edit your details</h3>
							</div>
								<?php 

							  	$read_query = "SELECT * FROM student_details WHERE admn_no = '2013JE0364';";
								$read_ptr = mysql_query($read_query);

								$read_list = mysql_fetch_assoc($read_ptr);

								 ?>
							<div class="module-body">									
									<form class="form-horizontal row-fluid" action= "update-stu-details-action.php">
										<div class="control-group">
											<label class="control-label" for="basicinput">First Name</label>
											<div class="controls">
												<?php
												echo '
													<input type="text" id="basicinput" value="'.$read_list['fname'].'" placeholder="fname" class="span8" disabled>
												';
												?>
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Middle Name</label>
											<div class="controls">
											<?php
											echo '
												<input type="text" id="basicinput" value="'.$read_list['mname'].'" placeholder="mname" class="span8" disabled>
											';?>
												
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Last Name</label>
											<div class="controls">
											<?php
											echo '
												<input type="text" id="basicinput" value="'.$read_list['lname'].'" placeholder="lname" class="span8" disabled>
											';?>
												
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Admission Number</label>
											<div class="controls">
											<?php
											echo '
													<input type="text" id="basicinput" value="'.$read_list['admn_no'].'" placeholder="admnnum" class="span8" disabled>
											';?>
											
											</div>
										</div>
                                        


										<div class="control-group">
											<label class="control-label">Sex</label>
											<div class="controls">
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Male
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Female
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Others
												</label>
											</div>
										</div>
										
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Nationality</label>
											<div class="controls">
											<?php
											echo '
												<input type="text" id="basicinput" value="'.$read_list['nationality'].'" placeholder="nationality" class="span8">
											
											';?>
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Blood Group</label>
											<div class="controls">
												<?php
												echo '
												<input type="text" id="basicinput" value="'.$read_list['blood_grp'].'" placeholder="blood type" class="span8">
												';?>

												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
										
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Phone Number</label>
											<div class="controls">
											<?php
											echo '
											<input type="text" id="basicinput" value="'.$read_list['mobile_no'].'" placeholder="phone num" class="span8">
											';?>

												
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
										
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Email ID</label>
											<div class="controls">
											<?php
											echo '
											<input type="text" id="basicinput" value="'.$read_list['email_id'].'" placeholder="stu mail" class="span8">
											';?>
												
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
									
                                    <div class="control-group">
											<label class="control-label" for="basicinput">Permanent Address Line 1</label>
											<div class="controls">
											<?php
											echo '
											<input type="text" id="basicinput" value="'.$read_list['permanent_addr_1'].'" placeholder="addr line 1" class="span8">
										
											';?>
												
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>

						 <div class="control-group">
											<label class="control-label" for="basicinput">Permanent Address Line 2</label>
											<div class="controls">
											<?php
											echo '

											<input type="text" id="basicinput" value="'.$read_list['permanent_addr_2'].'" placeholder="addr line 2" class="span8">
											';?>
												
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
                                        
                                         <div class="control-group">
											<label class="control-label" for="basicinput">City</label>
											<div class="controls">
												<?php
												echo '
												<input type="text" id="basicinput"  value="'.$read_list['city'].'" placeholder="City" class="span8">

												';?>
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
                                        
                                         <div class="control-group">
											<label class="control-label" for="basicinput">State</label>
											<div class="controls">
											<?php
											echo '
											<input type="text" id="basicinput" value="'.$read_list['state'].'" placeholder="state" class="span8">
											';?>
												
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
                                        
                                        <!-- <div class="control-group">
											<label class="control-label" for="basicinput">Degree</label>
											<div class="controls">
											<?php
											echo '
											<input type="text" id="basicinput" value="'.$read_list['admn_no'].'" placeholder="degree" class="span8" disabled>
											
											';?>

												
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Branch</label>
											<div class="controls">
											<?php
											// echo '
											// <input type="text" id="basicinput" value="'.$read_list['admn_no'].'" placeholder="branch" class="span8" disabled>
											//';
											?>
												
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Semester</label>
											<div class="controls">
											<?php
											//echo '
											//	<input type="text" id="basicinput" placeholder="current sem"  //value="'.$read_list['admn_no'].'"  class="span8" disabled>
											//';
											?>


											</div>
										</div>
                                        
                                        -->
                                        
                                         <div class="control-group">
											<label class="control-label" for="basicinput">Father's Name</label>
											<div class="controls">
											<?php
											echo '
											<input type="text" id="basicinput" value="'.$read_list['father_name'].'" placeholder="father\'s name" class="span8">

											';?>
												
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
									
                                    <div class="control-group">
											<label class="control-label" for="basicinput">Mother's Name</label>
											<div class="controls">
											<?php
											echo '
												<input type="text" id="basicinput" value="'.$read_list['mother_name'].'" placeholder="mother\'s name" class="span8">

											';?>
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
									
                                    <div class="control-group">
											<label class="control-label" for="basicinput">Parent's Phone Number</label>
											<div class="controls">
											<?php
											echo '
												<input type="text" id="basicinput" value="'.$read_list['parent_mobile_number'].'" placeholder="parents phn num" class="span8">

											';?>

												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
									
                                        <!-- 
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Parent's Email ID</label>
											<div class="controls">
											<?php
											// echo '
											// <input type="text" id="basicinput" value="'.$read_list['mobile_no'].'" placeholder="abc@gmail.com" class="span8">
											// ';
											?>
												
												<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>	
                                         -->
                                        
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Submit Form</button>
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
