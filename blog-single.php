<?php
include 'cms/connection/index.php';
session_start();
$user_id = $_SESSION['id'];
$status = $_SESSION['role'];
$username = $_SESSION['name'];
$id = base64_decode($_GET['id']);
  $query="select * from blog where id = $id";
  $result4=mysqli_query($connect,$query);
  $total_users = mysqli_num_rows($result4);

 ?>
<!DOCTYPE html>
<html>
<?php include 'utils/head/index.php' ?>
<body class="hidden-bar-wrapper">
<div class="page-wrapper">
	<?php include 'utils/header/header-others.php' ?>
    <section class="page-title" style="background-image:url(images/background/12.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<div class="title">Welcome to our blog</div>
					<h2>Latest News</h2>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="index-2.html">home</a></li>
						<li>Latest News</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
			<?php   // LOOP TILL END OF DATA
                                                    while($rows4=$result4->fetch_assoc())
                                                         {
                                                       ?>
				<!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                	<div class="news-detail">
						<div class="inner-box">
							<div class="lower-content">
								<ul class="post-meta">
									<li>TWA</li>
									<li><?php echo $rows4['date'];?></li>
								</ul>
								<h3><?php echo $rows4['title'];?></h3>
								<div class="text">
									<p><?php echo $rows4['description'];?>.</p>
								</div>
							</div>
							
							<!--post-share-options-->
							<div class="post-share-options clearfix">
								<div class="pull-right">
									<ul class="social-icon-three">
										<li class="share">Share Now:</li>
										<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
										<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
									</ul>
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
				<?php
                                                     }
                                                     ?>
			</div>
		</div>
	</div>
	
	<!-- Call To Action Three Section -->
	<section class="call-to-action-section-three" style="background-image: url(images/background/11.jpg)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="experiance">With over 20 years of experience</div>
						<h2>In need of a new wardrobe, kitchen installation, renovation or any other woodwork.</h2>
					</div>
				</div>
				
				<!-- Button Column -->
				<div class="btn-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="number">+ 62 867 6872</div>
						<a href="contact.html" class="theme-btn btn-style-three"><span class="txt">Contact Us</span></a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Call To Action Three Section -->
	
	<!--Clients Section-->
    <section class="clients-section style-two">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!--End Clients Section-->
	
	<?php include 'utils/footer/index.php' ?>
</div>
<?php include 'utils/js/index.php' ?>

</body>

<!-- sawmall/about.html  26 Nov 2019 04:20:30 GMT -->
</html>