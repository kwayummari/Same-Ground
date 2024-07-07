<?php
include '../connection/index.php';
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $year=$_POST['year'];
    $category=$_POST['category'];


  $file = $_FILES["cv"]["name"];
   $path = $_FILES['cv']['tmp_name'];
   $folder = "../cv/";
   $final_name = str_replace(" ", "-", $file);
   
//   var_dump ($final_name);

  $query="INSERT INTO winners (name,category,year,image)
    VALUES('$name','$category', '$year', '$final_name')";

     
     $insert=mysqli_query($connect,$query);
     

  if($insert) {
    move_uploaded_file($path, $folder . $final_name);
    echo "Winner Added Successfully";
} else {
    echo "Failed To Add Winner";
}

}
 ?>