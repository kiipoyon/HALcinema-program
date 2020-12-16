<?php
require "common/common.php";

if(isset($_POST["back"])) {
    header("location:ticket_seat.php");
}

$seat_cnt = $_SESSION["seat_cnt"];
$seat = explode(",", $seat_cnt);
$seatLength = count($seat);

try {
    $dbh = connect();
} catch (PDOException $e) {
    $msg = $e->getMessage();
}

$mail = $_SESSION['mail'];
$sql = "SELECT * FROM member_tbl WHERE mail = :mail";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':mail', $mail);
$stmt->execute();
$member = $stmt->fetch();

$userName = $member["username"];
$nameRead = $member["name_read"];
$tel = $member["tel"];
$gender = $member["gender"];

if (isset($_POST["next"])) {

    if(
        !empty($_POST["userName"]) && !empty($_POST["nameRead"]) && !empty($_POST["tel"]) && !empty($_POST["mail"]) &&
        !empty($_POST["mailConf"]) && !empty($_POST["gender"])
    ){

        session_start();
        $_SESSION["userName"] = $_POST["userName"];
        $_SESSION["nameRead"] = $_POST["nameRead"];
        $_SESSION["tel"] = $_POST["tel"];
        $_SESSION["mail"] = $_POST["mail"];
        $_SESSION["mailConf"] = $_POST["mailConf"];
        $_SESSION["gender"] = $_POST["gender"];


        header("location:ticket_deno.php");

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
    <link rel="stylesheet" href="css/ticket_info.css">
    <!--load css end-->

    <title>お客様情報入力 || HALシネマ</title>
</head>

<body>

    <!-- header -->
    <header id="header">

        <!-- logo -->
        <div>
            <a href="index.php">
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
                <h2>お客様情報入力</h2>
            </div>

            <section class="ticket_flow">
                <ol class="step">
                    <li>座席選択</li>
                    <li class="is-current">お客様情報入力</li>
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
                        <dd>
                            <?php
                                for ($i = 0; $i < $seatLength; $i++) {
                                    if ($i == $seatLength-1) {
                                        $seat_ken = $seat[$i]."[一般:1800]";
                                        echo $seat_ken;
                                    }else {
                                        $seat_ken = $seat[$i]."[一般:1800],";
                                        echo $seat_ken;
                                    }
                                }
                            ?>
                        </dd>
                        <dt>合計金額</dt>
                        <dd class="total"><?php echo $_SESSION["seat"]; ?></dd>
                    </dl>
                </section>


                <!-- お客様情報入力説明 -->
                <form action="" method="post">
                    <section class="info_area">
                        <h3>・お客様情報入力</h3>
                        <p class="info_p_01">購入内容を確認の上、下記情報をご入力ください。</p>
                        <p class="info_p_02"><span class="red_info">*は必須項目です。</span><br>
                            ※ 入力いただいた電話番号は、劇場でのチケットお引き換えの際に必要です。<br>
                            ※ 入力いただいたメールアドレスに「購入完了メール」を送信いたします。</p>
                    </section>

                    <!-- お客様情報入力エリア -->
                    <section class="info_form">
                        <ul>
                            <li class="info_list">
                                <label>氏名<span class="red_info">*</span></label>
                                <input type="text" placeholder="例:春太郎" name="userName" value="<?php echo $userName; ?>">
                            </li>

                            <li class="info_list">
                                <label>氏名(かな)<span class="red_info">*</span></label>
                                <input type="text" placeholder="例:はるたろう" name="nameRead" value="<?php echo $nameRead; ?>" >
                            </li>

                            <li class="info_list">
                                <label>電話番号<span class="red_info">*</span></label>
                                <input type="tel" placeholder="例:0123456789" name="tel" value="<?php echo $tel; ?>">
                            </li>

                            <li class="info_list">
                                <label>メールアドレス<span class="red_info">*</span></label>
                                <input type="email" placeholder="例:abc@halcinema.co.jp" name="mail" value="<?php echo $mail; ?>">
                            </li>

                            <li class="info_list">
                                <label>メールアドレス(確認用)<span class="red_info">*</span></label>
                                <input type="email" placeholder="例:abc@halcinema.co.jp" name="mailConf" value="<?php echo $mail; ?>">
                            </li>

                            <li class="info_list">
                                <label>性別</label>

                                <input type="radio" name="gender" id="gen_01" value="未選択" value="0" <?php if($gender === '0'){ echo 'checked'; } ?> >
                                <label class="radio_label" for="gen_01"> 未選択</label>
                                <input type="radio" name="gender" id="gen_02" value="男性" value="1" <?php if($gender === '1'){ echo 'checked'; } ?> >
                                <label class="radio_label" for="gen_02"> 男性</label>
                                <input type="radio" name="gender" id="gen_03" value="女性" value="2" <?php if($gender === '2'){ echo 'checked'; } ?> >
                                <label class="radio_label" for="gen_03"> 女性</label>
                            </li>
                        </ul>
                    </section>



                    <div class="btn">
                            <input type="submit" name="back" value="< 戻る" class="back_btn">
                            <input type="submit" name="next" value="次へ >" class="next_btn">

                    </div>
                </form>

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