<?php
$connect=$db =mysqli_connect('localhost','u750269652_tda','Tda@2022','u750269652_tda')
or die("connection Failed");
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $category=$_POST['category'];
    $subcategory=$_POST['subcategory'];


 
  $query="select * from votes where name= '$name' and subcategory='$subcategory'";

     
     $select=mysqli_query($connect,$query);
     $count=mysqli_num_rows($select);

  if($select) {
    echo $count;
} else {
    echo "Unavailble";
}

}
 ?>