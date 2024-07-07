<?php
include '../connection/index.php';
if (isset($_POST['submit'])) {
    $id=$_POST['id'];
    $testimonial=$_POST['testimonial'];
    $name=$_POST['name'];


  $file = $_FILES["cv"]["name"];
   $path = $_FILES['cv']['tmp_name'];
   $folder = "../cv/";
   $final_name = str_replace(" ", "-", $file);
   
    $query = "UPDATE testimonial SET testimonial='$testimonial', name = '$name', image='$final_name' WHERE id = '$id'";

     
     $insert=mysqli_query($connect,$query);
     move_uploaded_file($path, $folder . $final_name);

  if($insert) {
    
    echo "Testimonial Updated Successfully";
} else {
    echo "Failed To Update Testimonial";
}

}
 ?>