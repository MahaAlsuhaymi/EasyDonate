<?php 
$host ="localhost";
$user ="root";
$pass ="root";
$db_name="donate"; 
$connect =mysqli_connect($host,$user,$pass,$db_name);

if (!$connect) {
    echo 'Error: ' . mysqli_connect_error();
}

?>
