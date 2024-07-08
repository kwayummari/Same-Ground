<?php
include 'cms/connection/index.php';
session_start();
$user_id = $_SESSION['id'];
$status = $_SESSION['role'];
$username = $_SESSION['name'];

$query = "select * from blog";
$result4 = mysqli_query($connect, $query);
$total_users = mysqli_num_rows($result4);
echo $result4;

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

		
		<!-- End Blog Page Section -->
		<?php include 'utils/footer/index.php' ?>
	</div>
	<?php include 'utils/js/index.php' ?>

</body>

<!-- sawmall/about.html  26 Nov 2019 04:20:30 GMT -->

</html>