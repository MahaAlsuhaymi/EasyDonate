<?php
session_start();
include("connect.php");
if(isset($_SESSION['name']) && $_SESSION['id']){
    $persid=  $_SESSION['id'];
    $s_user=mysqli_query($connect,"SELECT * from  users where user_id= '$persid' ");
    $num= mysqli_num_rows($s_user); //count how many rows are there in the statment you wrote
    if($num){
       $info = mysqli_fetch_assoc($s_user);//fetch the data found in the database and store it in an array
       $id= $info["user_id"];
       $email =$info["user_email"];
  
}
?>


<!DOCTYPE html>
<html dir="rtl">
<head>
<title>Easy Donate</title>
<link rel="stylesheet" href="style.css">
<link href="images/">
</head>
<body style="margin: 0px; ">
  <!-- start of Menu section -->
<ul>

  <li ><a style="text-align: right;" href="Home.php">الرئيسية</a></li>
        <li><a href="About_us.php">من نحن؟</a></li>
        <li><a href="Faqs.php">الأسئلة الشائعة</a></li>
  <li><a href="Contact.php">تواصل معنا</a></li>

<?php  
if(isset($_SESSION['name'])){


echo"<li style='float:left !important'><a class='active' href='Logout.php'>تسجيل الخروج</a></li>";
echo"<li style='float:left !important'><a class='active' href='Edit.php'>الملف الشخصي</a></li>";

}
else
{
  echo"<li style='float:left !important'><a class='active' href='Login.php'>تسجيل الدخول </a></li>";
  echo"<li style='float:left !important'><a class='active' href='Type.php'>تبرع لمرة واحدة</a></li>";

}
?>
</ul>

    <div class="home-content">

<center>
<div class="Login">

  <div class="Login_2">
    <center><i>تعديل البيانات </i></center>
  <hr ><br>
                  <form  method="POST">
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="mb-0">تعديل الاسم</label>
                    </div>
                    <div class="col-sm-9 text-secondary">
               <input type="text" name="name" value="<?php echo $info['user_name']?>" >  
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="mb-0">تغيير كلمة المرور</label>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <input type="text" name="password" required>  
                    </div>
                  </div>
           
                  <div class="row text-center ">
                    <div class="col-sm-12 justify-content-center edit">
                    <button class="btn btn-lg btn-block " type="submit" style="width:200px">حفظ التعديلات</button>
                    <button class="btn btn-lg btn-block " style="width: 200px; margin-right: 50px;"><a href="Profile.php" style="text-decoration: none; color: white;">سجل التبرع</a></button>
                    </div>
                  </div>

                  </form>
  </div>


    <div class="Login_1">
  <img class="Login_img" src="images/19.jpg" width="350px" >
  </div>
  <?php
}
?>

  <?php
 include("connect.php");
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $name=$_POST['name'];
 $password=$_POST['password'];
 $encrypted_pwd = md5($password);

    $edit_user=mysqli_query($connect,"UPDATE users set user_email= '$email',user_name='$name',user_password ='$encrypted_pwd' where user_id= '$id' ");//for sending the inforamtion to the database  
    if ($edit_user) {
           
          echo "<br>Your Information have been Saved, Please Refresh the page"; 
         
   
    }
    else
 {
    echo"Please Try Again Later";
 }
  } 
 


 ?> 
  </div>
</center>
    </div>
 



</body>
</html>

 </body>
 </html>
