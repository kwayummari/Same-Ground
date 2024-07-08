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
	<?php include 'utils/quote/index.php' ?>
	<?php include 'utils/quote/index.php' ?>
	<?php include 'utils/footer/index.php' ?>
</div>
<?php include 'utils/js/index.php' ?>
</body>
</html>