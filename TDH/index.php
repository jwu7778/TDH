
<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

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


        function check_1() {
            if (login.email.value.length == 0)
                alert("帳號欄位不可以空白哦！");
            else if (login.password.value.length == 0)
                alert("密碼欄位不可以空白哦！");
            else
                login.submit();
        }

        function check_2() {
            if (!document.getElementById("a").checked) {
                alert("記得勾選同意喔!");
                return false;
            }

            if (join.email.value.length == 0) {
                alert("「帳號」一定要填寫哦...");
                return false;
            }
            if (join.email.value.length > 10) {
                alert("「帳號」不可以超過 10 個字元哦...");
                return false;
            }
            if (join.password.value.length == 0) {
                alert("「密碼」一定要填寫哦...");
                return false;
            }
            if (join.password.value.length > 10) {
                alert("「密碼」不可以超過 10 個字元哦...");
                return false;
            }
            if (join.re_password.value.length == 0) {
                alert("「密碼確認」欄位忘了填哦...");
                return false;
            }
            if (join.password.value != join.re_password.value) {
                alert("「密碼確認」欄位與「密碼」欄位一定要相同...");
                return false;
            }
            if (join.name.value.length == 0) {
                alert("您一定要留下真實姓名哦！");
                return false;
            }
            join.submit();
        }
    </script>

    <script>
        function addToCartFunction() {
            alert("成功加入購物車！");
        }
    </script>


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">




</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">TDH</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          首頁
          <i class="fa fa-bars"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">所有產品</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">購買須知</a>
                    </li>
                    <li class="nav-item">
                        <a  id="llogin" class="nav-link js-scroll-trigger" href="./signin.html">登入/註冊</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="./membership.html">會員中心</a>
                    </li>
                    <li class="nav-item">
                        <a id="llogout" class="nav-link js-scroll-trigger" href="logout.html">登出</a>
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

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Shop!</div>
                <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">瀏覽所有商品</a>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">關於我們</h2>
                    <h3 class="section-subheading text-muted">Learn more about us.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">創辦人與主廚 高憲鴻</h4>
                    <p class="text-muted">從小就居住在木柵的高師傅 多年來在台灣各地精進糕點技藝，但內心始終嚮往著伴他成長的貓空鐵觀音 毅然決然回到故鄉木柵，創立一間漫溢茶香特色甜點店－「TDH貓茶町」。
                        <br>TDH貓茶町以綠色梯田的房屋作為意象，其意義是高師傅對家庭與木柵在地濃厚之情感。高師傅想透過每一份在地茶點 讓更多人有機會體驗到新茗茶時尚與幸福的滋味。
                    </p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">TDH貓茶町 未來願景</h4>
                    <p class="text-muted">活躍的烘焙市場就如同戰場 每個品牌都擁有獨樹一幟的策略與風格，高師傅除了堅持糕點食材不含人工添加物之外，更將道地茗茶滋味－鐵觀音注入創意 延展多種層次豐富的蛋糕，讓高點創意與當地的人文特色推廣。
                        <br>木柵的聯想 會讓人想到品茗與一躍探望貓空的山谷，在這裡 透過一份簡單的伴手禮是高師傅執著於木柵的情感，未來不只要研發創新的鐵觀音系列糕點，更期盼有日讓木柵不只有貓空一個休息點，而是能夠全方位提升在地觀光休閒的產業價值。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">產品目錄</h2>
                    <h3 class="section-subheading text-muted">Learn more details.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="product_detail_1.html"><img class="card-img-top" src="../TDH/img1/1.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="product_detail_1.html">韻紅紅茶年輪蛋糕</a>
                            </h4>
                            <h5>NT$350.00</h5>
                            
							<input type="button" class="btn btn-primary btn-md" onClick="location='./php/addItem.php?sn=1';addToCartFunction()" value="加入購物車"/>
                        </div>

                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="product_detail_2.html"><img class="card-img-top" src="../TDH/img1/2.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="product_detail_2.html">日月潭紅玉紅茶燒布丁</a>
                            </h4>
                            <h5>NT$360.00</h5>
							<input type="button" class="btn btn-primary btn-md" onClick="location='./php/addItem.php?sn=2';addToCartFunction()" value="加入購物車"/>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="product_detail_3.html"><img class="card-img-top" src="../TDH/img1/3.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="product_detail_3.html">木柵鐵觀音泡芙</a>
                            </h4>
                            <h5>NT$300.00</h5>
                            <input type="button" class="btn btn-primary btn-md" onClick="location='./php/addItem.php?sn=3';addToCartFunction()" value="加入購物車"/>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="product_detail_4.html"><img class="card-img-top" src="../TDH/img1/4.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="product_detail_4.html">經典NO.2禮盒</a>
                            </h4>
                            <h5>NT$360.00</h5>
                           <input type="button" class="btn btn-primary btn-md" onClick="location='./php/addItem.php?sn=4';addToCartFunction()" value="加入購物車"/>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="product_detail_5.html"><img class="card-img-top" src="../TDH/img1/5.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="product_detail_5.html">臺灣茶5味薄片巧克力</a>
                            </h4>
                            <h5>NT$200.00</h5>
                            <input type="button" class="btn btn-primary btn-md" onClick="location='./php/addItem.php?sn=5';addToCartFunction()" value="加入購物車"/>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9734; &#9734; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="product_detail_6.html"><img class="card-img-top" src="../TDH/img1/6.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="product_detail_6.html">文山包種茶生乳捲</a>
                            </h4>
                            <h5>NT$340.00</h5>
                            <input type="button" class="btn btn-primary btn-md" onClick="location='./php/addItem.php?sn=6';addToCartFunction()" value="加入購物車"/>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9734; &#9734; &#9734; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="product_detail_7.html"><img class="card-img-top" src="../TDH/img1/7.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="product_detail_7.html">鐵觀音可麗露</a>
                            </h4>
                            <h5>NT$360.00</h5>
                            <input type="button" class="btn btn-primary btn-md" onClick="location='./php/addItem.php?sn=7';addToCartFunction()" value="加入購物車"/>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="product_detail_8.html"><img class="card-img-top" src="../TDH/img1/8.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="product_detail_8.html">鐵觀音乳酪</a>
                            </h4>
                            <h5>NT$320.00</h5>
                            <input type="button" class="btn btn-primary btn-md" onClick="location='./php/addItem.php?sn=8';addToCartFunction()" value="加入購物車"/>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="product_detail_9.html"><img class="card-img-top" src="../TDH/img1/9.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="product_detail_9.html">鐵觀音舒芙蕾禮盒</a>
                            </h4>
                            <h5>NT$360.00</h5>
                            <input type="button" class="btn btn-primary btn-md" onClick="location='./php/addItem.php?sn=9';addToCartFunction()" value="加入購物車"/>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">購物須知</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>購買規則</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">本公司配有宅配服務， 訂購人須詳閱事項內容以確保雙方共識與約定， 避免造成糾紛。下訂後，請詳細填寫表單聯絡方式並再三確認。 亦可留下聯絡資訊，或瑜備註填寫相關問題以便我們連繫您安排出貨!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>付款相關</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">1.門市購買:提供刷卡、現金付款
                                        <br>2.網路下單:提供匯款(貨到付款需多30元服務費)</p>
                                </div>
                            </div>
                        </li>


                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Our
                                    <br>Good
                                    <br>Partner!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!-- Contact -->
    

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

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Explore</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Finish</li>
                                    <li>Category: Identity</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Lines</li>
                                    <li>Category: Branding</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Southwest</li>
                                    <li>Category: Website Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Window</li>
                                    <li>Category: Photography</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

</body>

</html>
