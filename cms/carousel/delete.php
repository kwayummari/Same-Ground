<?php
include '../connection/index.php';
$id = base64_decode($_GET['id']);
$sql= "DELETE FROM carousel WHERE id= '$id'";
$result=mysqli_query($connect,$sql);

if ($result) {
                header('location: all_carousel.php');
             }
mysqli_close($connect);
?>