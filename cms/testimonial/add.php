<?php 
session_start();
$user_id = $_SESSION['id'];
$status = $_SESSION['role'];
$username = $_SESSION['name'];
 ?>
<!DOCTYPE html>
<html lang="en">

<?php include "../head/head.php" ?>
<script>
  function upload_check()
{
    var upl = document.getElementById("file_id");
    var max = 1500000;

    if(upl.files[0].size > max)
    {
       alert("Image is too Large!");
       upl.value = "";
    }
};
</script>

<body>

  <?php include "../header/header.php" ?>

  <?php include "../aside/index.php" ?>

  <main id="main" class="main">

    
  <section class="section">
      <div class="row">
        <!-- <div class="col-lg-6"> -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Testimonial Input<span style="color: green; margin-left: 6cm;"><b><?php include('adds.php'); ?></b></span> </h5>

              <!-- General Form Elements -->
              <form method="POST" target="_top" autocomplete="on"   enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Testimonial</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="testimonial">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input onchange="upload_check()" id="file_id" class="form-control" type="file" accept="image/*" type="file"  name="cv" value="file" >
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        <!-- </div> -->

        
      </div>
    </section>  


  </main><!-- End #main -->

  <?php include "../footer/index.php" ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php include "../js/index.php" ?>

</body>

</html>