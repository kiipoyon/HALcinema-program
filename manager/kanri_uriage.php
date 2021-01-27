<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- load css -->
    <link rel="stylesheet" href="../css/common/reset.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">    <!-- bootstrap css end -->
    <!-- bootstrap css end -->
    
    <link rel="stylesheet" href="../css/common/common.css"/>

    <link rel="stylesheet" href="../css/common/kanri_common.css">
    <link rel="stylesheet" href="../css/kanri_uriage.css">
    <!--load css end-->

    <title>売上情報管理 || HALシネマ</title>
</head>
<body>



<!-- header -->
<header id="header">

    <!-- logo -->
    <div>
        <img src="../images/common/logo.png" alt="HALcinema-logo">
    </div>
    <!-- logo end -->

</header>
<!-- header end -->

<!-- nav -->
<nav>

    <ul>
        <li>
            <a href="kanri_top.php">
                <h3 id="top">管理者トップ</h3>
            </a>
        </li>
        <li>
            <a href="kanri_uriage.php">
                <h3 id="uriage">売上情報管理</h3>
            </a>
        </li>
        <li>
            <a href="kanri_eiga.php">
                <h3 id="eiga">映画情報管理</h3>
            </a>
        </li>
        <li>
            <a href="kanri_kaiin.php">
                <h3 id="kaiin">会員情報管理</h3>
            </a>
        </li>
        <li>
            <a href="kanri_zaseki.php">
                <h3 id="zaseki">座席予約管理</h3>
            </a>
        </li>
    </ul>

</nav>
<!-- nav end -->

<!-- main -->
<main class="main_wrap">
    <h4>売上情報管理</h4>
    <section class="box">
        <div class="tab_container">
            <input id="tab1" type="radio" name="tab_item" checked>
            <label class="tab_item" for="tab1">売上情報</label>
            <input id="tab2" type="radio" name="tab_item">
            <label class="tab_item" for="tab2">経費情報</label>
            <input id="tab3" type="radio" name="tab_item">
            <label class="tab_item" for="tab3">利益情報</label>
            <input id="tab4" type="radio" name="tab_item">
            <label class="tab_item" for="tab4">グラフ</label>
            <div class="tab_content" id="tab1_content">
              <div class="tab_content_description">
                <select required class="year" id="tab1year" name="tab1">
                    <option value="2021">2021年</option>
                    <option value="2020">2020年</option>
                    <option value="2019">2019年</option>
                    <option value="2018">2018年</option>
                </select>
                <select required class="month" id="tab1month" name="tab1">
                    <option value="01">1月</option>
                    <option value="02">2月</option>
                    <option value="03">3月</option>
                    <option value="04">4月</option>
                    <option value="05">5月</option>
                    <option value="06">6月</option>
                    <option value="07">7月</option>
                    <option value="08">8月</option>
                    <option value="09">9月</option>
                    <option value="10">10月</option>
                    <option value="11">11月</option>
                    <option value="12">12月</option>
                </select>
                <div id="table1"></div>
              </div>
            </div>
            <div class="tab_content" id="tab2_content">
              <div class="tab_content_description">
                <select required class="year tab2" id="tab2year" name="tab2">
                    <option value="2021">2021年</option>
                    <option value="2020">2020年</option>
                    <option value="2019">2019年</option>
                    <option value="2018">2018年</option>
                </select>
                <select required class="month tab2" id="tab2month" name="tab2">
                    <option value="01">1月</option>
                    <option value="02">2月</option>
                    <option value="03">3月</option>
                    <option value="04">4月</option>
                    <option value="05">5月</option>
                    <option value="06">6月</option>
                    <option value="07">7月</option>
                    <option value="08">8月</option>
                    <option value="09">9月</option>
                    <option value="10">10月</option>
                    <option value="11">11月</option>
                    <option value="12">12月</option>
                </select>
                <div id="table2"></div>
            </div>
            </div>
            <div class="tab_content" id="tab3_content">
              <div class="tab_content_description">
                <!-- <p class="c-txtsp">利益情報</p> -->
                <select required class="year" id="tab3year" name="tab3">
                    <option value="2021">2021年</option>
                    <option value="2020">2020年</option>
                    <option value="2019">2019年</option>
                    <option value="2018">2018年</option>
                </select>
                <div id="table3"></div>
              </div>
            </div>
            <div class="tab_content" id="tab4_content">
              <div class="tab_content_description">
                <select required class="year" id="tab4year" name="tab4">
                    <option value="2021">2021年</option>
                    <option value="2020">2020年</option>
                    <option value="2019">2019年</option>
                    <option value="2018">2018年</option>
                </select>
                <canvas id="myChart"></canvas>
              </div>
            </div>

          </div>
    </section>

</main>
<!-- main end -->

<!-- load js -->

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<!-- jquery end -->

<!-- bootstrap js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
<!-- bootstrap js end -->

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/b7fcd44df6.js" crossorigin="anonymous"></script>
<!-- fontawesome end -->

<!-- chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<!-- chart js end -->

<!-- 情報取得Ajax -->
<script src="./uriage_components/js/tab.js"></script>
<!-- load js end -->
</body>
</html>