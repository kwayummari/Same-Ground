<?php
include '../connection/index.php';
if (isset($_POST['submit'])) {
    $id=$_POST['id'];
    $title1=$_POST['title1'];
    $titles=$_POST['titles'];


  $file = $_FILES["cv"]["name"];
   $path = $_FILES['cv']['tmp_name'];
   $folder = "../cv/";
   $final_name = str_replace(" ", "-", $file);
   

//   $query="INSERT INTO feeds (title,date,author,caption,description,image)
//     VALUES('$title','$date', '$author','$caption','$description','$final_name')";
    $query = "UPDATE carousel SET title1='$title1', titles = '$titles', image='$final_name' WHERE id = '$id'";

     
     $insert=mysqli_query($connect,$query);
     move_uploaded_file($path, $folder . $final_name);

  if($insert) {
    
    echo "Carousel Updated Successfully";
} else {
    echo "Failed To Update Carousel";
}

}
 ?>