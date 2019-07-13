<?php
header('Content-type: text/html; charset=utf-8');
 

require_once "./Car.php";
 
session_start();
 
$Cart = new Cart();
 

 
$sn = $_GET["sn"];

$num = $_GET['num'];
//echo $sn;
if(!is_numeric($num)){
$num = 1;}


if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)&& $sn==1){
    $Cart->addItem($sn, "韻紅紅茶蛋糕", 360, $num, "描述", "盒");
 
}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)&& $sn==2){
    $Cart->addItem($sn, "日月潭紅玉紅茶布丁", 360, $num, "描述", "盒");
 
}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)&& $sn==3){
    $Cart->addItem($sn, "木柵鐵觀音泡芙", 300, $num, "描述", "盒");
 
}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)&& $sn==4){
    $Cart->addItem($sn, "經典NO2禮盒", 360, $num, "描述", "盒");
 
}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)&& $sn==5){
    $Cart->addItem($sn, "台灣茶5味薄片巧克力", 200, $num, "描述", "盒");
 
}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)&& $sn==6){
    $Cart->addItem($sn, "文山包種茶生乳卷", 340, $num, "描述", "盒");
 
}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)&& $sn==7){
    $Cart->addItem($sn, "鐵觀音可麗露", 360, $num, "描述", "盒");
 
}
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)&& $sn==8){
    $Cart->addItem($sn, "鐵觀音乳酪", 320, $num, "描述", "盒");
 
}if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)&& $sn==9){
    $Cart->addItem($sn, "鐵觀音舒芙蕾禮盒", 360, $num, "描述", "盒");
 
}
//加入成功後回到前一頁
$referer  = $_SERVER['HTTP_REFERER'];
if(strlen(trim($referer))==0)
	echo "已成功加入購物車";
$referer = "../index.php";

 
header("Location:$referer");
?>