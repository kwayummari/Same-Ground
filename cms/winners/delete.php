<?php
include '../connection/index.php';
$id = $_GET['id'];
$sql= "DELETE FROM winners WHERE id= '$id'";
$result=mysqli_query($connect,$sql);

if ($result) {
                header('location: index.php');
             }
mysqli_close($connect);
?>