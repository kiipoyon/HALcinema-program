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
    <link rel="stylesheet" href="css/theater_style.css">
    <!--load css end-->

    <title>劇場トップ || HALシネマ</title>
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

        <div id="wrap">


            <h2 class="theater_title">HALシネマ 名古屋</h2>

            <!-- news -->
            <div class="box">

                <div id="news">

                    <!-- title -->
                    <div class="contents__title">
                        <h1>お知らせ</h1>
                        <h2>NEWS</h2>
                    </div>
                    <!-- title end -->

                    <!-- news list -->
                    <ul>
                        <li><a href="#">ニュース</a></li>
                        <li><a href="#">ニュース</a></li>
                        <li><a href="#">ニュース</a></li>
                        <li><a href="#">ニュース</a></li>
                        <li><a href="#">ニュース</a></li>
                    </ul>
                    <!-- news list end -->

                </div>

            </div>



            <!-- schedule -->
            <div class="box">

                <!-- title -->
                <div class="contents__title">
                    <h1>上映スケジュール</h1>
                    <h2>SCHEDULE</h2>
                </div>
                <!-- title end -->

                <!-- schedule box -->
                <div id="schedule_box">

                    <!-- arrow left -->
                    <div class="arrow flex_cont" id="arrow-left">
                        <i class="fas fa-caret-left"></i>
                    </div>

                    <!-- arrow right -->
                    <div class="arrow flex_cont arrow_right">
                        <i class="fas fa-caret-right"></i>
                    </div>

                </div>
                <!-- schedule box end -->

                <div id="date_box">
                    <div class="flex_cont" id="schedule_date"></div>
                </div>
                <!-- schedule end -->

                <div id="date_p">
                    <h2 id="date"></h2>
                    <p>レディースデイ</p>
                </div>

                <!-- 作品選択 -->
                <select name="theater_select" class="custom-select">
                    <option value="none" selected>--</option>
                    <option value="1">作品1</option>
                    <option value="2">作品2</option>
                    <option value="3">作品3</option>
                </select>


                <div class="row">

                    <!-- movie content1 -->
                    <div class="schedule_content-box">

                        <div id="movie_01" class="movies">
                            <div class="col-md-10">
                                <h3 class="flex_cont">作品名</h3>
                                <a href="#" class="flex_cont">作品詳細へ</a>
                            </div>

                            <p class="movie_p">■ NEW ■ 6/26 (金) ロードショー</p>

                            <div class="schedule_content-body">

                                <div class="movie_body">
                                    <img src="images/ranking_1.jpg" alt="">

                                    <div class="movie_times"></div>
                                </div>

                                <p class="theater_number">シアター1</p>
                                <p class="movie_time">100分</p>

                            </div>
                        </div>


                        <!---->

                        <div id="movie_02" class="movies">

                            <div class="col-md-10">
                                <h3 class="flex_cont">作品名</h3>
                                <a href="#" class="flex_cont">作品詳細へ</a>
                            </div>

                            <p class="movie_p">■ NEW ■ 6/26 (金) ロードショー</p>

                            <div class="schedule_content-body">

                                <div class="movie_body">
                                    <img src="images/ranking_1.jpg" alt="">

                                    <div class="movie_times"></div>
                                </div>

                                <p class="theater_number">シアター1</p>
                                <p class="movie_time">100分</p>

                            </div>

                        </div>


                        <!---->

                        <div id="movie_03" class="movies">

                            <div class="col-md-10">
                                <h3 class="flex_cont">作品名</h3>
                                <a href="#" class="flex_cont">作品詳細へ</a>
                            </div>

                            <p class="movie_p">■ NEW ■ 6/26 (金) ロードショー</p>

                            <div class="schedule_content-body">

                                <div class="movie_body">
                                    <img src="images/ranking_1.jpg" alt="">

                                    <div class="movie_times"></div>
                                </div>

                                <p class="theater_number">シアター1</p>
                                <p class="movie_time">100分</p>

                            </div>

                        </div>

                    </div>


                </div>

            </div>




            <div id="page__top">
                <div><i class="fas fa-caret-up"></i></div>
            </div>

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

    <script src="js/theater_top.js"></script>
    <!-- load js end -->

</body>

</html>