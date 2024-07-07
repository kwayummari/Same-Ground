<?php
include '../connection/index.php';
$id = $_GET['id'];
$sql= "DELETE FROM category WHERE id= '$id'";
$result=mysqli_query($connect,$sql);

if ($result) {
                header('location: index.php');
             }
mysqli_close($connect);
?>