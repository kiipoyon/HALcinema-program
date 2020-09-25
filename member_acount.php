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
    <link rel="stylesheet" href="css/member_conf.css">
    <!--load css end-->

    <title>会員登録_確認 || HALシネマ</title>
</head>

<body>

    <!-- header -->
    <header id="header">

        <!-- logo -->
        <div>
            <img src="images/common/logo.png" alt="HALcinema-logo">
        </div>
        <!-- logo end -->

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
        <div id="title_div">
            <div class="contents_title">
                <h1>会員情報</h1>
                <h2>Member information<h2>
            </div>
        </div>
        <!-- title end -->

        <!-- 会員登録 -->
        <section>
            <form action="member_fin.html">
                <dl>


                    <div class="member_title">
                        <h1>会員情報編集</h1>
                        <h2>Member information<h2>
                    </div>

                    <h2 class="">会員情報編集</h2>

                    <div class="form_conf">
                        <div>
                            <dt>氏名</dt>
                            <dd>ハル太郎</dd>
                        </div>

                        <div>
                            <dt>氏名（かな）</dt>
                            <dd>ハル太郎</dd>
                        </div>

                        <div>
                            <dt>生年月日</dt>
                            <dd>1998年4月5日</dd>
                        </div>

                        <div>
                            <dt>性別</dt>
                            <dd>男</dd>
                        </div>

                        <div>
                            <dt>電話番号</dt>
                            <dd>09000000000</dd>
                        </div>

                        <div>
                            <dt>メールアドレス</dt>
                            <dd>abc@halcinema.co.jp</dd>
                        </div>

                        <div>
                            <dt>パスワード</dt>
                            <dd>*********</dd>
                        </div>
                    </div>

                </dl>

                <div id="b-submit">
                    <input type="button" onclick="history.back()" value="編集">
                    <input type="submit" value="完了>">
                </div>

            </form>
        </section>


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
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- bootstrap js end -->

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b7fcd44df6.js" crossorigin="anonymous"></script>
    <!-- fontawesome end -->

    <script src="js/pagetop.js"></script>

    <!-- load js end -->

</body>

</html>
