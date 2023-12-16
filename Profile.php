<?php 
session_start();
include("connect.php");
?>


<!DOCTYPE html>
<html >
<head>
<title>Easy Donate</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="admin.css">
<link href="images/">
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
<!-- End of Menu section -->

<div class="home-content">
<center>
  <div style="margin-top: 80px;"><i>تبرعاتي</i><br><br>
<hr width="60%"><br>


<table id="products">
    <tr>    
    <th>المنظمة</th>
    <th>تاريخ التبرع</th>
    <th>نوع التبرع</th>
    </tr>

<?php

$user= $_SESSION['id'];

 $show_data= mysqli_query ($connect ,"SELECT * FROM organization where user_id= '$user' "); //connect with the database
$num = mysqli_num_rows($show_data); //check if there is any rows
if($num)
 {
  while($data_result= mysqli_fetch_assoc($show_data)) 
   echo'<tr style="text-align:left">
<td>' .$data_result['org_name'].'</td>
<td>' .$data_result['don_date'].'</td>
<td>' .$data_result['type'].'</td>
</tr>';
}
else
{
  echo "لا يوجد لديك تبرعات";
  echo "<br/>";
}

?>
</div>
    </div>
  </section>
</table> 
</center>


<br><br><br>
</body>
</html>

