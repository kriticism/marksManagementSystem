<?php
	include_once "dbConnect.php";
	include_once "layout.php";
	
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
									<i class="menu-icon icon-paste"></i>
									Upload marks
								</a>
							</li>
							<li>
								<a href="activity.html">
									<i class="menu-icon icon-bullhorn"></i>
									View course structure
								</a>
							</li>
							<li>
								<a href="message.html">
									<i class="menu-icon icon-inbox"></i>
									Edit details
									<!-- <b class="label green pull-right">11</b> -->
								</a>
							</li>
							
						</ul><!--/.widget-nav-->

					</div><!--/.sidebar-->
				</div><!--/.span3-->


	
				<div class="span9">
					<div class="content">

						 <div class="module">
                            <div class="module-head">
                                <h3>
                                    Welcome Aaadmean !! </h3>
                            </div>
                            <div class="module-body">
                                <section class="docs">
                                    <h2>
                                        Aaadmean Portal</h2>
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
	</div><!--/.wrapper-->

	
	<?php  
		drawFooter();
	?>
