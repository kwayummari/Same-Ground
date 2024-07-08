<?php
include 'cms/connection/index.php';

  $query="select * from years";
  $years=mysqli_query($connect,$query);

 ?>
<!--Header Lower-->
<div class="header-lower clearfix">
							
							<div class="nav-outer clearfix">
								<!--Mobile Navigation Toggler-->
								<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
								<!-- Main Menu -->
								<nav class="main-menu navbar-expand-md">
									<div class="navbar-header">
										<!-- Toggle Button -->    	
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									
									<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
									<li><a href="index.php">Home</a>
									</li>
									<li class="dropdown"><a href="#">About</a>
										<ul>
											<li><a href="about.php">About Us</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Awards <?php echo date('Y') ?></a>
										<ul>
											<li><a href="categories.php">Categories</a></li>
										</ul>
									</li>
									<li><a href="blog.php">Blog</a>
									</li>
								</ul>
									</div>
								</nav>
								<div class="side-curve"></div>
							</div>
							
						</div>