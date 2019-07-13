<?php
header('Content-type: text/html; charset=utf-8');

include "./Car.php";
session_start();

$MyCart = new Cart();

$Myitems = $MyCart->getAllItems();


foreach ($Myitems as $key => $Myitem){
	//echo $key ;','; $value;
	$q = @$_POST['Quity'.$key];
	//echo $q;
	$Myitem->updateItem($q);
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的購物車</title>


<script type="text/javascript">
function check_1(){
	  if (myform.address.value == null)
        alert("取貨地址欄位不可以空白哦！");
       else if (myform.day.value == null)
          alert("取貨日期不可以空白哦！");
        else {
		console.log('Hello');
        myform.submit();
		}
}
	    
</script>
</head>

<body>

<div class="right_main">
<div class="product">
<div class="product_b_body">

	
<form id="myform" action="put.php" method="post">
<div class="shopping">
<div class="shopping_body">
<table width="100%" border="0" cellpadding="6" cellspacing="0"
	id="mytable">
	<tr>
	<td>會員姓名</td>
	<td> <?php echo $_COOKIE["name"];?></td>
	</tr>
	<tr>
	<td>會員代號</td>
	<td> <?php echo $_COOKIE["id"];?></td>
	</td>
	<br><br>
	<tr>
	<td><label for="day"><span class="require">*</span>取貨日期</label>
                    <input type="date" name="day" class="form-control" id="day" placeholder=""></td>
					<br><br>
<td><label for="address"><span class="require">*</span>地址</label>
                    <input type="text" name="address" value="" ></td>
					<br><br>
					<td><label for="note">備註</label>
                    <input type="text" name="note" value="" maxlength="20"></td>
					
					</tr>
	<tr>
		<td width="43%" class="shopping_w1"
			style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">商品名稱</td>
		<td width="21%" class="shopping_w1"
			style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">價格</td>
		<td width="21%" class="shopping_w1"
			style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">數量</td>
	</tr>
	<?php
	$checkcount = 0;
	
	//echo $Myitems;
	$_SESSION['Myitems']=$Myitems;
	//echo $_SESSION['Myitems'];
	if ($Myitems)
	{
		
		foreach ($Myitems as $key => $Myitem)
		{
			$checkcount ++;
			$background  = $checkcount%2==1?"bgcolor=\"#e7e7e7\"":"";
			//var_export($Myitem);
			?>
	<tr id="item_<?php echo $Myitem->_sn;?>">
		<td <?php echo $background;?>><input type="hidden"
			name="item<?php echo $Myitem->_sn;?>"
			value="<?php echo $Myitem->_sn;?>"></input> <?php echo $Myitem->_name; ?></td>
		<td <?php echo $background;?>><?php echo $Myitem->_price; ?>元</td>
		<td <?php echo $background;?>><?php echo $Myitem->_quantity;?></td>
	</tr>
	<?php
		}
	}
	else{
		?>
	<tr>
		<td bgcolor="#e7e7e7" colspan="4">目前無任何購物資料</td>
	</tr>
	<?php
	}
	?>
	
					
</table>

</div>
</div>
<input type="button"  value="提交訂單" class="btn btn-primary"  role="button" onClick="check_1();"/>
</form>
</div>
</div>
</div>
</body>
</html>
