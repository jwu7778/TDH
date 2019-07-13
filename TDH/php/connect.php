<?php
	require_once("dbtools.php");
  header("Content-type: text/html; charset=utf-8");
	


	
$email = $_POST["email"];
$password = $_POST["password"];

	mysql_select_db("tdh");
	$link = create_connection();
	
	

//搜尋資料庫資料
$sql="SELECT * FROM member WHERE email='$email' AND password='$password'";
$result = execute_sql("tdh", $sql, $link);
 
 //如果帳號密碼錯誤
  if (mysql_num_rows($result) == 0)
  {
    //釋放 $result 佔用的記憶體
    mysql_free_result($result);
	
    //關閉資料連接	
    mysql_close($link);		
		
    //顯示訊息要求使用者輸入正確的帳號密碼
    echo "<script type='text/javascript'>";
    echo "alert('帳號密碼錯誤，請查明後再登入');";
    echo "history.back();";
    echo "</script>";
  }
	
  //如果帳號密碼正確
  else
  {
    //取得 id 欄位
    $id = mysql_result($result, 0, "member_ID");
	 $name = mysql_result($result, 0, "name");
	
    //釋放 $result 佔用的記憶體	
    mysql_free_result($result);
		
    //關閉資料連接	
    mysql_close($link);				

    //將使用者資料加入 cookies
	
    setcookie("id", $id,time()+3600,"/","");
	setcookie("name", $name,time()+3600,"/","");
    setcookie("passed", "TRUE",time()+3600);	
echo$_COOKIE["id"];	
echo$_COOKIE["name"];	
  header("Location:../index.php"); 

	
  }


?>