<?php
    
	require '../common/common.php';
	// データベースに接続する
	$pdo = connect();
	
	//セッション取得

	$movie_no = $_SESSION['movie_no'];
	$title = $_SESSION['title'];
	$story = $_SESSION['story'];
	$director = $_SESSION['director'];
	$cast = $_SESSION['cast'];
	$image = $_SESSION['image'];
	$counter = "";

	if (isset($_POST['apdate_btn'])) {

		// 映画情報テーブル
		$sql = 'UPDATE movie_tbl SET movie_no=:movie_no, title=:title, story=:story, director=:director, cast=:cast, image=:image, counter=:counter WHERE movie_no=:movie_no';
		
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':movie_no', $movie_no, PDO::PARAM_STR);
		$stmt->bindParam(':title', $title, PDO::PARAM_STR);
		$stmt->bindParam(':story', $story, PDO::PARAM_STR);
		$stmt->bindParam(':director', $director, PDO::PARAM_STR);
		$stmt->bindParam(':cast', $cast, PDO::PARAM_STR);
		$stmt->bindParam(':image', $image, PDO::PARAM_STR);
		$stmt->bindParam(':counter', $counter, PDO::PARAM_INT);
	
		$stmt->execute();
	
		header('location:kanri_eiga_henshu_fin.php');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"
        integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <!-- bootstrap css end -->
    <!-- bootstrap css end -->

    <link rel="stylesheet" href="../css/common/common.css" />

    <link rel="stylesheet" href="../css/common/kanri_common.css">
    <link rel="stylesheet" href="../css/kanri_eiga_list.css">
    <link rel="stylesheet" href="../css/kanri_eiga.css">
    <link rel="stylesheet" href="../css/kanri_eiga_henshu.css">
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

    <main class="main_wrap">

        <h4>映画情報管理　編集</h4>

        <form method="post" class="conf_main">
            <div class="conf_div">
                <label for="title">タイトル</label>
                <p><?php echo $title; ?></p>
            </div>
            <div class="conf_div">
                <label for="image">サムネイル</label>
                <p><?php echo $image; ?></p>
            </div>
            <div class="conf_div">
                <label for="story">あらすじ</label>
                <p><?php echo $story; ?></p>
            </div>
            <div class="conf_div">
                <label for="director">監督名　</label>
                <p><?php echo $director; ?></p>
            </div>
            <div class="conf_div">
                <label for="cast">キャスト</label>
                <p><?php echo $cast; ?></p>
            </div>
            <div class="btn">
                <input type="button" onclick="history.back()" value="戻る">
                <input type="submit" name="apdate_btn" value="更新">
            </div>

            <input type="hidden" name="message_id" value="<?php echo $message_data['movie_no']; ?>">
        </form>

    </main>

</body>

</html>