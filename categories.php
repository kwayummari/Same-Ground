<?php
include 'cms/connection/index.php';

  $query="select * from category";
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
					<div class="title">Our Categories</div>
					<h2><?php echo date('Y') ?> Categories</h2>
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
	<section class="services-page-section">
		<div class="auto-container">
			<div class="row clearfix">
            <?php   // LOOP TILL END OF DATA
                                                    while($rows4=$result4->fetch_assoc())
                                                         {
                                                       ?>
				<!-- Services Block -->
				<div class="services-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="cms/cv/<?php echo $rows4['image'];?>" alt= ""/>
							<!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
										<div class="icon flaticon-trophy"></div>
										<div class="text"><?php echo $rows4['description'];?></div>
										<a href="#" class="theme-btn btn-style-two"><span class="txt">Read More</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="lower-box">
							<h3><a href="#"><?php echo $rows4['category'];?></a></h3>
						</div>
					</div>
				</div>
				<?php
                                                     }
                                                     ?>
			</div>
		</div>
	</section>
	<?php include 'utils/footer/index.php' ?>
</div>
<?php include 'utils/js/index.php' ?>

</body>

<!-- sawmall/about.html  26 Nov 2019 04:20:30 GMT -->
</html>