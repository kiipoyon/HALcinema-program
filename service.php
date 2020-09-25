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
    <link rel="stylesheet" href="css/service_style.css">
    <!--load css end-->

    <title>サービス案内 || HALシネマ</title>
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
        <div class="contents__title">
            <h1>サービス案内</h1>
            <h2>SERVICE INFO<h2>
        </div>
        <!-- title end -->

        <!-- suport_service -->
        <div class="sub_title">
            <h2>サポートサービス</h2>
        </div>
        <!-- suport_service end -->


        <!-- サポートサービス -->
        <section class="service">

            <a href="#">
                <div class="service_contents">
                    <div class="service_title">
                        <h3>よくあるご質問</h3>
                        <p>詳細へ</p>
                    </div>
                    <div class="service_img"><img src="images/service_Q&A.png" alt="よくあるご質問"></div>
                    <p>お客様からお問い合わせの多いご質問とご回答を掲載しております。お問い合わせの前にぜひ一度ご確認ください。</p>
                </div>
            </a>

            <a href="#">
                <div class="service_contents">
                    <div class="service_title">
                        <h3>お問い合わせ</h3>
                        <p>詳細へ</p>
                    </div>
                    <div class="service_img"><img src="images/service_question.png" alt="お問い合わせ"></div>
                    <p>こちらからお問い合わせください。</p>
                </div>
            </a>

        </section>
        <!-- サポートサービス end -->


        <!-- tickets_service -->
        <div class="sub_title">
            <h2>チケット案内サービス</h2>
        </div>
        <!-- tickets_service end -->


        <!-- チケット案内サービス -->
        <section class="service">

            <a href="#">
                <div class="service_contents">
                    <div class="service_title">
                        <h3>チケット料金案内</h3>
                        <p>詳細へ</p>
                    </div>
                    <div class="service_img"><img src="images/service_tickets.png" alt="チケット料金案内"></div>
                    <p>こちらより各チケットの料金をご案内しております。</p>
                </div>
            </a>

        </section>
        <!-- チケット案内サービス end -->


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


    <!-- load js end -->

</body>

</html>