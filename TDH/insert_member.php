<?php
 require_once("./php/dbtools.php");
  header("Content-type: text/html; charset=utf-8");
  
  //取得表單資料
  $email =$_POST["email"];
  $password = $_POST["password"]; 
  $name =$_POST["name"]; 
  $gen= $_POST["gen"];
  $bir = $_POST["bir"]; 
  $tele= $_POST["tele"]; 
  $job = $_POST["job"]; 


  //建立資料連接
  $link = mysql_connect("localhost", "catcat", "1234") or die("無法建立連接");
  mysql_query("set names utf8");
			
  //檢查帳號是否有人申請
 $sql = "SELECT * FROM member Where email = '$email'";
  $result = execute_sql("tdh", $sql, $link);

  //如果帳號已經有人使用
  if (mysql_num_rows($result) != 0)
  {
    //釋放 $result 佔用的記憶體
    mysql_free_result($result);
		
    //顯示訊息要求使用者更換帳號名稱
    echo "<script type='text/javascript'>";
    echo "alert('您所指定的帳號已經有人使用，請使用其它帳號');";
    echo "history.back();";
    echo "</script>";
  }
	
  //如果帳號沒人使用
  else
  {
    //釋放 $result 佔用的記憶體	
   // mysql_free_result($result);
		
    //執行 SQL 命令，新增此帳號
	
    $sql = "INSERT INTO member (email, password,name,sex,birthday,telephone,job) VALUES ('$email', '$password', '$name','$gen','$bir','$tele','$job')";

    $result1 = execute_sql("tdh", $sql, $link);
	
	
  }
	
  //關閉資料連接	
  mysql_close($link);
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>新增帳號成功</title>
  </head>
  <body bgcolor="#FFFFFF">
    <p align="center">      
    <p align="center">恭喜您已經註冊成功了，您的資料如下：（請勿按重新整理鈕）<br>
      帳號：<font color="#FF0000"><?php echo $email ?></font><br>
      密碼：<font color="#FF0000"><?php echo $password ?></font><br>       
      請記下您的帳號及密碼，然後<a href="index.php">登入網站</a>。
    </p>
  </body>
</html>