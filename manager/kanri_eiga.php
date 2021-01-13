<?php

require '../common/common.php';
// データベースに接続する
$pdo = connect();


// 管理ページのログインパスワード
// define( 'PASSWORD', 'bbs');

// データベースの接続情報
// define( 'DB_HOST', 'localhost');
// define( 'DB_USER', 'nhs80333');
// define( 'DB_PASS', 'nhs80333');
// define( 'DB_NAME', 'haldb');

// タイムゾーン設定
date_default_timezone_set('Asia/Tokyo');

// // 変数の初期化
// $now_date = null;
// $data = null;
// $file_handle = null;
// $split_data = null;
// $message = array();
// $message_array = array();
// $success_message = null;
// $error_message = array();
// $clean = array();

// if( !empty($_GET['btn_logout']) ) {
// 	unset($_SESSION['login_login']);
// }

// if( !empty($_POST['btn_submit']) ) {

// 	if( !empty($_POST['login_password']) && $_POST['login_password'] === PASSWORD ) {
// 		$_SESSION['login_login'] = true;
// 	} else {
// 		$error_message[] = 'ログインに失敗しました。';
// 	}
// }

// データベースに接続
// $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME);

// 接続エラーの確認
// if( $mysqli->connect_errno ) {
// 	$error_message[] = 'データの読み込みに失敗しました。 エラー番号 '.$mysqli->connect_errno.' : '.$mysqli->connect_error;
// } else {

//     $sql = "SELECT movie_no,title,story,director,cast,image FROM movie_tbl ORDER BY movie_no DESC";
// 	$res = $mysqli->query($sql);

//     if( $res ) {
// 		$message_array = $res->fetch_all(MYSQLI_ASSOC);
//     }

//     $mysqli->close();
// }

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
    <link rel="stylesheet" href="../css/kanri_eiga_list.css">
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
    <!-- <?php //if( !empty($error_message) ): 
            ?>
    <ul class="error_message">
		<?php //foreach( $error_message as $value ): 
        ?>
            <li>・<?php //echo $value; 
                    ?></li>
		<?php //endforeach; 
        ?>
    </ul>
<?php //endif; 
?> -->
    <section>


        <main class="main_wrap">
            <h4>映画情報管理</h4>
            <div class="movie_tuika">
                <a href="kanri_eiga_tuika.php">追加</a>
            </div>
            <section class="box">
                <div class="tab_container">
                    <input id="tab1" type="radio" name="tab_item" checked>
                    <label class="tab_item" for="tab1">映画情報</label>
                    <div class="tab_content" id="tab1_content">
                        <table>
                            <?php
                            $sql = "SELECT movie_no,title,story,director,cast,image FROM movie_tbl ORDER BY movie_no DESC";
                            $stmt = $pdo->query($sql);
                            foreach ($stmt as $row) {
                            ?>
                                <tr>
                                    <?php echo $row['title']; ?>
                                </tr>
                                <hr>
                                <tr>
                                    <p class="story"><?php echo $row['story']; ?></p>
                                </tr>
                                <hr>
                                <tr>
                                    <?php echo $row['director']; ?>
                                </tr>
                                <hr>
                                <tr>
                                    <?php echo $row['cast']; ?>
                                </tr>
                                <hr>
                                <tr>
                                    <?php echo $row['image']; ?>
                                </tr>
                                <hr>
                                <tr>
                                    <p>
                                        <a href="kanri_eiga_henshu.php?movie_no=<?php echo $row['movie_no']; ?>" method="GET">編集</a>
                                        <a href="kanri_eiga_delete.php?movie_no=<?php echo $row['movie_no']; ?>" method="GET">削除</a>
                                    </p>
                                </tr>
                                <hr size="20" noshade>
                            <?php
                            }
                            ?>
                        </table>
                        <!-- </div> -->
                    </div>
            </section>
        </main>


    </section>
</body>

</html>