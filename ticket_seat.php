<?php
    if(isset($_POST["seat_btn"])){
        session_start();
        $_SESSION["seat"] = $_POST["zaseki_bng"];
        $_SESSION["seat_cnt"] = $_POST["zaseki_cnt"];
        // echo $_SESSION["seat"];

        if(isset($_SESSION["seat"])){
            header("location:ticket_login.php");
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
    <link rel="stylesheet" href="css/ticket_seat.css">
    <!--load css end-->

    <title>座席選択 || HALシネマ</title>
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
                <h2>座席選択</h2>
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
                        <dd>[一般:¥1,800]</dd>
                        <dt>合計金額</dt>
                        <dd class="total">0円</dd>
                    </dl>
                </section>

                <section class="seat_p">
                    <h3>・座席をお選びください</h3>
                    <p>
                        この画面で座席をお選びいただいた後、15分以内に必要事項をご入力の上、購入を完了してください。<br>
                        ※15分以内に完了されない場合、座席が解放されます。その場合はお手数ですが最初からやり直してください。<br>
                        車椅子スペースをご希望の方は劇場へ直接来場いただくか、お電話ください。</p>
                </section>


                <section class="seat_menu">
                    <h3>アイコン説明</h3>
                    <ul>
                        <li><span class="icon_off">空席(購入可能)</span></li>
                        <li><span class="icon_active">選択した席</span></li>
                        <li><span class="icon_on">選択不可(購入済み/販売対象外)</span></li>
                    </ul>
                </section>


                <section class="seat_name">
                    <div class="sentaku">
                        <div id="zaseki_flexbox">
                            <h4>選択された座席： </h4>
                            <h4 id="zaseki_cnt">0</h4>
                            <h4>席　 [最大ご購入可能座席：8席]</h4>
                        </div>
                    </div>
                    <p id="zaseki_bng">※ココに選択した座席番号表示※</p>
                </section>



                <!-- シアター座席 -->
                <form method="POST" action="">

                    <section>

                        <div id="box"></div>

                        <div class="zaseki_text">
                            <p>※実際の座席配置とは異なる場合があります。</p>
                            <input type="text" name="zaseki_bng" id="zaseki_inp" value=" " hidden/>
                            <input type="text" name="zaseki_cnt" id="zaseki_count" value=" " hidden/>
                            <a href="#">座席表詳細はこちら</a>
                        </div>
                    </section>


                    <!-- 利用規約 -->
                    <section class="kiyaku">
                        <div class="subtitle_kiyaku">
                            <h2>利用規約</h2>
                        </div>

                        <div class="kiyaku_menu">
                            <p>【注意事項】<br>
                                ■青少年の方（18歳未満等対象の劇場が所在する都道府県の青少年保護育成条例で定める青少年）は、映画の終映時間が午後11時（大阪府、群馬県は午後10時）を越える上映回のチケットは購入できません。　購入されても当該条例等（当社の加盟する団体が当該都道府県との間で締結する自主規制規約等を含む。以下同じ。）の定めにより入場できません。　但し、条例等が上記と異なる定めをしているときは、条例等の定めるところによるものとします。　大阪府においては16歳未満の方で保護者同伴でない場合は午後7時を越える上映回には入場できません。<br>
                                ■途中入場は鑑賞の妨げとなりますのでお断りする場合があります。　なお、その際には払い戻しは致しません。<br>
                                ■本編開始前には5～15分程度の企業CMや予告編がございます。あらかじめご了承ください。<br>
                                ■やむを得ず上映シアターを変更する場合がございます。　その際には座席が変更になる場合がございますがあらかじめご了承ください。<br>
                                ■シアター内へ持ち込める飲食物は、劇場コンセッションスタンドで購入されたものに限ります。<br>
                                ■4DXを利用される場合は、「4DXご鑑賞にあたっての9注意事項」に全て同意したとみなします。<br>
                                ■退場時には必ず貴重品・手荷物をご確認ください。　上映中は鑑賞の妨げとなりますのでいかなる忘れ物についても当該上映終了後にしか探すことはできません。　その際に発生した損害について当社は一切の責任を負いません。<br>
                            </p>
                        </div>

                        <div class="kiyaku_on">
                            <label>
                                <input type="checkbox" name="kiyaku_check" value="1" id="kiyaku_btn" required>
                                上記の利用規約に同意する
                            </label>
                        </div>
                    </section>


                    <div class="btn">

                        <input type="submit" name="search" value="< 戻る" class="back_btn">

                        <input type="submit" name="seat_btn" value="利用規約に同意して次へ >" class="next_btn">

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

    <!-- sweetalert js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- sweetalert js end -->

    <script src="js/pagetop.js"></script>
    <script src="js/nowshowing.js"></script>
    <script src="js/ticket_seat.js"></script>
    <script src="js/zaseki.js"></script>

    <!-- load js end -->

</body>

</html>