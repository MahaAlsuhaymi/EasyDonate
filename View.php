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


<?php
if(isset($_GET['org_name'])){
$org_name=$_GET['org_name'];

if ($org_name == 'ethar') {

echo'
<center>
    <br>
    <br>
<i>  أيثار  </i>
<hr width="50%"><br>
<section style=" background-color: white; width:800px">
<p style="font-size:18px; text-align:right">
تم إنشاء جمعية إيثار في عام 2010م بموافقة وزارة الموارد البشرية والتنمية الاجتماعية تحت مسمى (الجمعية الخيرية السعودية لتنشيط التبرع بالأعضاء بالمنطقة الشرقية) والاسم المختصر (إيثار).

تتشرف الجمعية بالرئاسة الفخرية لصاحب السمو الملكي الأمير سعود بن نايف بن عبدالعزيز - حفظه الله - وتهدف لتوعية المجتمع بأمراض القصور العضوي والتبرع بالأعضاء، وزيادة عدد المتبرعين لدعم برنامج زراعة الأعضاء في المملكة العربية السعودية، بالإضافة إلى دعم مضى القصور العضوي وذويهم، وتوجيههم صحياً ونفسياً.

 </p>

</section>
<img src="images/ethar.jpg" width="50%" height="400">
</center>
';

} //end of ethar if


elseif ($org_name == 'Blood_Bank') {

echo'
<center>
    <br>
    <br>
<i>  جمعية أصدقاء بنوك الدم الخيرية  </i>
<hr width="50%"><br>
<section style=" background-color: white; width:800px">
<p style="font-size:18px; text-align:right">
جمعية أصدقاء بنوك الدم الخيرية (دمي) هي أول جمعية متخصصة في مجال المتبرعين بالدم ومقرها القصيم - بريدة ، تهدف إلى رفع مستوى الوعي بأهمية التبرع الطوعي بالدم، وكذلك تشجيع وتحفيز المتبرعين الطوعيين بالدم، وتقديم المساندة والدعم لمرضى أمراض الدم، تحت مظلة المركز الوطني لتنمية القطاع الغير الربحي ترخيص رقم ( 650 )
 </p>

</section>
<img src="images/blood1.jpg" width="50%" height="400">
</center>
';

} //end of Blood_Bank


elseif ($org_name == 'Saudi_Food_Bank') {

echo'
<center>
    <br>
    <br>
<i>  
بنك الطعام السعودي
 </i>
<hr width="50%"><br>
<section style=" background-color: white; width:800px">
<p style="font-size:18px; text-align:right">
جمعية أهلية متخصصة بالغذاء ، مرخصة من وزارة الموارد البشرية والتنمية الاجتماعية (ترخيص رقم 600) كأول بنك للطعام بالمملكة ومنطقة الخليج .

تأسست ” إطعام ” في عام 2011 بمدينة الدمام تحت مسمى الجمعية الخيرية للطعام بالمنطقة الشرقية بهدف حفظ النعمة من الهدر ، وفي منتصف عام 2021 صدرت الموافقة الوزارية على تطوير نشاط الجمعية وأهدافها ، وتغيير مسماها لتصبح جمعية بنك الطعام السعودي (إطعام) .
 </p>

</section>
<img src="images/food1.jpg" width="50%" height="400">
</center>
';

} //end of Saudi_Food_Bank


elseif ($org_name == 'Khayrat') {

echo'
<center>
    <br>
    <br>
<i>  
خيرات لحفظ النعمة
 </i>
<hr width="50%"><br>
<section style=" background-color: white; width:800px">
<p style="font-size:18px; text-align:right">
جمعية خيرية غير ربحية متخصصة بحفظ فائض الولائم من الفنادق , المطاعم , القصور , الاستراحات والمنازل . حيث يقوم فريق العمل الميداني المختص بفرز هذا الفائض وإعادة ترتيبه و توزيعه على الأسر المحتاجة.

حفظ النعمة من الهدر من خلال جمع فائض الطعام عبر الفرق الميدانية ووفق معاير الصحة العالمية, وتوزيعه لفئات المجتمع المحتاجة والاستفادة منه لتحقيق مفهوم التكافل الاجتماعي.
 </p>

</section>
<img src="images/food2.jpg" width="50%" height="400">
</center>
';

} //end of Khayrat



elseif ($org_name == 'Tadweer') {

echo'
<center>
    <br>
    <br>
<i>  
تدوير الوقفية
 </i>
<hr width="50%"><br>
<section style=" background-color: white; width:800px">
<p style="font-size:18px; text-align:right">
إعادة تأهيل الفائض المهدر (من الأثاث والأجهزة والكتب والورق والبلاستك والملابس وغيرها) وتنظيف وتوضيب المهدر بشكل يمكّن من بيعه والاستفادة منه. 
 </p>

</section>
<img src="images/book1.png" width="50%" height="400">
</center>
';

} //end of Tadweer


elseif ($org_name == 'Lebas') {

echo'
<center>
    <br>
    <br>
<i>  
مشروع لباس 
 </i>
<hr width="50%"><br>
<section style=" background-color: white; width:800px">
<p style="font-size:18px; text-align:right">
يسهم مشروع لباس في تسهيل دعم الجمعيات الخيرية المتعاقدة من فائض الموارد المستعملة وتحويلها لمنفعة تعود لها ولمستفيديها ، وتسهم في تحقيق الاستدامة المالية .

يتصدر المشروع كافة الوسائل المتاحة لمواكبة الحداثة وضمان وصوله لأكبر شريحة ممكنة وتقديم محتوى توعوي تفاعلي يهدف لزيادة الوعي المجتمعي عن اهمية التدوير والحفاظ على البيئة
 </p>

</section>
<img src="images/clothes1.png" width="50%" height="400">
</center>
';

} //end of Lebas


elseif ($org_name == 'Kaswa') {

echo'
<center>
    <br>
    <br>
<i>  
مشروع كسوة
 </i>
<hr width="50%"><br>
<section style=" background-color: white; width:800px">
<p style="font-size:18px; text-align:right">
شركة مختصة في إعادة تدوير الملابس لحماية البيئة من خطر النفايات النسيجية ودعم الجمعيات الخيرية المتعاقدة بتقديم ريع مالي من إعادة التدوير.

دعم كافة الجمعيات الخيرية المعتمدة بتسهيل عملية جمع الملابس وفرزها وتصنيفها وتقديمها بالمظهر اللائق.

حماية البيئة بدعم الاستدامة النسيجية وتعزيز الوعي المجتمعي عن أخطار النفايات النسيجية
 </p>

</section>
<img src="images/clothes2.png" width="50%" height="400">
</center>
';

} //end of Kaswa


} //end main if




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
