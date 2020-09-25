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
    <link rel="stylesheet" href="css/ticket_deno.css">
    <!--load css end-->

    <title>券種選択 || HALシネマ</title>
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
                <h2>券種選択</h2>
            </div>

            <section class="ticket_flow">
                <ol class="step">
                    <li>座席選択</li>
                    <li>お客様情報入力</li>
                    <li class="is-current">券種選択</li>
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
                        <dd class="total">3,600円</dd>
                    </dl>
                </section>


                <!-- 会員情報 -->
                <section class="info_area">
                    <h3>・会員情報</h3>
                    <p class="info_p_01">会員氏名 ： 春太郎　様</p>
                    <p class="info_p_02">現在のお客様のシネマポイント数は、<span class="red_info">5ポイント</span>です。<br>
                        ポイント有効期限は、<span class="red_info">2020/09/30</span>までとなります。</p>
                    <p class="info_p_03">6ポイントで1回無料で映画を鑑賞いただけます。「6ポイント無料券(¥0)」で券種をお選び下さい。<br>
                        上映形式によって追加料金が発生します。<br>
                        ※IMAX、IMAX3D、4DX、4DX3D作品の「6ポイント無料券(¥0)」のご利用は対象外となります。</p>
                </section>


                <!-- 券種選択 -->
                <section class="info_form">
                    <h3>・券種選択</h3>
                    <p> チケットの種類をお選びください。</p>

                    <form method="POST" action="ticket_pay.php" class="next">
                        <section class="deno_area">

                            <table>

                                <tr class="deno_title">
                                    <th>座席番号</th>
                                    <th>券種名 / 料金</th>
                                </tr>

                                <tr class="deno_number">
                                    <td>A-001</td>
                                    <td>
                                        <select name="ticket_deno">
                                            <option value="一般:¥1,800">[一般:¥1,800]</option>
                                            <option value="一般:¥1,800">[一般:¥1,800]</option>
                                            <option value="一般:¥1,800">[一般:¥1,800]</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr class="deno_number">
                                    <td>A-002</td>
                                    <td>
                                        <select name="ticket_deno">
                                            <option value="一般:¥1,800">[一般:¥1,800]</option>
                                            <option value="一般:¥1,800">[一般:¥1,800]</option>
                                            <option value="一般:¥1,800">[一般:¥1,800]</option>
                                        </select>
                                    </td>
                                </tr>

                            </table>
                        </section>
                    </form>
                </section>


                <div class="btn">

                    <form method="POST" action="ticket_info.php" class="back">
                        <input type="submit" name="search" value="< 戻る" class="back_btn">
                    </form>

                    <form method="POST" action="ticket_pay.php" class="next">
                        <input type="submit" name="search" value="次へ >" class="next_btn">
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