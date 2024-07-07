<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../connection/index.php';
if (isset($_POST['submit'])) {
    $title1=$_POST['title1'];
    $titles=$_POST['titles'];
  $file = $_FILES["cv"]["name"];
   $path = $_FILES['cv']['tmp_name'];
   $folder = "../cv/";
   $final_name = str_replace(" ", "-", $file);  
//   var_dump ($final_name);
  $query="INSERT INTO carousel (title1,titles,image)
    VALUES('$title1','$titles', '$final_name')";
     $insert=mysqli_query($connect,$query);
  if($insert) {
    move_uploaded_file($path, $folder . $final_name);
    echo "Carousel Added Successfully";
} else {
    echo "Failed To Add Carousel";
}

}
 ?>