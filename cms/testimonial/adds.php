<?php
include '../connection/index.php';
if (isset($_POST['submit'])) {
    $testimonial=$_POST['testimonial'];
    $name=$_POST['name'];


  $file = $_FILES["cv"]["name"];
   $path = $_FILES['cv']['tmp_name'];
   $folder = "../cv/";
   $final_name = str_replace(" ", "-", $file);
   
//   var_dump ($final_name);

  $query="INSERT INTO testimonial (testimonial,name,image)
    VALUES('$testimonial', '$name', '$final_name')";

     
     $insert=mysqli_query($connect,$query);
     

  if($insert) {
    move_uploaded_file($path, $folder . $final_name);
    echo "Testimonial Added Successfully";
} else {
    echo "Failed To Add Testimonial";
}

}
 ?>