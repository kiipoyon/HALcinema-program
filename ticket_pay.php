<?php
require "common/common.php";

if(isset($_POST["back"])) {
    header("location:ticket_deno.php");
}

if (isset($_POST["pay_next"])) {

    if(
        !empty($_POST["card_num1"]) && !empty($_POST["card_num2"]) && !empty($_POST["card_num3"]) && !empty($_POST["card_num4"]) &&
        !empty($_POST["card_name1"]) && !empty($_POST["card_name2"]) &&
        !empty($_POST["card_month"]) && !empty($_POST["card_year"])
    ){
        $cardNum = $_POST["card_num1"].$_POST["card_num2"].$_POST["card_num3"];
        $cardNumF = str_repeat('*', mb_strlen($cardNum, 'UTF8'));
        $cardNum2 = $cardNumF.$_POST["card_num4"];
        $cardNumAry = str_split($cardNum2, 4);
        $card = implode(' - ', $cardNumAry);

        $cardName = $_POST["card_name1"]." ".$_POST["card_name2"];

        $cardDate = $_POST["card_month"]."/".$_POST["card_year"];

        session_start();
        $_SESSION["card"] = $card;
        $_SESSION["cardName"] = $cardName;
        $_SESSION["cardDate"] = $cardDate;

        header("location:ticket_pay_conf.php");
    }else{
        $errorMessage = "必須項目をすべて入力してください";
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
    <link rel="stylesheet" href="css/ticket_pay.css">
    <!--load css end-->

    <title>決済情報入力 || HALシネマ</title>
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
                <h2>決済情報入力</h2>
            </div>

            <section class="ticket_flow">
                <ol class="step">
                    <li>座席選択</li>
                    <li>お客様情報入力</li>
                    <li>券種選択</li>
                    <li class="is-current">決済情報入力</li>
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
                        <dd class="total"><?php echo $_SESSION["seat"]; ?></dd>
                    </dl>
                </section>


                <!-- クレジット入力説明 -->
                <section class="info_area">
                    <h3>・クレジット情報入力</h3>
                    <p class="info_p_01"><span class="red_info">*は必須項目です。</span><br>
                        ※お支払い方法は一括払いのみとなります。<br>
                        ※お支払いにご利用いただけるカードは、VISA、MASTER、JCBの各クレジットカードです。</p>
                    <div class="card_img"><img src="images/ticket/card.jpg" alt="クレジットカート"></div>
                </section>

                <!-- クレジット情報入力エリア -->
                <form action="" method="post">
                    <section class="info_form">
                        <ul>
                            <li class="info_list">
                                <label for="num_input">カード番号<span class="red_info">*</span></label>
                                <input id="num_input" type="text" maxlength="4" placeholder="0000" name="card_num1"
                                    class="num_text" > -
                                <input type="text" maxlength="4" placeholder="0000" name="card_num2" class="num_text" > -
                                <input type="text" maxlength="4" placeholder="0000" name="card_num3" class="num_text" > -
                                <input type="text" maxlength="4" placeholder="0000" name="card_num4" class="num_text" >
                                <span class="red_text">半角数字</span>
                            </li>

                            <li class="info_list">
                                <label>カード名義<span class="red_info">*</span></label>
                                <input type="text" placeholder="TARO" name="card_name1" class="name_text" >（名）
                                <input type="text" placeholder="HAL" name="card_name2" class="name_text">（姓）
                                <span class="red_text">大文字英字</span>
                            </li>

                            <li class="info_list">
                                <label>有効期限<span class="red_info">*</span></label>
                                <select name="card_month" class="month_text">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="6">06</option>
                                    <option value="7">07</option>
                                    <option value="8">08</option>
                                    <option value="9">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select> /
                                <input type="text" maxlength="2" placeholder="00" name="card_year" class="month_text">
                                <span class="red_text">半角数字</span>
                            </li>

                            <li class="info_list">
                                <label>セキュリティコード<span class="red_info">*</span></label>
                                <input type="text" maxlength="3" placeholder="xxx" name="card_code" class="code_text">
                                <span class="red_text">半角数字</span>
                            </li>

                        </ul>
                    </section>



                    <div class="btn">
                        <input type="submit" name="back" value="< 戻る" class="back_btn">
                        <input type="submit" name="pay_next" value="次へ >" class="next_btn">
                    </div>
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