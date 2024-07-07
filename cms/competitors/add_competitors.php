<?php
$connect=$db =mysqli_connect('localhost','u750269652_tda','Tda@2022','u750269652_tda')
or die("connection Failed");
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>
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

  <?php include "header.php" ?>

  <?php include "aside.php" ?>

  <main id="main" class="main">

    
  <section class="section">
      <div class="row">
        <!-- <div class="col-lg-6"> -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Competitors Input<span style="color: green; margin-left: 6cm;"><b><?php include('adds_competitors.php'); ?></b></span> </h5>

              <!-- General Form Elements -->
              <form method="POST" target="_top" autocomplete="on"   enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
                
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <select   id='category' class="form-control"   name="category">
                                                <option  value="">select Category</option>
                                                <?php
                                                $category= mysqli_query($connect,"SELECT * FROM category");
                                                while($category_fetch=mysqli_fetch_assoc($category)) {
                                                 
                                                ?>
                                                 <option  value="<?php echo $category_fetch['category'] ?>"><?php echo $category_fetch['category'] ?></option>
												<?php } ?>
                                            </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Sub Category</label>
                  <div class="col-sm-10">
                    <select id="subcategory" class="form-control"  name="subcategory">
                                                <option  value="">Select Sub Category</option>
                                            </select>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Year</label>
                  <div class="col-sm-10">
                    <select   id='category' class="form-control"   name="year">
                                                <option  value="">Select Year</option>
                                                <?php
                                                $category1= mysqli_query($connect,"SELECT * FROM years");
                                                while($category_fetch1=mysqli_fetch_assoc($category1)) {
                                                 
                                                ?>
                                                 <option  value="<?php echo $category_fetch1['year'] ?>"><?php echo $category_fetch1['year'] ?></option>
												<?php } ?>
                                            </select>
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

  <?php include "footer.php" ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="ckeditor/ckeditor.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#category').on('change', function() {
                    var category = this.value;
                    $.ajax({
                        url: "sub",
                        type: "POST",
                        data: {
                            category: category
                        },
                        cache: false,
                        success: function(result) {
                            $("#subcategory").html(result);
                        }
                    });
                });
            });
        </script>

</body>

</html>