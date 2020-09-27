<?php

    require 'common/common.php';
    // データベースに接続する
    $pdo = connect();

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

    <link rel="stylesheet" href="css/common/common.css"/>

    <link rel="stylesheet" href="css/nowshowing_style.css">
    <!--load css end-->

    <title>上映中 || HALシネマ</title>
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
            </li><!--
        --><li class="nav__solid">
            <a href="nowshowing.php">
                <img src="./images/common/NOWSHOWING.png" alt="">
                <h1>上映中</h1>
                <p>NOW SHOWING</p>
            </a>
        </li><!--
        --><li class="nav__solid">
            <a href="comingsoon.php">
                <img src="./images/common/COMINGSOON.png" alt="">
                <h1>公開予定</h1>
                <p>COMING SOON</p>
            </a>
            </li><!--
        --><li class="nav__solid">
            <a href="service.php">
                <img src="./images/common/THEATER.png" alt="">
                <h1>サービス案内</h1>
                <p>SERVICE INFO</p>
            </a>
            </li><!--
        --><li class="nav__solid">
            <a href="member_login.php">
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

    <!-- title -->
    <div class="contents__title">
        <h1>上映中の作品</h1>
        <h2>NOW SHOWING</h2>
    </div>
    <!-- title end -->


    <!-- 上映中コンテンツ -->
    <div class="col-md-6">
        <?php
            $sql = "SELECT * FROM movie_tbl";
            $stmt = $pdo->query($sql);
            foreach($stmt as $row){
                
        ?>
        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <a href="movie.php?movie_no=<?php echo $row["movie_no"] ?>" method="GET">
            <img class="card-img-right flex-auto d-none d-lg-block" src="images/thumbnail/<?php echo ($row["image"]); ?>" 
            alt="Thumbnail" style="width: 300px; height: auto;">

            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary"><?php echo ($row["title"]); ?></strong>
                <p class="card-text mb-auto">監督：<?php echo ($row["director"]); ?></p>
                <p class="card-text mb-auto">キャスト：<?php echo ($row["cast"]); ?></p>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
    <!-- 上映中コンテンツ end -->

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
        -->
            <li class="footer__nav"><a href="">サイトマップ</a></li><!--
        -->
            <li class="footer__nav"><a href="">プライバシーポリシー</a></li><!--
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
