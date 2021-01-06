<?php
require 'common/common.php';

if(isset($_SESSION['mail'])){
    header('location:ticket_info.php');
}

if(isset($_POST['login_btn'])) {

    try {
        $dbh = connect();
    } catch (PDOException $e) {
        $msg = $e->getMessage();
    }

    $mail = $_POST['mail'];
    $sql = "SELECT * FROM login_tbl WHERE mail = :mail";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':mail', $mail);
    $stmt->execute();
    $member = $stmt->fetch();

    //指定したハッシュがパスワードにマッチしているかチェック
    // password_verify($_POST['pass'] , $member['pass'])
    if (password_verify($_POST['pass'] , $member['pass'])){
        //DBのユーザー情報をセッションに保存
        $_SESSION['mail'] = $mail;
        $msg = 'ログインしました。';
        // echo $msg;

        // echo $_SESSION['mail'];

        header('location:ticket_info.php');
    } else {
        $msg = 'メールアドレスもしくはパスワードが間違っています。';
        echo $msg;
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
    <link rel="stylesheet" href="css/ticket_login.css">
    <!--load css end-->

    <title>会員ログイン || HALシネマ</title>
</head>

<body>

    <!-- header -->
    <header id="header">

        <!-- logo -->
        <div>
            <a href="index.html">
                <img src="images/common/logo.png" alt="HALcinema-logo">
            </a>
        </div>
        <!-- logo end -->

        <!-- nav -->

        <!-- nav end -->

    </header>
    <!-- header end -->




    <!-- main -->
    <main>

        <!-- title -->
        <section class="contents_box">
            <div class="contents__title">
                <h1>オンラインチケット購入</h1>
                <h2>ONLINE TICKET SALES</h2>
            </div>
            <ul class="contents_sub">
                <li><a href="#">購入方法</a></li>
                <li><a href="#">よくあるご質問</a></li>
            </ul>
        </section>
        <!-- title end -->

        <!-- contents -->
        <article class="ticket">

            <div class="subtitle">
                <h2>会員ログイン</h2>
            </div>

            <section class="ticket_flow">
                <ol class="step">
                    <li class="is-current">座席選択</li>
                    <li>お客様情報入力</li>
                    <li>券種選択</li>
                    <li>決済情報入力</li>
                    <li>購入確認</li>
                    <li>購入完了</li>
                </ol>
            </section>



            <section class="ticket_wrap">

                <!-- 座席選択内容 -->
                <section class="seat">
                    <h3>座席選択内容</h3>
                    <dl>
                        <dt>作品名</dt>
                        <dd>ソニック・ザ・ムービー[2D/字幕]</dd>
                        <dt>劇場名</dt>
                        <dd>HALシネマ名古屋</dd>
                        <dt>シアター</dt>
                        <dd>シアター2</dd>
                        <dt>鑑賞日</dt>
                        <dd>2020年07月03日(金)</dd>
                        <dt>時間</dt>
                        <dd>14時30分 ~ 16時20分</dd>
                        <dt>座席・券種</dt>
                        <dd>A-001[一般:¥1,800]、A-002[一般:¥1,800]</dd>
                        <dt>合計金額</dt>
                        <dd class="total"><?php echo $_SESSION["seat"]; ?></dd>
                    </dl>
                </section>


                <!-- 会員の方ログイン -->
                <form action="" method="post">
                    <section class="login_area">
                        <h3>・会員の方</h3>
                        <div class="form_area">
                            <label>メールアドレス</label>
                            <input type="email" placeholder="info@sample.com" name="mail">
                        </div>

                        <div class="form_area">
                            <label>パスワード</label>
                            <input type="password" placeholder="半角英数字8文字以上" name="pass">
                            <a href="member_pass_rese.html">※パスワードをお忘れの方はこちら</a>
                        </div>

                        <div class="login_btn">
                            <input type="submit" name="login_btn" value="ログイン >" class="next_btn">
                        </div>
                    </section>
                </form>


                <section class="ippan_area">
                    <h3>・一般の方</h3>
                    <div class="ippan_sec">
                        <p>HALシネマの会員になることで、以下のサービスを受けることができます。</p>
                        <ul>
                            <li>・6回みたら一回無料</li>
                            <li>・会員限定の特別情報</li>
                            <li>・その他嬉しい特典が満載！</li>
                        </ul>
                    </div>

                    <div class="ippan_btn">

                        <form method="POST" action="member.php" class="next">
                            <div class="login_btn">
                                <input type="submit" name="shinki_btn" value=" 新規会員登録はこちら >" class="next_btn">
                            </div>
                        </form>

                        <form method="POST" action="ticket_info.php" class="next">
                            <div class="login_btn">
                                <input type="submit" name="no-member_btn" value="  会員にならずに購入 >" class="no-member_btn">
                            </div>
                        </form>
                    </div>

                </section>



                <div class="btn">

                    <form method="POST" action="ticket_seat.html" class="back">
                        <input type="submit" name="search" value="< 戻る" class="back_btn">
                    </form>

                </div>

            </section>

        </article>
        <!-- contents end -->


        <div id="page__top">
            <div><i class="fas fa-caret-up"></i></div>
        </div>

    </main>
    <!-- main end -->



    <!-- footer -->
    <footer>
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