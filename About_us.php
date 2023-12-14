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

}
?>
</ul>
<img src="images/28.png" width="100%" height="600">


 <!-- start of About section -->

<div class="about" id="about">

  <div>
    <center>
             <br><br><br>
  <i style="text-align: center;">من نحن؟</i>
 <pre> <p style="font-size:17px">نحن نسعى لتوفير وسيلة سهلة وموثوقة للأفراد للمساهمة في الأعمال الخيرية ودعم القضايا الإنسانية.
 نحن نؤمن بأن قوة التبرعات تكمن في قدرتنا على التكاتف والعمل المشترك لتحقيق تغيير إيجابي في المجتمع. 
يعد موقعنا منصة شفافة وموثوقة حيث يمكن للأفراد العثور على العديد من الحملات والمشاريع الخيرية المختلفة
 والتبرع لها بكل سهولة وأمان. نحن ملتزمون بضمان أن كل تبرع يصل إلى الجهة المستحقة وأن كل مساهمة 
تحقق فعليًا تأثيرًا إيجابيًا. نحن ندعم التنوع في القضايا ونسعى لتمكين الجميع للمساهمة والمشاركة في بناء عالم أفضل.
</p></pre>
</center>
  </div>
  <div>
  <img class="about_image" src="images/about.png"  >
  </div>
  </div>
  <!-- end of About section -->
  <div class="clean"></div>
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
          <p><a href="About.php">من نحن؟</a></p>
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


/*
 *   This content is licensed according to the W3C Software License at
 *   https://www.w3.org/Consortium/Legal/2015/copyright-software-and-document
 *
 *   File:   disclosure-button.js
 *
 *   Desc:   Disclosure button widget that implements ARIA Authoring Best Practices
 */

'use strict';

/*
 *   @constructorDisclosureButton
 *
 *
 */
class DisclosureButton {
  constructor(buttonNode) {
    this.buttonNode = buttonNode;
    this.controlledNode = false;

    var id = this.buttonNode.getAttribute('aria-controls');

    if (id) {
      this.controlledNode = document.getElementById(id);
    }

    this.buttonNode.setAttribute('aria-expanded', 'false');
    this.hideContent();

    this.buttonNode.addEventListener('click', this.onClick.bind(this));
    this.buttonNode.addEventListener('focus', this.onFocus.bind(this));
    this.buttonNode.addEventListener('blur', this.onBlur.bind(this));
  }

  showContent() {
    if (this.controlledNode) {
      this.controlledNode.style.display = 'block';
    }
  }

  hideContent() {
    if (this.controlledNode) {
      this.controlledNode.style.display = 'none';
    }
  }

  toggleExpand() {
    if (this.buttonNode.getAttribute('aria-expanded') === 'true') {
      this.buttonNode.setAttribute('aria-expanded', 'false');
      this.hideContent();
    } else {
      this.buttonNode.setAttribute('aria-expanded', 'true');
      this.showContent();
    }
  }

  /* EVENT HANDLERS */

  onClick() {
    this.toggleExpand();
  }

  onFocus() {
    this.buttonNode.classList.add('focus');
  }

  onBlur() {
    this.buttonNode.classList.remove('focus');
  }
}

/* Initialize Hide/Show Buttons */

window.addEventListener(
  'load',
  function () {
    var buttons = document.querySelectorAll(
      'button[aria-expanded][aria-controls]'
    );

    for (var i = 0; i < buttons.length; i++) {
      new DisclosureButton(buttons[i]);
    }
  },
  false
);
</script>

 </body>
 </html>
