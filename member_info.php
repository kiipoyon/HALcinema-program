<?php
require 'common/common.php';

$mail = $_POST['mail'];
$dsn = "mysql:host=localhost; dbname=haldb; charset=utf8";
$username = "dbadmin";
$password = "dbadmin";
try {
    $dbh = connect();
} catch (PDOException $e) {
    $msg = $e->getMessage();
}

$sql = "SELECT count(*) FROM login_tbl WHERE mail = :mail and pass = password(:pass)"; //パスワード認証を行っている
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':mail', $mail);
$stmt->bindValue(':pass', $_POST['pass']);
$stmt->execute();

//$member = $stmt->fetch();
//print "sample[".$stmt->fetchColumn()."]";
$count = $stmt->fetchColumn();

//指定したハッシュがパスワードにマッチしているかチェック
//password_verify($_POST['pass'] , $member['pass'])
if ($count >= 1){
    //DBのユーザー情報をセッションに保存
    $_SESSION['mail'] = $mail;
    //print $count;    
} else {
    // $msg = 'メールアドレスもしくはパスワードが間違っています。'.$_POST['pass'].",".$member['pass'];
    // print $count;    
    // print $msg;
    header("Location: member_login.php?err=1"); 
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">    <!-- bootstrap css end -->
    <!-- bootstrap css end -->

    <link rel="stylesheet" href="css/common/common.css">
  
    <link rel="stylesheet" href="css/member_info.css">
    <!--load css end-->


    
    <title>会員情報 || HALシネマ</title>
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
                <a href="index.html">
                    <img src="./images/common/HOME.png" alt="">
                    <h1>HALシネマ</h1>
                    <p>HOME</p>
                </a>
            </li><!--
        --><li class="nav__solid">
            <a href="nowshowing.html">
                <img src="./images/common/NOWSHOWING.png" alt="">
                <h1>上映中</h1>
                <p>NOW SHOWING</p>
            </a>
        </li><!--
        --><li class="nav__solid">
            <a href="comingsoon.html">
                <img src="./images/common/COMINGSOON.png" alt="">
                <h1>公開予定</h1>
                <p>COMING SOON</p>
            </a>
            </li><!--
        --><li class="nav__solid">
            <a href="service.html">
                <img src="./images/common/THEATER.png" alt="">
                <h1>サービス案内</h1>
                <p>SERVICE INFO</p>
            </a>
            </li><!--
        --><li class="nav__solid">
            <a href="member_login.html">
                <img src="./images/common/LOGIN.png" alt="">
                <h1>ログイン</h1>
                <p>LOGIN</p>
            </a>
            </li><!--
        --><li>
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

        <article>

            <section class="login_section">
      
              <div class="login_logo">
                <h1>会員情報</h1>
                <h2>Member information</h2>
              </div>
      
            </section>


      
      
            <section class="member_info_main">

              <div class="member_icoon">
                <img src="images/hito_icoon.png" alt="アカウントのアイコン">
                <h1>アカウント名</h1>
              </div>

              <hr class="sen_1">

              <section class="member_info_deta">

                <p class="current_point">現在 : 0ポイント</p>

                <hr>

                <div>
                  <p>
                    会員カード解約、有効期限<br><br>
                    <span>20xx年 yy月 zz日 a曜日</span>です。
                  </p>
                </div>

                <hr>

                <div>
                  <a href="change.php">アカウント編集</a>
                  <p>メールアドレス、個人情報等の変更ができます。</p>
                </div>

                <hr>

                <div>
                  <a href="#">電子マネー</a>
                  <p>クレジットカード等の追加、削除ができます。</p>
                </div>

                <hr>

                <div>
                  <a href="member_withd.html">退会する</a>
                  <p>退会を望まれる方はこちらからできます。</p>
                </div>

                <hr>

              </section>

            </section>
      
        </article>
      
        <div id="page__top">
            <p>ページトップへ</p>
            <div><i class="fas fa-caret-up"></i></div>
        </div>
    
    </main>
  <!-- main end -->



<!-- footer -->
<footer>
    <div>
        <ul>
            <li class="footer__nav"><a href="">企業情報</a></li><!--
        --><li class="footer__nav"><a href="">サイトマップ</a></li><!--
        --><li class="footer__nav"><a href="">プライバシーポリシー</a></li><!--
        --><li><a href="">お問い合わせ</a></li>
        </ul>
    </div>
    <div id="copyright">&copy;2020 HAL Cinema Ltd. All Rights Reserved.</div>
</footer>
<!-- footer end -->



<!-- load js -->

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<!-- jquery end -->

<!-- bootstrap js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
<!-- bootstrap js end -->

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/b7fcd44df6.js" crossorigin="anonymous"></script>
<!-- fontawesome end -->

<script src="js/pagetop.js"></script>

<!-- load js end -->
	
</body>
</html>
