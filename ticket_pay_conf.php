<?php
require "common/common.php";


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
    <link rel="stylesheet" href="css/ticket_pay_conf.css">
    <!--load css end-->

    <title>購入確認 || HALシネマ</title>
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
                <h2>購入確認</h2>
            </div>

            <section class="ticket_flow">
                <ol class="step">
                    <li>座席選択</li>
                    <li>お客様情報入力</li>
                    <li>券種選択</li>
                    <li>決済情報入力</li>
                    <li class="is-current">購入確認</li>
                    <li>購入完了</li>
                </ol>
            </section>

            <section class="kakunin">
                <p class="kakunin_message">!! まだ お手続きは 完了しておりません !!</p>
                <p>以下の内容をご確認の上、”決済”ボタンをクリックして決済完了してください。<br>
                    ※購入番号は次のページに表示されます。</p>
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
                                $seat_cnt = $_SESSION["seat_cnt"];
                                $seat = explode(",", $seat_cnt);
                                $seatLength = count($seat);

                                for ($i = 0; $i < $seatLength; $i++) {
                                    if ($i == $seatLength-1) {
                                        $seat_ken = $seat[$i]."[".$_SESSION["ticket_deno".$i]."]";
                                        echo $seat_ken;
                                    }else {
                                        $seat_ken = $seat[$i]."[".$_SESSION["ticket_deno".$i]."],";
                                        echo $seat_ken;
                                    }
                                }
                            ?>
                        </dd>
                        <dt>合計金額</dt>
                        <dd class="total"><?php echo $_SESSION["seat"];?></dd>
                    </dl>
                </section>


                <!-- お客様情報 -->
                <section class="info_area">
                    <h3>・お客様情報</h3>
                    <dl>
                        <dt>氏名</dt>
                        <dd><?php echo $userName; ?></dd>
                        <dt>氏名(かな)</dt>
                        <dd><?php echo $nameRead; ?></dd>
                        <dt>電話番号</dt>
                        <dd><?php echo $tel; ?></dd>
                        <dt>メールアドレス</dt>
                        <dd><?php echo $_SESSION["mail"]; ?></dd>
                    </dl>
                    <div class="page_back">
                        <form method="POST" action="ticket_info.php" class="back">
                            <input type="submit" name="search" value="< お客様情報入力へ" class="page_back_btn">
                        </form>
                    </div>
                </section>


                <!-- 券種選択 -->
                <section class="deno_area">
                    <h3>・券種選択</h3>
                    <table>
                        <tr class="deno_title">
                            <th>座席番号</th>
                            <th>券種名 / 料金</th>
                        </tr>

                        <?php
                                    for ($i = 0; $i < $seatLength; $i++){
                                ?>

                                    <tr class='deno_number'>
                                        <td><?php echo $seat_ken = $seat[$i];?></td>
                                        <td>
                                            <?php echo "[".$_SESSION["ticket_deno".$i]."]" ?>
                                        </td>
                                    </tr>

                                <?php
                                    }
                                ?>
                    </table>
                    <div class="page_back">
                        <form method="POST" action="ticket_deno.php" class="back">
                            <input type="submit" name="search" value="< 券種選択へ" class="page_back_btn">
                        </form>
                    </div>
                </section>


                <!-- クレジット情報 -->
                <section class="info_area">
                    <h3>・クレジット情報</h3>
                    <dl>
                        <dt>カード番号</dt>
                        <dd><?php echo $_SESSION["card"]; ?></dd>
                        <dt>カード名義</dt>
                        <dd><?php echo $_SESSION["cardName"]; ?></dd>
                        <dt>有効期限</dt>
                        <dd><?php echo $_SESSION["cardDate"]; ?></dd>
                    </dl>
                </section>



                <div class="btn">

                    <form method="POST" action="ticket_pay.php" class="back">
                        <input type="submit" name="search" value="< 戻る" class="back_btn">
                    </form>

                    <form method="POST" action="ticket_pay_comp.php" class="next">
                        <p class="last_kakunin">“決済”ボタンは1回だけ押してください。<br>
                            <span class="red_info">再度上記の内容をご確認の上、間違いがなければ”決済”ボタンを押してください。<br>
                                “決済”ボタンを押されますと、いかなる理由の場合でもキャンセルは出来ません。</span></p>
                        <input type="submit" name="search" value="決済 >" class="next_btn">
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