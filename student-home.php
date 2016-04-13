<?php
	include_once "dbConnect.php";
	include_once "layout.php";
	

	require_once "Includes/SessionAuth.php";
	require_once "Includes/SessionAuthStu.php";	
	
	drawHeader("maksPage", "KS");




// if($_SESSION['SESS_AUTH'] == 'stu'){
	echo '<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="span3">';
							drawStuSidebar();
					echo '</div><!--/.span3-->


		
					<div class="span9">
						<div class="content">

							 <div class="module">
	                            <div class="module-head">
	                                <h3>
	                                    Welcome Student !! </h3>
	                            </div>
	                            <div class="module-body">
	                                <section class="docs">
	                                    <h2>
	                                        Student Portal</h2>
	                                    <!--<p>
	                                        All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available.</p>-->
	                                    <div class="docs-example">
	                                        
	                                        <h1>
	                                            ISM MMS </h1>
	                                    </div>
	                                </section>
	                       </div>
	                      </div>
						</div><!--/.content-->
					</div><!--/.span9-->
				</div>
			</div><!--/.container-->
		</div><!--/.wrapper-->';
// }else{
	// echo '<p>You not allowed</p>';
// }

		drawFooter();
	?>
