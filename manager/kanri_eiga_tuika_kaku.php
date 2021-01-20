<?php

require_once '../common/common.php';

$title = $_SESSION['title'];
$image = $_SESSION['image'];
$director = $_SESSION['director'];
$cast = $_SESSION['cast'];
$story = $_SESSION['story'];
$counter = "";

$errorMessage = "";

try {
    $pdo = connect();
} catch (PDOException $e) {
    $errorMessage = 'データベースエラー';
    echo $errorMessage;
    exit();
}

if (isset($_POST['movie_add_con'])) {
    try {

        $pdo = connect();

        $stmt = $pdo->prepare("INSERT INTO movie_tbl(movie_no,title,image,director,cast,story,counter) VALUES (:movie_no,:title,:image,:director,:cast,:story,:counter)");
        $stmt->bindParam(':movie_no', $movie_no, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->bindParam(':director', $director, PDO::PARAM_STR);
        $stmt->bindParam(':cast', $cast, PDO::PARAM_STR);
        $stmt->bindParam(':story', $story, PDO::PARAM_STR);
        $stmt->bindParam(':counter', $counter, PDO::PARAM_INT);

        $stmt->execute();

        header('location:kanri_eiga_tuika_con.php');
    } catch (PDOException $error) {
        print $error . getMessage();
        die();
    }
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
        <h4>映画情報追加 確認</h4>
        <form method="post">
            <div class="msr_text_02_kaku">
                <h2>以下の内容で映画情報を追加します</h2>
            </div>
            <div class="msr_text_02_kaku">
                <label>映画タイトル</label>
                <div><?php echo $title; ?></div>
            </div>
            <div class="msr_text_02_kaku">
                <label>監督</label>
                <div><?php echo $director; ?></div>
            </div>
            <div class="msr_text_02_kaku">
                <label>キャスト</label>
                <div><?php echo $cast; ?></div>
            </div>
            <div class="msr_textarea_02_kaku">
                <label>ストーリー</label>
                <div><?php echo $story; ?></div>
            </div>
            </p>

            <div class="btn">

                <div>
                    <p class="msr_sendbtn_02">
                        <input type="button" onclick="history.back()" value="戻る">
                    </p>
                </div>

                <div>
                    <p class="msr_sendbtn_02">
                        <a href="kanri_eiga_tuika_con.php">
                            <input type="submit" value="追加" name="movie_add_con">
                        </a>
                    </p>
                </div>

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