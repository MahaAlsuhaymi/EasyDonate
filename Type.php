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
</head>
<body style="margin: 0px; ">
  <!-- start of Menu section -->
<ul>

    <li ><a style="text-align: right;" href="Home.php">الرئيسية</a></li>
        <li><a href="Faqs.php">الأسئلة الشائعة</a></li>
        <li><a href="About_us.php">من نحن؟</a></li>
  <li><a href="Contact.php">تواصل معنا</a></li>

<?php  
if(isset($_SESSION['name'])){


echo"<li style='float:left !important'><a class='active' href='Logout.php'>تسجيل الخروج</a></li>";
echo"<li style='float:left !important'><a class='active' href='Edit.php'>الملف الشخصي</a></li>";

}
else
{
  echo"<li style='float:left !important'><a class='active' href='Login.php'>تسجيل الدخول </a></li>";

}
?>
</ul>
<img src="images/28.png" width="100%" height="600">

<!-- End of Menu section -->

<div class="Wardrobe">
<br><br>
<center><i>بماذا تريد أن تتبرع؟</i><br>
<p>--اختر من الاقسام التالية--</p> 
</center>
<hr width="50%"><br>

<div class="flex-container">

<div class="container">
  <img src="images/clothes.png" class="image" style="width:100%">
  <div class="middle">
    <a href="Type.php?type=clothes" class="text">تبرع الان!</a>
  </div>
</div>

<div class="container">
  <img src="images/books.png"  class="image" style="width:100%">
  <div class="middle">
    <a href="Type.php?type=books" class="text">تبرع الان!</a>
  </div>
</div>


<div class="container">
  <img src="images/food.png"  class="image" style="width:100%">
  <div class="middle">
    <a href="Type.php?type=food" class="text">تبرع الان!</a>
  </div>
</div>


<div class="container">
  <img src="images/Blood.png" class="image" style="width:100%">
  <div class="middle">
    <a href="Type.php?type=Blood" class="text">تبرع الان!</a>
  </div>
</div>


</div> 
</div>


<!--Donation Types End-->


<?php
if(isset($_GET['type'])){
$type=$_GET['type'];

if ($type == 'Blood') {

echo '
<br><br>
<center><i>المنظمات المدعومة للتبرع بالدم</i><br>
<hr width="50%">
</center>
<div class="flex-container">

<div class="container">
<img src="images/ethar.jpg" class="image" style="width:100%">
    <div class="middle">
    <a href="View.php?org_name=ethar" class="text">عرض المنظمة </a><br>
    <a href="Donate.php?org_name=ethar&type=blood" class="text">التبرع للمنظمة  </a>
  </div>

</div>

<div class="container">
  <img src="images/blood1.jpg" class="image" style="width:100%">
    <div class="middle">
    <a href="View.php?org_name=Blood_Bank" class="text">عرض المنظمة</a>
    <a href="Donate.php?org_name=Blood_Bank&type=blood" class="text">التبرع للمنظمة  </a>
  </div>
</div>
</div> 

';
} //end of blood if

elseif ($type == 'food') {

  echo '
<br><br>
<center><i>المنظمات المدعومة للتبرع بالمواد الغذائية</i><br>
<hr width="50%">
</center>
<div class="flex-container">

<div class="container">
<img src="images/food1.jpg" class="image" style="width:100%">
    <div class="middle">
    <a href="View.php?org_name=Saudi_Food_Bank" class="text">عرض المنظمة </a><br>
     <a href="Donate.php?org_name=Saudi_Food_Bank&type=food" class="text">التبرع للمنظمة  </a>
  </div>

</div>

<div class="container">
  <img src="images/food2.jpg" class="image" style="width:100%">
    <div class="middle">
    <a href="View.php?org_name=Khayrat" class="text">عرض المنظمة</a>
    <a href="Donate.php?org_name=Khayrat&type=food" class="text">التبرع للمنظمة  </a>
  </div>
</div>
</div> 

';

} // end of elseif


elseif ($type == 'books') {

  echo '
<br><br>
<center><i>المنظمات المدعومة للتبرع بالكتب</i><br>
<hr width="50%">
</center>
<div class="flex-container">


<div class="container">
  <img src="images/book1.png" class="image" style="width:100%; height: 350px">
    <div class="middle">
    <a href="View.php?org_name=Tadweer" class="text">عرض المنظمة</a>
    <a href="Donate.php?org_name=Tadweer&type=books" class="text">التبرع للمنظمة  </a>
  </div>
</div>
</div> 

';

} // end of elseif

elseif ($type == 'clothes') {

  echo '
<br><br>
<center><i>المنظمات المدعومة للتبرع بالملابس</i><br>
<hr width="50%">
</center>
<div class="flex-container">


<div class="container">
  <img src="images/clothes1.png" class="image" style="width:100%; height: 350px">
    <div class="middle">
    <a href="View.php?org_name=Lebas" class="text">عرض المنظمة</a>
    <a href="Donate.php?org_name=Lebas&type=clothes" class="text">التبرع للمنظمة  </a>
  </div>
</div>

<div class="container">
  <img src="images/clothes2.png" class="image" style="width:100%; height: 350px">
    <div class="middle">
    <a href="View.php?org_name=Kaswa" class="text">عرض المنظمة</a>
    <a href="Donate.php?org_name=Kaswa&type=clothes" class="text">التبرع للمنظمة  </a>
  </div>
</div>



</div> 

';

} // end of elseif
 
}
?>
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
