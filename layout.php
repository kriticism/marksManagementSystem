<?php  

include_once "dbConnect.php";
function drawHeader($pageTitle,$user){
	echo '	
	<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>title</title>
			<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
			<link type="text/css" href="css/theme.css" rel="stylesheet">
			<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
			<link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
		</head>
		<body>

			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
							<i class="icon-reorder shaded"></i>
						</a>

					  	<a class="brand" href="index.html">
					  		Marks Management Portal
					  	</a>

						<div class="nav-collapse collapse navbar-inverse-collapse">
							<ul class="nav nav-icons">
								<li class="active"><a href=" ">
									<i class="icon-envelope"></i>
								</a></li>
								<li><a href=" ">
									<i class="icon-eye-open"></i>
								</a></li>
								<li><a href=" ">
									<i class="icon-bar-chart"></i>
								</a></li>
							</ul>

							<!--
								<form class="navbar-search pull-left input-append" action="#">
									<input type="text" class="span3">
									<button class="btn" type="button">
										<i class="icon-search"></i>
									</button>
								</form>
							-->
						
							<ul class="nav pull-right">
								<!--
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Item No. 1</a></li>
										
										<li><a href="#">Dont Click</a></li>
										<li class="divider"></li>
										<li class="nav-header">Example Header</li>
										<li><a href="#">A Separated link</a></li>
																	</ul>
								</li>
								<li><a href="#">
									Support
								</a></li>
								-->
								
								
								<li class="nav-user dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<img src="images/user.png" class="nav-avatar" />
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<!--<li><a href="#">Your Profile</a></li>
										<li><a href="#">Edit Profile</a></li>
										<li><a href="#">Account Settings</a></li>
										<li class="divider"></li>-->
										<li><a href="logout.php">Logout</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.nav-collapse -->
					</div>
				</div><!-- /navbar-inner -->
			</div><!-- /navbar -->
	';
}

function drawAdminSidebar(){

	echo '
		<div class="sidebar">

			<ul class="widget widget-menu unstyled">
				<li class="active">
					<a href="index.html">
						<i class="menu-icon icon-paste"></i>
						Upload marks
					</a>
				</li>
				<!--
				<li>
					<a href="activity.html">
						<i class="menu-icon icon-bullhorn"></i>
						View course structure
					</a>
				</li>
				-->
				<li>
					<a href="message.html">
						<i class="menu-icon icon-inbox"></i>
						Edit details
						<!-- <b class="label green pull-right">11</b> -->
					</a>
				</li>
				
			</ul><!--/.widget-nav-->

		</div><!--/.sidebar-->
	';
}


function drawStuSidebar(){

	echo '
		<div class="sidebar">

			<ul class="widget widget-menu unstyled">
				<li class="active">
					<a href="stu-marks.php">
						<i class="menu-icon icon-dashboard"></i>
						View marks
					</a>
				</li>
<!--
<li>
	<a href="activity.html">
		<i class="menu-icon icon-bullhorn"></i>
		View course structure
	</a>
</li>
-->
				<li>
					<a href="stu-editdetails.php">
						<i class="menu-icon icon-inbox"></i>
						Edit details
						<!-- <b class="label green pull-right">11</b> -->
					</a>
				</li>
				
				<li>
					<a href="stu-gpa-enter.php">
						<i class="menu-icon icon-tasks"></i>
						View GPA
						<!-- <b class="label orange pull-right">19</b> -->
					</a>
				</li>
			</ul><!--/.widget-nav-->

		</div><!--/.sidebar-->
	';
}

function drawProfSidebar(){
	echo '
		<div class="sidebar">

			<ul class="widget widget-menu unstyled">
				<li class="active">
					<a href="indiv-marks-upload-form.php">
						<i class="menu-icon icon-paste"></i>
						Upload individual marks
					</a>
				</li>
				<li class="active">
					<a href="update-stu-marks-csv-action.php"> <!--class-marks-upload.php-->
						<i class="menu-icon icon-paste"></i>
						Upload csv marks
					</a>
				</li>
				<!--
				<li>
					<a href="activity.html">
						<i class="menu-icon icon-bullhorn"></i>
						View course structure
					</a>
				</li>
				-->
				<li>
					<a href="message.html">
						<i class="menu-icon icon-inbox"></i>
						Edit details
						<!-- <b class="label green pull-right">11</b> -->
					</a>
				</li>
				
			</ul><!--/.widget-nav-->

		</div><!--/.sidebar-->
	';
}
function drawFooter(){

		echo '

				<div class="footer">
					<div class="container">
						 

						<b class="copyright">&copy; 2016 Rashmi Kriti Amrit Bhavishya Hatim </b> All rights reserved.
					</div>
				</div>

				<script src="scripts/jquery-1.9.1.min.js"></script>
				<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
				<script src="bootstrap/js/bootstrap.min.js"></script>
				<script src="scripts/datatables/jquery.dataTables.js"></script>
				<script>
					$(document).ready(function() {
						$(\'.datatable-1\').dataTable();
						$(\'.dataTables_paginate\').addClass("btn-group datatable-pagination");
						$(\'.dataTables_paginate > a\').wrapInner(\'<span />\');
						$(\'.dataTables_paginate > a:first-child\').append(\'<i class="icon-chevron-left shaded"></i>\');
						$(\'.dataTables_paginate > a:last-child\').append(\'<i class="icon-chevron-right shaded"></i>\');
					} );
				</script>
			</body>
		';
}