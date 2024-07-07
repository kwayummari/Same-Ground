<?php
$connect=$db =mysqli_connect('localhost','u750269652_tda','Tda@2022','u750269652_tda')
or die("connection Failed");
if (isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $role=$_POST['role'];
  $password=$_POST['password'];
  $query="INSERT INTO user (firstname,lastname,email,role,password)
    values('$fname','$lname', '$email', '$role', '$password')";

  if(mysqli_query($connect,$query)) {
    echo "Succefully added user";
} else {
  echo "Failed adding user";
}

}
 ?>
