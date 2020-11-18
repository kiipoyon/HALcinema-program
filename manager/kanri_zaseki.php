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
    <link rel="stylesheet" href="../css/kanri_zaseki.css">
    <!--load css end-->

    <title>座席情報管理 || HALシネマ</title>
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
            <a href="kanri_top.html">
                <h3 id="top">管理者トップ</h3>
            </a>
        </li>
        <li>
            <a href="kanri_uriage.html">
                <h3 id="uriage">売上情報管理</h3>
            </a>
        </li>
        <li>
            <a href="kanri_eiga.html">
                <h3 id="eiga">映画情報管理</h3>
            </a>
        </li>
        <li>
            <a href="kanri_kaiin.html">
                <h3 id="kaiin">会員情報管理</h3>
            </a>
        </li>
        <li>
            <a href="kanri_zaseki.html">
                <h3 id="zaseki">座席予約管理</h3>
            </a>
        </li>
    </ul>

</nav>
<!-- nav end -->

<!-- main -->
<main class="main_wrap">
    <h4>座席情報管理</h4>
    <section class="box">
        <div class="tab_container">
            <input id="tab1" type="radio" name="tab_item" checked>
            <label class="tab_item" for="tab1">会員情報</label>
            <input id="tab2" type="radio" name="tab_item">
            <label class="tab_item" for="tab2">　　　　</label>
            <input id="tab3" type="radio" name="tab_item">
            <label class="tab_item" for="tab3">　　　　</label>
            <input id="tab4" type="radio" name="tab_item">
            <label class="tab_item" for="tab4">　　　　</label>
            <div class="tab_content" id="tab1_content">
                <table>
                    <tr>
                        <th>会員番号</th>
                        <th>映画番号</th>
                        <th>シアター番号</th>
                        <th>座席</th>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>01</td>
                        <td>01</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>01</td>
                        <td>01</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>01</td>
                        <td>01</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>01</td>
                        <td>01</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>01</td>
                        <td>01</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>01</td>
                        <td>01</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>01</td>
                        <td>01</td>
                        <td>01</td>
                    </tr>
                </table>
              </div>
            </div>
            <div class="tab_content" id="tab2_content">
              <div class="tab_content_description">
                <p class="c-txtsp">　　　　</p>
              </div>
            </div>
            <div class="tab_content" id="tab3_content">
              <div class="tab_content_description">
                <p class="c-txtsp">　　　　</p>
              </div>
            </div>
            <div class="tab_content" id="tab4_content">
              <div class="tab_content_description">
                <p class="c-txtsp">　　　　</p>
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

<script src="js/pagetop.js"></script>
<script src="./js/ranking.js"></script>
<!-- load js end -->

</body>
</html>
