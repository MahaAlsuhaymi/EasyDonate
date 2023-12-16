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

<style type="text/css">
  dl.faq button {
  margin: 0;
  margin-top: 16px;
  padding: 4px 8px;
  font-weight: bold;
  font-size: 110%;
  border: none;
  background-color: transparent;
  border-radius: 5px;
  color: black;
  width: 100%;
  text-align: right;
}

dl dd {
  margin: 0;
  padding: 0;
  margin-left: 1.5em;
  padding-bottom: 20px;
  border-bottom: 2px solid #777;
}

dl.faq .desc {
  margin: 0;
  margin-top: 0.25em;
  padding: 0.25em;
  font-size: 110%;
  display: none;
  background-color: white;
}

dl.faq button:hover,
dl.faq button:focus {
  padding: 2px 6px;
  background-color: #def;
  border: 2px solid #1a8497;
  cursor: pointer;
}

dl.faq button[aria-expanded="false"]::before {
  content: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='utf-8'%3F%3E%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12' style='forced-color-adjust: auto;'%3E%3Cpolygon points='1 1, 1 11, 8 6' fill='currentcolor' stroke= 'currentcolor' /%3E%3C/svg%3E%0A");
  position: relative;
  left: -2px;
}

dl.faq button[aria-expanded="true"]::before {
  content: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='utf-8'%3F%3E%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12' style='forced-color-adjust: auto;'%3E%3Cpolygon points='1 1, 11 1, 6 8' fill='currentcolor' stroke= 'currentcolor' /%3E%3C/svg%3E ");
  position: relative;
  left: -4px;
  top: 2px;
}


</style>
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





<br><br>

<center>
<i id="Faq">
  <abbr title="Frequently Asked Question">
    الأسئلة الشائعة
  </abbr>
</i>
</center>

<hr>
<dl class="faq">
  <dt>
    <button type="button"
            aria-expanded="false"
            aria-controls="faq1_desc">
   كيف يمكنني أن أتبرع؟
    </button>
  </dt>
  <dd>
    <div id="faq1_desc" class="desc">
يمكنك أن تقوم بالتبرع عن طريق الضعط على نوع التبرع الذي تريد أن تقوم به واختيار المنظمة التي تريد التبرع اليها 
    </div>
  </dd>
  <dt>
    <button type="button"
            aria-expanded="false"
            aria-controls="faq2_desc">
 هل يمكنني ارجاع ماقمت بالتبرع به ؟
    </button>
  </dt>
  <dd>
    <div id="faq2_desc" class="desc">

لا, لا يمكنك ذلك
    </div>
  </dd>
  <dt>
    <button type="button"
            aria-expanded="false"
            aria-controls="faq3_desc">
      
هل هناك مقدار معين بخصوص ما أتبرع به؟

    </button>
  </dt>
  <dd>
    <div id="faq3_desc" class="desc">
ليس هناك مقدار معين يمكنك أن تقوم بالتبرع بما يناسبك 
    </div>
  </dd>
  <dt>
    <button type="button"
            aria-expanded="false"
            aria-controls="faq4_desc">
     الى أين تذهب التبرعات؟
    </button>
  </dt>
  <dd>
    <div id="faq4_desc" class="desc">
تذهب التبرعات الى دار الايتام وتوزع على المساكين في جميع انحاء المملكة العربية السعودية
    </div>
  </dd>
</dl>





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
