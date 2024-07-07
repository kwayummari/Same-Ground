<?php
$connect=$db =mysqli_connect('localhost','u750269652_tda','Tda@2022','u750269652_tda')
or die("connection Failed");
if (isset($_POST['submit'])) {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $category=$_POST['category'];
    $subcategory=$_POST['subcategory'];
    $year=$_POST['year'];


  $file = $_FILES["cv"]["name"];
   $path = $_FILES['cv']['tmp_name'];
   $folder = "../cv/";
   $final_name = str_replace(" ", "-", $file);
   

    $query = "UPDATE nomination SET name='$name', category = '$category', subcategory = '$subcategory', year = '$year', image='$final_name' WHERE id = '$id'";

     
     $insert=mysqli_query($connect,$query);
     move_uploaded_file($path, $folder . $final_name);

  if($insert) {
    
    echo "Nominee Updated Successfully";
} else {
    echo "Failed To Update Nominee";
}

}
 ?>