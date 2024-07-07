<?php
$connect=$db =mysqli_connect('localhost','u750269652_tda','Tda@2022','u750269652_tda');
$id = $_GET['id'];
$sql= "DELETE FROM nomination WHERE id= '$id'";
$result=mysqli_query($connect,$sql);

if ($result) {
                header('location: all_carousel.php');
             }
mysqli_close($connect);
?>