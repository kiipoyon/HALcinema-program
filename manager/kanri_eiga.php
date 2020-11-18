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
    <link rel="stylesheet" href="../css/kanri_eiga.css">
    <!--load css end-->

    <title>映画情報管理 || HALシネマ</title>
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
    <h4>映画情報管理</h4>
    <form>
        <div class="msr_text_02">
            <label>映画のタイトル</label>
            <input type="text" />
        </div>
        <div class="msr_file_02">
            <p>画像</p>
            <div class="msr_filebox_02">
              <label for="file_photo">画像を選択してください</label>
              <input type="file" id="file_photo">
            </div>
        </div>
        <div class="msr_text_02">
            <label>監督</label>
            <input type="text" />
        </div>
        <div class="msr_text_02">
            <label>キャスト</label>
            <input type="text" />
        </div>
        <div class="msr_textarea_02">
            <label>ストーリー</label>
            <textarea></textarea>
        </div>
        <p class="msr_sendbtn_02">
            <input type="submit" value="追加">
        </p>
    </form>
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
