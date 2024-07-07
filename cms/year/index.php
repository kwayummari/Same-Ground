<!DOCTYPE html>
<html lang="en">

<?php include "../head/head.php"; ?>

<body>

  <!-- ======= Header ======= -->
  <?php include "../header/header.php"; ?>

  <?php include "../aside/index.php" ?>

  <main id="main" class="main">

    
  <section class="section">
      <div class="row">
        <!-- <div class="col-lg-6"> -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Year Input<span style="color: green; margin-left: 6cm;"><b><?php include('adds_year.php'); ?></b></span> </h5>

              <!-- General Form Elements -->
              <form method="POST" target="_top" autocomplete="on"   enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Year</label>
                  <div class="col-sm-10">
                      <input type="number" min="2020" max="2030" class="form-control" step="1" name="year" />
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

  <?php include "../footer/index.php"; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php include "../js/index.php"; ?>

</body>

</html>