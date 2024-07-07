<?php
session_start();
 include 'connection/index.php';
if (isset($_POST['submit'])) {
  $email=$_POST['email'];
  $password=$_POST['password'];
  $query="select * from user where email='$email' and password='$password'";
  $result=mysqli_query($connect,$query);
  $count=mysqli_fetch_assoc($result);

  if($count) {
    $_SESSION['id'] = $count['id'];
    $_SESSION['role'] = $count['role'];
    $_SESSION['name'] = $username;  
  if ($count['role'] == 'admin') {
      header("location: home/");
  }
} else {
  echo 'Wrong email/ password';
}

}
 ?>
