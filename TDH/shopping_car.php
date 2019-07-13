<?php
header('Content-type: text/html; charset=utf-8');
require_once("./php/Car.php");
session_start();
 
$MyCart = new Cart();
 
$Myitems = $MyCart->getAllItems();
 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<script type="text/javascript" src="./js/prototype.js"></script>
<script type="text/javascript" src="./js/MyCar.js"></script>
    <script type="text/javascript">
        function getCookie(name) {
            var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");

            if (arr = document.cookie.match(reg))

                return unescape(arr[2]);
            else
                return null;
        }

        window.onload = function() {
            if (getCookie("id")) {
                document.getElementById("llogin").style.display = "none";
                document.getElementById("llogout").style.display = "visible";
            }
            if (!getCookie("id")) {
                document.getElementById("llogin").style.display = "visible";
                document.getElementById("llogout").style.display = "none";
            }
        }

    </script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">貓茶町</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">首頁
              </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">關於</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="note.html">購物須知</a>
                    </li>
                    <li class="nav-item active">
                        <a id="llogin" class="nav-link" href="signin.html">登入/註冊
                <span class="sr-only">(current)</span>
                </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="center.html">會員中心</a>
                    </li>
					
                    <li class="nav-item">
                        <a id="llogout" class="nav-link" href="logout.html">登出</a>
                    </li>
                    <a href="shopping_car.php">
                        <li class="nav-item">
                            <i class="fa fa-2x fa-shopping-cart text-white" aria-hidden="true"></i>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
<br>
<br>
<br>
<br>
<br>
													<div class="right_main">
											<div class="product">
											<div class="product_b_body">
											<form id="myform" action="./php/OrderForm.php" method="post"
												onsubmit="return checkForm();">
											<div class="shopping">
											<div class="shopping_body">
											<table width="100%" border="0" cellpadding="6" cellspacing="0"
												id="mytable">
												<tr>
													<td width="43%" class="shopping_w1"
														style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">商品名稱</td>
													<td width="21%" class="shopping_w1"
														style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">價
													格</td>
													<td width="21%" class="shopping_w1"
														style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">數
													量</td>
													<td width="15%" style="border-bottom: 1px solid #d2d2d2;">
													<table width="96" border="0" cellpadding="0" cellspacing="0">
														<tr>
															<td width="70%" align="center" valign="middle"></td>
															<td width="30%" align="center" valign="middle"></td>
														</tr>
													</table>
													</td>
												</tr>
												<?php
											 
												$checkcount = 0;
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
													<td <?php echo $background;?>><select
														name="Quity<?php echo $Myitem->_sn;?>" class="shopping_down"
														onchange="amount();">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
													</select></td>
													<td <?php echo $background;?>>
													<table width="96" border="0" cellpadding="0" cellspacing="0">
														<tr>
															<td width="70%" align="center" valign="middle">
															<input  name="button<?php echo $Myitem->_sn; ?>" type="button"
																class="shopping_bt" style="cursor: pointer;"
																onclick="del(<?php echo $Myitem->_sn;?>);history.go(0);" value="刪除" /></td>
															<td width="30%" align="center" valign="middle"></td>
														</tr>
													</table>
													</td>
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
											<table  border="0" cellpadding="5" cellspacing="0"
												style="margin-top: 10px;">
												<tr>
													<td colspan="2" align="right">總金額：<span class="shopping_w2"
														id="amount">0</span>元</td>
												</tr>
											 
											</table>
											<script type="text/javascript">amount();</script>
											 
											<table  border="0" cellpadding="0" cellspacing="0"
												style="margin-top: 10px;">
												<tr>
													<td align="right"><input name="Submit2" type="submit"
														class="shopping_bt1" style="cursor: pointer;" value="下一步" /></td>
												</tr>
											</table>
											</form>
											</div>
											</div>
											</div>
    </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="col-lg-12">
                <p class="m-0 text-center text-white">TEL:02-2937-6800</p>
                <p class="m-0 text-center text-white">ADDRESS:11650台北市文山區保儀路117號</p>
                <p class="m-0 text-center text-white">TDH &copy; Founded in 2007</p>
            </div>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
