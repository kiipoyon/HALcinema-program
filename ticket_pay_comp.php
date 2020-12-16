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
    <link rel="stylesheet" href="css/ticket_pay_comp.css">
    <!--load css end-->

    <title>購入完了 || HALシネマ</title>
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
                <h2>購入完了</h2>
            </div>

            <section class="ticket_flow">
                <ol class="step">
                    <li>座席選択</li>
                    <li>お客様情報入力</li>
                    <li>券種選択</li>
                    <li>決済情報入力</li>
                    <li>購入確認</li>
                    <li class="is-current">購入完了</li>
                </ol>
            </section>



            <section class="ticket_wrap">

                <!-- 会員情報 -->
                <section class="info_area">
                    <h3>・座席購入完了</h3>
                    <p class="info_p_01">
                        座席購入を利用いただきまして、誠にありがとうございます。
                        座席の濃運輸が完了致しました。
                        購入完了メールを送信しておりますが、通信過多による遅延や、お客様のメール設定により、
                        届かない場合もございますので、下記の購入番号を控えることをお勧め致します。
                    </p>
                    <p class="info_p_02"> ※上映開始までに所定の自動券売機にてチケットの発券をお願い致します。<br>
                        ※チケットの発券には「購入番号」と入力いただいた「電話番号」が必要です。
                    </p>

                </section>



                <div class="ticket_info">
                    <p>
                        お客様の購入番号 : <span>000011</span>
                    </p>
                </div>


                <div class="btn">


                    <input type="button" value="< トップへ戻る" onClick="location.href='./index.php'" class="back_btn">


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