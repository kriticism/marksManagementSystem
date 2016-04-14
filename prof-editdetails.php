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
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.html">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
							<li>
								<a href="activity.html">
									<i class="menu-icon icon-bullhorn"></i>
									News Feed
								</a>
							</li>
							<li>
								<a href="message.html">
									<i class="menu-icon icon-inbox"></i>
									Inbox
									<b class="label green pull-right">11</b>
								</a>
							</li>
							
							<li>
								<a href="task.html">
									<i class="menu-icon icon-tasks"></i>
									Tasks
									<b class="label orange pull-right">19</b>
								</a>
							</li>
						</ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									More Pages
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="other-login.html">
											<i class="icon-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="other-user-profile.html">
											<i class="icon-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="other-user-listing.html">
											<i class="icon-inbox"></i>
											All Users
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="#">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Edit Employee Details</h3>
							</div>
							<div class="module-body">

									<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Warning!</strong> Something fishy here!
									</div>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Whats wrong with you? 
									</div>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Well done!</strong> Now you are listening me :) 
									</div>

									<br />

									<form class="form-horizontal row-fluid">
									<!--	<div class="control-group">
											<label class="control-label" for="basicinput">Basic Input</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type something here..." class="span8">
												<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>-->

										<div class="control-group">
											<label class="control-label" for="basicinput">First Name</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Rashmi" class="span8" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Middle Name</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="" class="span8" disabled>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Last Name</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="S" class="span8" disabled>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Employee ID</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="001" class="span8" disabled>
											</div>
										</div>
                                        



									<!--	<div class="control-group">
											<label class="control-label" for="basicinput">Tooltip Input</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" placeholder="Hover to view the tooltip…" data-original-title="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Prepended Input</label>
											<div class="controls">
												<div class="input-prepend">
													<span class="add-on">#</span><input class="span8" type="text" placeholder="prepend">       
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Appended Input</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" placeholder="5.000" class="span8"><span class="add-on">$</span>
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Dropdown Button</label>
											<div class="controls">
												<div class="dropdown">
													<a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Dropdown Button <i class="icon-caret-down"></i></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="#">First Row</a></li>
														<li><a href="#">Second Row</a></li>
														<li><a href="#">Third Row</a></li>
														<li><a href="#">Fourth Row</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Dropdown</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="">Select here..</option>
													<option value="Category 1">First Row</option>
													<option value="Category 2">Second Row</option>
													<option value="Category 3">Third Row</option>
													<option value="Category 4">Fourth Row</option>
												</select>
											</div>
										</div>-->

										<!--<div class="control-group">
											<label class="control-label">Radiobuttons</label>
											<div class="controls">
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Option one
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Option two
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Option three
												</label>
											</div>
										</div>-->

										<div class="control-group">
											<label class="control-label">Sex</label>
											<div class="controls">
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Male
												</label> 
												<label class="radio inline">
													<input type="radio" checked="checked" name="optionsRadios" id="optionsRadios2" value="option2">
													Female
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Others
												</label>
											</div>
										</div>
										
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Designation</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Assiistant Professor" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Nature of employment</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Permanent" class="span8">
													<option value="">Select here..</option>
													<option value="Category 1">Permanent</option>
													<option value="Category 2">Temporary</option>
													<option value="Category 3">Part Time</option>
												</select>
											</div>
										</div>

										 <div class="control-group">
											<label class="control-label" for="basicinput">Joining Date</label>
											<div class="controls">
												<input type="date" id="basicinput" placeholder="01-11-2014" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Joining Date</label>
											<div class="controls">
												<input type="date" id="basicinput" placeholder="01-11-2014" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>

										
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Phone Number</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="123456789" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
										
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Email ID</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="rashmi.s5991@gmail.com" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>-->
											</div>
										</div>
									
                                   <!-- <div class="control-group">
											<label class="control-label" for="basicinput">Permanent Address Line 1</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="202/A Evelina" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>

						 <div class="control-group">
											<label class="control-label" for="basicinput">Permanent Address Line 2</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Hiranandani Gardens, Majiwada" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>
                                        
                                         <div class="control-group">
											<label class="control-label" for="basicinput">City</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Thane" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>
                                        
                                         <div class="control-group">
											<label class="control-label" for="basicinput">State</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Maharashtra" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Degree</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Bachelor of Technology" class="span8" disabled>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Branch</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Computer Science and Engineering" class="span8" disabled>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Semester</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="6" class="span8" disabled>
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">OGPA</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="8.00" class="span8" disabled>
											</div>
										</div>
                                        
                                        
                                         <div class="control-group">
											<label class="control-label" for="basicinput">Father's Name</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Capt. Rajiv Sinha" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>
									
                                    <div class="control-group">
											<label class="control-label" for="basicinput">Mother's Name</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Mrs. Renu Sinha" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>
									
                                    <div class="control-group">
											<label class="control-label" for="basicinput">Parent's Phone Number</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="987654321" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>
									
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Parent's Email ID</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="abc@gmail.com" class="span8">
												<!--<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>-->
									
                                        
                                        




										<!--<div class="control-group">
											<label class="control-label">Checkboxes</label>
											<div class="controls">
												<label class="checkbox">
													<input type="checkbox" value="">
													Option one
												</label>
												<label class="checkbox">
													<input type="checkbox" value="">
													Option two
												</label>
												<label class="checkbox">
													<input type="checkbox" value="">
													Option three
												</label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label">Inline Checkboxes</label>
											<div class="controls">
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option one
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option two
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option three
												</label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Textarea</label>
											<div class="controls">
												<textarea class="span8" rows="5"></textarea>
											</div>
										</div>-->

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