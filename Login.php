<?php 
session_start();
include("connect.php");
?>


<!DOCTYPE html>
<html dir="rtl">
<head>
<title>Brandi</title>
<link rel="stylesheet" href="style.css">
<link href="images/">

</head>
<body style="margin: 0px; background-image: url('images/back.png');">

<center>
<div class="Login">
    <div class="Login_1">
  <img class="Login_img" src="images/about.png" >
  </div>

  <div class="Login_2">
    <center> <i>تسجيل الدخول</i></center>
  <hr ><br>
<form method="POST">
  <label for="email">البريد الالكتروني</label>
  <input type="email" id="email" name="email" required><br>
  <label for="password">كلمة المرور</label>
  <input type="password" id="password" name="password" required><br>

<center><input type="submit" value="دخول">
<br>
<a href="Signup.php">!ليس لديك حساب؟ سجل الان</a></center> 
</form>

<?php 

if($_SERVER['REQUEST_METHOD']=='POST')

{
    $name=$_POST['email'];
    $pass=md5($_POST['password']);

    $s_user=mysqli_query($connect,"SELECT * from  users where  user_email='$name' and  user_password='$pass' ");

    $num= mysqli_num_rows($s_user); //count how many rows are there in the statment you wrote
    if($num)
    {
        $result = mysqli_fetch_assoc($s_user);//fetch the data found in the database and store it in an array
        $_SESSION['name']= $result['user_name'];
        $_SESSION['id']= $result['user_id'];
        $_SESSION['status']=$result['status'];

        header("location:Home.php");
        
    }
    else{
        echo '</br>';
        echo'<p>عذرا، المعلومات المدخلة خاطئة</p>';
    }

} 
?>
  </div>

  </div>
</center>
</body>
</html>