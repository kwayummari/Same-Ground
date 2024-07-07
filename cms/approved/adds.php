<?php
$connect=$db =mysqli_connect('localhost','u750269652_tda','Tda@2022','u750269652_tda')
or die("connection Failed");
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $year=$_POST['year'];
    $category=$_POST['category'];
    $subcategory=$_POST['subcategory'];


  $file = $_FILES["cv"]["name"];
   $path = $_FILES['cv']['tmp_name'];
   $folder = "../cv/";
   $final_name = str_replace(" ", "-", $file);
   
//   var_dump ($final_name);

  $query="INSERT INTO nomination (name,category,subcategory,year,image)
    VALUES('$name','$category', '$subcategory', '$year', '$final_name')";

     
     $insert=mysqli_query($connect,$query);
     

  if($insert) {
    move_uploaded_file($path, $folder . $final_name);
    echo "Nominee Added Successfully";
} else {
    echo "Failed To Add Nominee";
}

}
 ?>