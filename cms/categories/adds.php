<?php
include '../connection/index.php';
if (isset($_POST['submit'])) {
    $category=$_POST['category'];
    $description=$_POST['description'];


  $file = $_FILES["cv"]["name"];
   $path = $_FILES['cv']['tmp_name'];
   $folder = "../cv/";
   $final_name = str_replace(" ", "-", $file);
   
//   var_dump ($final_name);

  $query="INSERT INTO category (category,description,image)
    VALUES('$category', '$description', '$final_name')";

     
     $insert=mysqli_query($connect,$query);
     

  if($insert) {
    move_uploaded_file($path, $folder . $final_name);
    echo "Category Added Successfully";
} else {
    echo "Failed To Add Category";
}

}
 ?>