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
<body style="margin: 0px;">

<!-- start of Menu section -->
<ul style="font-size: 18px; font-weight: bold;">

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
  echo"<li style='float:left !important'><a class='active' href='Type.php'>تبرع لمرة واحدة</a></li>";

}
?>
</ul>
<img src="images/header_1.png" width="100%" height="600">

<!-- End of Menu section -->

<?php  
if(isset($_SESSION['name'])){
echo '
<br><br>
<hr>
<!-- Start of flex container -->

<div class="Wardrobe">
<br><br>
<center><i>بماذا تريد أن تتبرع؟</i><br>
<p>--اختر من الاقسام التالية--</p> 
</center>
<hr width="50%"><br>

<div class="flex-container">

<div class="container">
  <img src="images/clothes_pic.png" class="image" style="width:100%">
  <div class="middle">
    <a href="Type.php?type=clothes" class="text">تبرع الان!</a>
  </div>
</div>

<div class="container">
  <img src="images/books_pic.png"  class="image" style="width:100%">
  <div class="middle">
    <a href="Type.php?type=books" class="text">تبرع الان!</a>
  </div>
</div>


<div class="container">
  <img src="images/food_pic.png"  class="image" style="width:100%">
  <div class="middle">
    <a href="Type.php?type=food" class="text">تبرع الان!</a>
  </div>
</div>


<div class="container">
  <img src="images/blood_pic.png" class="image" style="width:100%">
  <div class="middle">
    <a href="Type.php?type=Blood" class="text">تبرع الان!</a>
  </div>
</div>


</div> 
</div>
';

}
?>


<!-- Start of slideshow-->
<br><br>

<center><i>معا نحو حياة أفضل!</i><br>
</center>
<hr width="50%"><br>

<center>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/16.jpg" style="width:80%; height: 400px">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/36.jpg" style="width:80% ; height:400px;">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/35.jpg" style="width:80% ; height: 400px">
</div>
</div>
<br>


<i id="demo" style="font-size: 18px;">هل قمت بالتبرع؟
</i><br>
<button type="button" onclick="myFunction()">نعم!</button>
<br><br>
<div>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</center>
<!-- end of slideshow-->


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

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}



</script>