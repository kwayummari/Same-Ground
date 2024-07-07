<?php
include '../connection/index.php';
if (isset($_POST['submit'])) {
    $id=$_POST['id'];
    $category=$_POST['category'];
    $name=$_POST['name'];


  $file = $_FILES["cv"]["name"];
   $path = $_FILES['cv']['tmp_name'];
   $folder = "../cv/";
   $final_name = str_replace(" ", "-", $file);
   
    $query = "UPDATE winners SET name='$name', category = '$category', image='$final_name' WHERE id = '$id'";

     
     $insert=mysqli_query($connect,$query);
     move_uploaded_file($path, $folder . $final_name);

  if($insert) {
    
    echo "Winner Updated Successfully";
} else {
    echo "Failed To Update Winner";
}

}
 ?>