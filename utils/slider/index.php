<?php
include 'cms/connection/index.php';
  $query="select * from carousel";
  $result4=mysqli_query($connect,$query);
  // $count=mysqli_fetch_assoc($result4);
  $total_users = mysqli_num_rows($result4);

 ?>
<!--Main Slider-->
<section class="main-slider style-two">
        <div class="main-slider-carousel owl-carousel owl-theme">
        <?php   // LOOP TILL END OF DATA
                                                    while($rows4=$result4->fetch_assoc())
                                                         {
                                                       ?>
            <div class="slide" style="background-image:url(cms/cv/<?php echo $rows4['image'];?>)">
                <div class="auto-container">
                	<div class="content">
                    <h2><?php echo $rows4['title1'];?></h2>
						<div class="text"><?php echo $rows4['titles'];?></div>
                    	<div class="link-box">
							<a href="about.html" class="theme-btn btn-style-one"><span class="txt">Nominate Now</span></a>
						</div>
                    </div>
                </div>
            </div>
            
			<?php
                                                     }
                                                     ?>
        </div>
		
		<!--Scroll Dwwn Btn-->
        <div class="mouse-btn-down scroll-to-target" data-target=".what-we-section"></div>
    </section>
    <!--End Main Slider-->