<?php
header('Content-type: text/html; charset=utf-8');
include "./Car.php";

session_start();

require_once("./dbtools.php");
$link = mysql_connect("localhost", "catcat", "1234") or die("無法建立連接");
 mysql_query("set names utf8");

$date=@$_POST["day"];

//echo $Myitems;
$Myitems = $_SESSION['Myitems'];
//echo $_SESSION['Myitems'];


foreach ($Myitems as $key => $Myitem){
$member_ID=$_COOKIE["id"];

$member_name=$_COOKIE["name"];
$date=@$_POST["day"];

$storage=$Myitem->_name;
//echo $Myitem->_name;
//echo $Myitems->_name;
//echo $Myitem->_price;
$number=$Myitem->_quantity;
$mo=$Myitem->_price;;
//echo $number, $mo;
$money=$mo*$number;
$location=$_POST["address"];
$note=$_POST["note"];

echo $member_ID,$member_name,$date,$storage,$number,$money,$location,$note;

$sql = "INSERT INTO orderment (member_ID, member_name, date, storage, number, money, location, note) VALUES ($member_ID, '$member_name', '$date','$storage','$number','$money','$location','$note')";

   $result = execute_sql("tdh", $sql, $link);
   echo "您的訂單已成立!";
   

}
?>
<html>
<br>
<a href="../index.php">回首頁</a>
</html>
























