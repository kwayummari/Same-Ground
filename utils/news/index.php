<?php include 'cms/api/index.php' ?>
<section class="news-section">
		<div class="auto-container">
			<div class="sec-title centered">
            	<h2>Our Latest News</h2>
                <div class="separate"></div>
            </div>
			<div class="news-carousel-two owl-carousel owl-theme">
			<?php   // LOOP TILL END OF DATA
                    while($blogs=$blog->fetch_assoc())
                    {
                  ?>
				<!-- News Block -->
				<div class="news-block-three">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.php?id=<?php echo base64_encode($rows4['id']) ?>"><img src="cms/cv/<?php echo $blogs['image'];?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>Admin</li>
								<li><?php echo $blogs['date'];?></li>
							</ul>
							<h3><a href="blog-single.php?id=<?php echo base64_encode($rows4['id']) ?>"><?php echo $blogs['title'];?></a></h3>
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
	<!-- End News Section -->