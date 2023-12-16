<?php 
session_start();
include("connect.php");
?>


<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<title>Brandi</title>
<link rel="stylesheet" href="style.css">
<link href="images/">

</head>
<body style="margin: 0px; background-image: url('images/back.png');">

  <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $name=$_POST['uname'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $encrypted_pwd = md5($password);

$insert_user=mysqli_query($connect,"INSERT INTO users(user_name,user_email,user_password) VALUES('$name','$email'
,'$encrypted_pwd' )");//for sending the inforamtion to the database  
    if ($insert_user) {

    
         header("location:Login.php");
    }
    else
 {
    echo"عذرا، حصل خطأ أثناء التسجيل";
 }
  } 

 ?> 


<center>
<div class="Login">
    <div class="Login_1">
  <img class="Login_img" src="images/about.png" >
  </div>

  <div class="Login_2">
    <center><i>انشاء حساب</i></center>
  <hr ><br>
<form method="POST">
    <label>اسم المستخدم</label>
  <input type="text" name="uname" required ><br>
  <label >البريد الالكتروني</label>
  <input type="email" name="email" required><br>
  <label>كلمة المرور</label>
  <input type="password"  name="password" required ><br>

<center><input type="submit" value="تسجيل">
<br>
<a href="Login.php">لديك حساب؟ أضغط هنا
</a></center> 
</form>
  </div>

  </div>
</center>

</body>
</html>