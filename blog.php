<?php
include 'cms/connection/index.php';
session_start();
$user_id = $_SESSION['id'];
$status = $_SESSION['role'];
$username = $_SESSION['name'];

  $query="select * from blog";
  $result4=mysqli_query($connect,$query);
  $total_users = mysqli_num_rows($result4);

 ?>
<!DOCTYPE html>
<html>
<?php include 'utils/head/index.php' ?>
<body class="hidden-bar-wrapper">
	<!-- Preloader -->
    <!-- <div id="preloader"><p id="para"></p></div> -->
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div id="preloader"><p id="para"></p></div>
 	
	<?php include 'utils/header/header-others.php' ?>
    <!--End Main Header -->
	
	<!--Page Title-->
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
	
	<!-- Blog Page Section -->
	<section class="blog-page-section">
		<div class="auto-container">
			<div class="row clearfix">
			<?php   // LOOP TILL END OF DATA
                                                    while($rows4=$result4->fetch_assoc())
                                                         {
                                                       ?>
				<!-- News Block -->
				<div class="news-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.php?id=<?php echo base64_encode($rows4['id']) ?>"><img src="cms/cv/<?php echo $rows4['image'];?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>TWA</li>
								<li><?php echo $rows4['date'];?></li>
							</ul>
							<h3><a href="blog-single.php?id=<?php echo base64_encode($rows4['id']) ?>"><?php echo $rows4['title'];?></a></h3>
							<a href="blog-single.php?id=<?php echo base64_encode($rows4['id']) ?>" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				<?php
                                                     }
                                                     ?>
			</div>
		
			
		</div>
	</section>
	<!-- End Blog Page Section -->
	<?php include 'utils/footer/index.php' ?>
</div>
<?php include 'utils/js/index.php' ?>

</body>

<!-- sawmall/about.html  26 Nov 2019 04:20:30 GMT -->
</html>