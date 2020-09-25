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
    <link rel="stylesheet" href="css/userreg.css">
    <!--load css end-->

    <title> || HALシネマ</title>
</head>

<body>

    <!-- header -->
    <header id="header">

        <!-- logo -->
        <div>
            <img src="images/common/logo.png" alt="HALcinema-logo">
        </div>
        <!-- logo end -->



    </header>
    <!-- header end -->


    <!-- main -->
    <main>

        <!-- title -->
        <div class="contents__title">
            <h1>ログイン</h1>
            <h2>Member information</h2>
        </div>
        <!-- title end -->

        <!-- 会員登録 -->
        <form action="">
            <dl>

                <h3>会員情報入力</h3>
                
                <dt>氏名</dt>
                <dd><input type="text"></dd>
                
                <dt>氏名（かな）</dt>
                <dd><input type="text"></dd>
                
                <dt>生年月日</dt>
                <dd><input type="text"></dd>
                
                <dt>性別</dt>
                <dd>
                    <input type="radio" value="未選択">未選択
                    <input type="radio" value="男">男
                    <input type="radio" value="女">女
                </dd>
                
                <dt>電話番号</dt>
                <dd><input type="text"></dd>
                
                <dt>メールアドレス</dt>
                <dd><input type="text"></dd>
                
                <dt>メールアドレス（確認用）</dt>
                <dd><input type="text"></dd>
                
                <dt>パスワード</dt>
                <dd><input type="text"></dd>
                
                <dt>パスワード（確認用）</dt>
                <dd><input type="text"></dd>

                <h3>クレジットカード情報</h3>
                
                <dt>クレジットカード番号</dt>
                <dd><input type="text"></dd>
                
                <dt>クレジットカード有効期限</dt>
                <dd><input type="text"></dd>
                
                <dt>セキュリティ番号</dt>
                <dd><input type="text"></dd>

            </dl>
        </form>


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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <!-- bootstrap js end -->

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b7fcd44df6.js" crossorigin="anonymous"></script>
    <!-- fontawesome end -->

    <script src="js/pagetop.js"></script>

    <!-- load js end -->

</body>

</html>