<?php
  session_start();
  header('location:login.php');
  $con = mysqli_connect('localhost', 'root','');
  mysqli_select_db($con, 'blog');
  $name = $_POST['user'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $s = "select * from users where user = '$name'";
  $result = mysqli_query($con, $s);
  $num = mysqli_num_rows($result);
  if($num == 1){
      echo "Username Already Taken";
  }else{
      $reg = "insert into users (user, email, password) values ('$name', '$email', '$pass')";
      mysqli_query($con, $reg);
      echo "Signup Successful";
  }
?>