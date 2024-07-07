<?php
$connect=$db =mysqli_connect('localhost','u750269652_tda','Tda@2022','u750269652_tda')
or die("connection Failed");
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $year=$_POST['year'];
    $category=$_POST['category'];
    $subcategory=$_POST['subcategory'];



  $query="INSERT INTO archives (name,category,subcategory,year)
    VALUES('$name','$category', '$subcategory', '$year')";

     
     $insert=mysqli_query($connect,$query);
     

  if($insert) {
    echo "Competitors Added Successfully";
} else {
    echo "Failed To Add Competitors";
}

}
 ?>