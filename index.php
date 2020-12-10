<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- load css -->
    <link rel="stylesheet" href="css/common/reset.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"
        integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <!-- bootstrap css end -->
    <!-- bootstrap css end -->

    <link rel="stylesheet" href="css/common/common.css" />

    <link rel="stylesheet" href="css/top__style.css">
    <!--load css end-->

    <title>トップ || HALシネマ</title>
</head>

<body>



    <!-- header -->
    <header id="header">

        <!-- logo -->
        <div>
            <img src="./images/common/logo.png" alt="HALcinema-logo">
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

        <!-- slide -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <!-- slide image -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" src="images/slide/slide_1.png"
                        alt="">
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" src="images/slide/slide_2.png"
                        alt="">
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" src="images/slide/slide_3.png"
                        alt="">
                </div>
            </div>
            <!-- slide image end -->

            <!-- arrow -->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- arrow end -->

        </div>
        <!-- slide end -->

        <div id="wrap">


            <div class="box">
                <!-- theater -->
                <div id="theater">

                    <!-- title -->
                    <div class="contents__title">
                        <h1>劇場</h1>
                        <h2>THEATER</h2>
                    </div>
                    <!-- title end -->

                    <!-- theater content -->
                    <div id="theater__list">
                        <ul>
                            <a href="theater.php">
                                <li>
                                    <p class="theater__list">HALシネマ　東京</p>
                                    <i class="fas fa-angle-double-right theater__list"></i>
                                </li>
                            </a>
                            <a href="theater.php">
                                <li>
                                    <p class="theater__list">HALシネマ　名古屋</p>
                                    <i class="fas fa-angle-double-right theater__list"></i>
                                </li>
                            </a>
                            <a href="theater.php">
                                <li>
                                    <p class="theater__list theater__p">HALシネマ　大阪</p>
                                    <i class="fas fa-angle-double-right theater__list"></i>
                                </li>
                            </a>
                        </ul>
                    </div>
                    <!-- theater content end -->

                </div>
                <!-- theater end -->
            </div>


            <div class="box box_position">
                <!-- ranking -->

                <!-- title -->
                <div class="contents__title ">
                    <h1>映画ランキング</h1>
                    <h2>RANKING</h2>
                </div>
                <!-- title end -->

                <div id="ranking__box">
                    <div id="ranking">

                        <!-- ranking album contents -->
                        <section id="ranking__row">

                        </section>
                        <!-- ranking album contents end -->

                        <!-- ranking__arrow-->
                        <div id="ranking__arrow">
                            <a>
                                <i class="fas fa-angle-left" id="ranking__arrow--left"></i>
                            </a>
                            <a>
                                <i class="fas fa-angle-right" id="ranking__arrow--right"></i>
                            </a>
                        </div>
                        <!-- ranking__arrow end -->

                    </div>
                </div>

                <!-- ranking end -->
            </div>


            <div class="box">
                <!-- campaigns -->
                <div id="campaigns">

                    <div class="contents__title">
                        <h1>キャンペーン</h1>
                        <h2>CAMPAIGNS</h2>
                    </div>

                    <!-- albums contents -->
                    <div class="row" id="campaigns__row">

                        <ul>
                            <li><a href="#">「映画館に行こう！」キャンペーン2020</a></li>
                            <li><a href="#">「ANXIETY」半券キャンペーン</a></li>
                            <li><a href="#">「五色の鹿」期待＆感想投稿キャンペーン</a></li>
                            <li><a href="#">「MAX 一番の友達が教えてくれたこと」プレゼントキャンペーン</a></li>
                            <li><a href="#">「AGAIN」プレゼントキャンペーン</a></li>
                        </ul>


                    </div>
                    <!-- album contents end -->

                </div>
                <!-- campaigns end -->
            </div>


            <div class="box">
                <!-- news -->
                <div id="news">

                    <!-- title -->
                    <div class="contents__title">
                        <h1>お知らせ</h1>
                        <h2>NEWS</h2>
                    </div>
                    <!-- title end -->

                    <!-- news list -->
                    <ul>
                        <li><a href="#">新型コロナウイルス感染予防の対応について(2020年07月02日)</a></li>
                        <li><a href="#">レイトショー、および座席指定券の事前販売の再開について(2020年06月19日)</a></li>
                        <li><a href="#">全劇場の営業再開について(2020年06月02日)</a></li>
                        <li><a href="#">払い戻しおよび有効期限延長について(2020年06月01日)</a></li>
                        <li><a href="#">「幸せの隠し場所」チケット先行販売開始(2020年05月30日)</a></li>
                    </ul>
                    <!-- news list end -->

                </div>
                <!-- news end -->
            </div>


        </div>

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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"
        integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous">
    </script>
    <!-- bootstrap js end -->

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b7fcd44df6.js" crossorigin="anonymous"></script>
    <!-- fontawesome end -->

    <script src="js/pagetop.js"></script>
    <script src="./js/ranking.js"></script>
    <!-- load js end -->

</body>

</html>