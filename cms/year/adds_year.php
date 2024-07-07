<?php
include '../connection/index.php';
if (isset($_POST['submit'])) {
  $year=$_POST['year'];
  $query="INSERT INTO years (year)
    values('$year')";

  if(mysqli_query($connect,$query)) {
    echo "Succefully added Year";
} else {
  echo "Failed adding Year";
}

}
 ?>
