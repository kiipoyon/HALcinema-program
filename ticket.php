<?php
    require 'common/common.php';
    $pdo = connect();
    // データベースへ接続
    // $dsn = "mysql:dbname=haldb;host=localhost;charset=utf8mb4";
    // $username = "nhs80333";
    // $password = "nhs80333";
    // $options = [];
    // $pdo = new PDO($dsn, $username, $password, $options);
    $key1 = "";
    if(isset($_POST["key1"])){
        $key1 = $_POST["key1"];
    }
    $key2 = "";
    if(isset($_POST["key2"])){
        $key2 = $_POST["key2"];
    }
    $errMsg = "";
        if($key1 != "" OR $key2 != ""){ //IDおよびユーザー名の入力有無を確認
            $stmt = $pdo->query("SELECT count(*) as cnt FROM ticket WHERE key1='".$key1."' OR key2 ='".$key2."'"); //SQL文を実行して、結果を$stmtに代入する。
//            print "SELECT count(*) as cnt FROM ticket WHERE key1='".$key1."' OR key2 =  '".$key2."'";
            //データが存在する場合
//            echo $stmt->fetchColumn();
            if($stmt->fetchColumn() > 0) {
                header("Location: ticket_conf.php");
            }else{
                $errMsg = "該当データは存在しません。";
            }
        }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- load css -->
    <link rel="stylesheet" href="css/common/reset.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- bootstrap css end -->

    <link rel="stylesheet" href="css/common/common.css">
    <link rel="stylesheet" href="css/ticket_style.css">
    <!--load css end-->

    <title>チケット照会 || HALシネマ</title>
</head>

<body>

    <!-- header -->
    <header id="header">

        <!-- logo -->
        <div>
            <img src="images/common/logo.png" alt="HALcinema-logo">
        </div>
        <!-- logo end -->

        <!-- nav -->
        <nav>
            <ul>
                <li class="nav__solid">
                    <a href="index.php">
                        <img src="./images/common/HOME.png" alt="">
                        <h1>HALシネマ</h1>
                        <p>HOME</p>
                    </a>
                </li>
                <!--
        -->
                <li class="nav__solid">
                    <a href="nowshowing.php">
                        <img src="./images/common/NOWSHOWING.png" alt="">
                        <h1>上映中</h1>
                        <p>NOW SHOWING</p>
                    </a>
                </li>
                <!--
        -->
                <li class="nav__solid">
                    <a href="comingsoon.php">
                        <img src="./images/common/COMINGSOON.png" alt="">
                        <h1>公開予定</h1>
                        <p>COMING SOON</p>
                    </a>
                </li>
                <!--
        -->
                <li class="nav__solid">
                    <a href="service.php">
                        <img src="./images/common/THEATER.png" alt="">
                        <h1>サービス案内</h1>
                        <p>SERVICE INFO</p>
                    </a>
                </li>
                <!--
        -->
                <li class="nav__solid">
                    <a href="member_login.php">
                        <img src="./images/common/LOGIN.png" alt="">
                        <h1>ログイン</h1>
                        <p>LOGIN</p>
                    </a>
                </li>
                <!--
        -->
                <li>
                    <a href="ticket_choice.php">
                        <img src="./images/common/TICKETS.png" alt="">
                        <h1>チケット照会</h1>
                        <p>TICKETS</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- nav end -->

    </header>
    <!-- header end -->




    <!-- main -->
    <main>

        <!-- title -->
        <section class="contents_box">
            <div class="contents__title">
                <h1>チケット照会</h1>
                <h2>TICKETS</h2>
            </div>
            <ul class="contents_sub">
                <li><a href="#">お問い合わせ</a></li>
                <li><a href="#">よくあるご質問</a></li>
            </ul>
        </section>
        <!-- title end -->

        <!-- contents -->
        <div class="ticket">

            <div class="sub_title">
                <h2>購入劇場</h2>
            </div>

            <div class="ticket_form">
                <h3>HALシネマ 名古屋</h3>
                <p>
                    購入の確認ができます。
                    <br>
                    電話番号と購入番号を入力して「検索」ボタンを押してください。
                </p>

                <form action="ticket.php" method="post">
                <div class="form-group">
                    <label class="form-conrtol">電話番号</label>
                    <input type="text" name="key1" oninput="validate(this)" onblur="validate(this)" />
                    <p style="color:#f00;"></p>
                </div>
                <div class="from-group">
                    <label class="form-conrtol">購入番号</label>
                    <input type="text" name="key2" oninput="validate(this)" onblur="validate(this)" />
                    <p style="color:#f00;"></p>
                </div>
                <br><br>
                <?php print $errMsg; ?>
                    <input type="submit" name="search" value="検索 >" class="search">

                </form>

                <script>
                function validate (self) {
                    try {
                    const fieldLabel = self.previousElementSibling.innerHTML;  //名前 or 電話番号

                    if (!self.value) {
                        throw new Error(fieldLabel + "を入力してください");
                    }

                    if (self.name === "key1" && !/^[0-9]+$/.test(self.value)) {
                        throw new Error(fieldLabel + "は半角数字で入力してください");
                    }
                    if (self.name === "key2" && !/^[0-9]+$/.test(self.value)) {
                        throw new Error(fieldLabel + "は半角数字で入力してください");
                    }

                    self.parentNode.style.backgroundColor = "#fff";
                    self.nextElementSibling.innerHTML = "";
                    } catch (err) {
                    //inputの親の背景をピンクに
                    self.parentNode.style.backgroundColor = "#fee";  

                    //inputの弟にエラーメッセージを表示
                    self.nextElementSibling.innerHTML = err.message; 
                    }
                }
                </script>
            </div>

        </div>
        <!-- contents end -->


        <div id="page__top">
            <div><i class="fas fa-caret-up"></i></div>
        </div>

    </main>
    <!-- main end -->



    <!-- footer -->
    <footer>
        <div>
            <ul>
                <li class="footer__nav"><a href="">企業情報</a></li>
                <!--
        -->
                <li class="footer__nav"><a href="">サイトマップ</a></li>
                <!--
        -->
                <li class="footer__nav"><a href="">プライバシーポリシー</a></li>
                <!--
        -->
                <li><a href="">お問い合わせ</a></li>
            </ul>
        </div>
        <div id="copyright">&copy;2020 HAL Cinema Ltd. All Rights Reserved.</div>
    </footer>
    <!-- footer end -->



    <!-- load js -->

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- jquery end -->

    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- bootstrap js end -->

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b7fcd44df6.js" crossorigin="anonymous"></script>
    <!-- fontawesome end -->

    <script src="js/pagetop.js"></script>
    <script src="js/nowshowing.js"></script>
    <script src="js/ticket.js"></script>

    <!-- load js end -->

</body>

</html>