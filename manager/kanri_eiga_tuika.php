<?php

require "../common/common.php";

// エラーメッセージ、登録完了メッセージの初期化
$errorMessage = "";

// $result初期化
$result = "";

if (isset($_POST['movie_add'])) {

    if (
        !empty($_POST['title']) && !empty($_POST['image'])
        && !empty($_POST['director']) && !empty($_POST['cast']) && !empty($_POST['story'])
    ) {


        $_SESSION['title'] = $_POST['title'];
        $_SESSION['image'] = $_POST['image'];
        $_SESSION['director'] = $_POST['director'];
        $_SESSION['cast'] = $_POST['cast'];
        $_SESSION['story'] = $_POST['story'];

        $title = $_SESSION['title'];
        $image = $_SESSION['image'];
        $director = $_SESSION['director'];
        $cast = $_SESSION['cast'];
        $story = $_SESSION['story'];

        header('location:kanri_eiga_tuika_kaku.php');
    } else {
        $errorMessage = "必須項目をすべて入力してください";
    }
} else {

    $pass = "";
    $pass_conf = "";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- load css -->
    <link rel="stylesheet" href="../css/common/reset.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous"> <!-- bootstrap css end -->
    <!-- bootstrap css end -->

    <link rel="stylesheet" href="../css/common/common.css" />

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
        <h4>映画情報追加　編集</h4>
        <form action="" method="POST">

            <div class="msr_text_02">
                <label>映画のタイトル</label>
                <input type="text" name="title" />
            </div>

            <div class="msr_file_02">
                <p>画像</p>
                <div class="msr_filebox_02">
                    <label for="file_photo">画像を選択してください</label>
                    <input type="file" id="file_photo" name="image">
                </div>
            </div>

            <div class="msr_text_02">
                <label>監督</label>
                <input type="text" name="director" />
            </div>

            <div class="msr_text_02">
                <label>キャスト</label>
                <input type="text" name="cast" />
            </div>

            <div class="msr_textarea_02">
                <label>ストーリー</label>
                <textarea name="story"></textarea>
            </div>


            <div class="btn">
                <p class="msr_sendbtn_02">
                    <a href="kanri_eiga_tuika_kaku.php">
                        <input type="submit" value="次へ" name="movie_add">
                    </a>
                </p>
            </div>
        </form>
    </main>
    <!-- main end -->

    <!-- load js -->

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- jquery end -->

    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <!-- bootstrap js end -->

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b7fcd44df6.js" crossorigin="anonymous"></script>
    <!-- fontawesome end -->

    <!-- load js end -->

</body>

</html>