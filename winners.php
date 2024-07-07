<?php
include 'cms/connection/index.php';
$year = base64_decode($_GET['year']);
  $query="select * from winners where year = $year";
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
					<div class="title">Welcome to our Archive</div>
					<h2><?php echo base64_decode($_GET['year']) ?> Award Winners</h2>
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
	<!-- Team Page Section -->
    <section class="team-page-section">
		<div class="auto-container">
			<div class="row clearfix">
			<?php   // LOOP TILL END OF DATA
                                                    while($rows4=$result4->fetch_assoc())
                                                         {
                                                       ?>
				<!-- Team Block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="cms/cv/<?php echo $rows4['image'];?>" alt="" />
						</div>
						<div class="lower-content">
							<h3><?php echo $rows4['name'];?></h3>
							<div class="designation"><?php echo $rows4['category'];?></div>
						</div>
					</div>
				</div>
                <?php
                                                     }
                                                     ?>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->
	<!-- End Blog Page Section -->
	<?php include 'utils/footer/index.php' ?>
</div>
<?php include 'utils/js/index.php' ?>

</body>

<!-- sawmall/about.html  26 Nov 2019 04:20:30 GMT -->
</html>