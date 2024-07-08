<?php
include '../connection/index.php';
$id = $_GET['id'];
$sql= "DELETE FROM blog WHERE id= '$id'";
$result=mysqli_query($connect,$sql);

if ($result) {
                header('location: blog.php');
             }
mysqli_close($connect);
?>