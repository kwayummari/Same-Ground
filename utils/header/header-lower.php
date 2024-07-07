<?php
include 'cms/connection/index.php';

  $query="select * from years";
  $result4=mysqli_query($connect,$query);
  $total_users = mysqli_num_rows($result4);

 ?>
<!--Header Lower-->
<div class="header-lower">
			<div class="auto-container">
				<div class="inner-container clearfix" style="background-color : #b0904f">
					<div class="nav-outer clearfix">
						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md" >
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
									<li class="dropdown"><a href="#">Archive</a>
									<ul>
										<?php   // LOOP TILL END OF DATA
                                                    while($rows4=$result4->fetch_assoc())
                                                         {
                                                       ?>
											<li><a href="winners.php?year=<?php echo base64_encode($rows4['year']);?>">Winners <?php echo $rows4['year'];?></a></li>
											<?php
                                                     }
                                                     ?>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Awards 2023</a>
										<ul>
											<li><a href="categories.php">Categories</a></li>
										</ul>
									</li>
									<li><a href="blog.php">Blog</a>
									</li>
								</ul>
							</div>
						</nav>
						
						<!-- Main Menu End-->
						<div class="outer-box clearfix">
						
							
							<!-- Quote Btn -->
							<div class="btn-box">
								<a href="contact.html" class="quote-btn theme-btn">Contact Us</a>
							</div>
								
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Header Lower-->