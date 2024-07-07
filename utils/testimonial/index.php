<?php
include 'cms/connection/index.php';

  $query="select * from testimonial";
  $result4=mysqli_query($connect,$query);
  $total_users = mysqli_num_rows($result4);

 ?>
<!-- Testimonial Section Three -->
<section class="testimonial-section-three" style="background-image: url(images/background/10.jpg)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>Testimonials</h2>
				<div class="separate"></div>
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
			<?php   // LOOP TILL END OF DATA
                                                    while($rows4=$result4->fetch_assoc())
                                                         {
                                                       ?>
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three">
					<div class="inner-box">
						<div class="upper-box">
							<div class="title">Via TMA</div>
							<div class="text"><?php echo $rows4['testimonial'];?></div>
							<div class="rating-outer">
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="lower-box">
							<div class="lower-inner">
								<div class="author-image">
									<img src="cms/cv/<?php echo $rows4['image'];?>" alt="" />
								</div>
								<div class="designation"><?php echo $rows4['name'];?></div>
								<h3>****</h3>
							</div>
						</div>
					</div>
				</div>
				<?php
                                                     }
                                                     ?>
				
			</div>
			
		</div>
	</section>
	<!-- End Testimonial Section Three -->