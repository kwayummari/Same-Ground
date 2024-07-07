<?php
include '../connection/index.php';

  $id = $_GET['id'];

  $query="select * from category where id= '$id' order by id asc";
  $result4=mysqli_query($connect,$query);

 ?>
<!DOCTYPE html>
<html lang="en">

<?php include "../head/head.php"; ?>
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

<?php include "../header/header.php"; ?>

<?php include "../aside/index.php" ?>

  <main id="main" class="main">

    
  <section class="section">
      <div class="row">
        <!-- <div class="col-lg-6"> -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Category Update<span style="color: green; margin-left: 6cm;"><b><?php include('updates.php'); ?></b></span> </h5>
              
              <?php   // LOOP TILL END OF DATA
                       while($rows4= mysqli_fetch_assoc($result4))
                           {
                            ?>
              <!-- General Form Elements -->
              <form method="POST" target="_top" autocomplete="on"   enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $rows4['category'];?>" name="category">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $rows4['description'];?>" name="description">
                  </div>
                </div>
                <input type="text" class="form-control" value="<?php echo $id;?>" name="id"  hidden>
                 <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                  <img src="../cv/<?php echo $rows4['image'];?>" class="col-sm-2" style="border-radius: 50%; height: 50px; width: 70px;" alt="">
                  <div class="col-sm-9">
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
              
              <?php } ?>
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