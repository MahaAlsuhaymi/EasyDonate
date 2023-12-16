<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html dir="rtl">
<head>
<title>Easy Donate</title>
<link rel="stylesheet" href="style.css">
<link href="images/">

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "شكرا لك!";
}
</script>
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
<img src="images/28.png" width="100%" height="600">

<!-- End of Menu section -->

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


if(isset($_GET['org_name']) && isset($_GET['type']) && isset($_SESSION['id']) ){
$org_name=$_GET['org_name'];
$type=$_GET['type'];
$name=$_POST['name'];
 $address=$_POST['address'];
 $contact=$_POST['contact'];
 $userid=$_SESSION['id'];

$insert_user=mysqli_query($connect,"INSERT INTO  organization(type,org_name,address,contact,don_date,user_name,user_id ) 
VALUES('$type','$org_name','$address','$contact',NOW(),'$name','$userid')");
if ($insert_user) {

echo '<script language="javascript">';
echo 'alert("لقد تم التبرع بنجاح!")';
echo '</script>';

    }
}


elseif (isset($_GET['org_name']) && isset($_GET['type']) ){
$org_name=$_GET['org_name'];
$type=$_GET['type'];
$name=$_POST['name'];
 $address=$_POST['address'];
 $contact=$_POST['contact'];

$insert_user=mysqli_query($connect,"INSERT INTO  organization(type,org_name,address,contact,don_date,user_name) 
  VALUES('$type','$org_name','$address','$contact',NOW(),'$name' )");
    if ($insert_user) {

echo '<script language="javascript">';
echo 'alert("لقد تم التبرع بنجاح!")';
echo '</script>';

header("Refresh:3; url=main.php");

    }
}

  }
    else
 {
  echo '<script language="javascript">';
echo 'alert("لم يتم التبرع!")';
echo '</script>';
 }
  

 ?> 

    <div class="home-content">

<center>
<div class="Login">

  <div class="Login_2">
    <center><i>تبرع</i></center>
  <hr ><br>
<form method="POST">

  <label>الاسم</label>
  <input type="text" name="name" required><br>

  <label>رقم الهاتف</label>
  <input type="number" name="contact" required><br>

  <label>العنوان:</label>
  <input type="Text" name="address" required><br>

<center><input type="submit" value="تأكيد التبرع" >
<br>
</form>
  </div>

    <div class="Login_1">
  <img class="Login_img" src="images/19.jpg" width="350px" >
  </div>
  </div>
</center>
    </div>
 

 


<br><br>






<center>
    <footer id="footer">
      <div class="content">

        <div class="social-media">
          <h4>وسائل التواصل الاجتماعي</h4>
          <p>
           تويتر
          </p>
          <p>
           فيس بوك
          </p>
          <p>
           انستغرام
          </p>
        </div>
        <div class="links">
          <h4>روابط سريعة</h4>
          <p><a href="Home.php">الرئيسية</a></p>
          <p><a href="About_us.php">من نحن؟</a></p>
          <p><a href="Contact.php">تواصل معنا </a></p>
        </div>
        <div class="details">
          <h4 class="mobile">رقم الهاتف</h4>
          <p><a href="#">+966-776655449</a></p>
          <h4 class="mail">البريد الالكتروني</h4>
          <p><a href="#">easydonate@gmail.com</a></p>
        </div>
      </div>
      <footer>
        <hr />
        EasyDonate. © 2023
      </footer>
</center>

</body>
</html>

 </body>
 </html>
