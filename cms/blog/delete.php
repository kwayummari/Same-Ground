<?php
include '../connection/index.php';
$id = $_GET['id'];
$sql= "DELETE FROM blog WHERE id= '$id'";
$result=mysqli_query($connect,$sql);

if ($result) {
                header('location: all_blog.php');
             }
mysqli_close($connect);
?>