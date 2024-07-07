<?php
include 'cms/connection/index.php';

$query="select * from blog";
$blog=mysqli_query($connect,$query); 
?>