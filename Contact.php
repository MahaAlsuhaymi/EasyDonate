<!DOCTYPE html>
<html lang="en">
<head>
<title>Easy Donate</title>
<link rel="stylesheet" href="style.css">
<link href="images/">
<style type="text/css">
  
  form
{
  padding: 15px;
  text-align: left;
    margin: 5px;
  width: 50%;
}

input[type=submit] {
  width: 100%;
  background-color: #1a8497 !important;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;

}


input[type=password],input[type=email], select,input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea 
{
    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>


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


<h1 style="text-align: center;">تواصل معنا</h1>
<hr width="50%"><br>

<center>
<form action="/action_page.php">
  <label for="name">الاسم</label>
  <input type="text" id="name" name="name" required><br>
  <label for="Email">البريد الالكتروني</label>
  <input type="email" id="Email" name="Email" ><br>
  <p>الجنس</p>
 <input type="radio" id="Male" name="Gender" value="Male">
 <label for="Male">ذكر</label><br>
 <input type="radio" id="Female" name="Gender" value="Female">
 <label for="Female">انثى</label><br><br>
 <label for="message">الرسالة</label><br>
 <textarea id="textarea" name="message" width="200px" rows="3" cols="30" placeholder="أكتب لنا رسالة هنا...">
</textarea><br>
 <input type="submit" value="أرسال">

</form>
</center>

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