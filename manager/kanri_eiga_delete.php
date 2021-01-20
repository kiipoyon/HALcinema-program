<?php

    require '../common/common.php';
    // データベースに接続する
    $pdo = connect();

    $movie_no = $_GET['movie_no'];

    $_SESSION['movie_no'] = $movie_no;
    
    if(isset($_POST['btn_submit'])){
        $sql = "DELETE FROM movie_tbl WHERE movie_no = $movie_no";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        header("Location: ./kanri_eiga_delete_con.php");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">    <!-- bootstrap css end -->
    <!-- bootstrap css end -->

    <link rel="stylesheet" href="../css/common/common.css"/>

    <link rel="stylesheet" href="../css/common/kanri_common.css">
    <link rel="stylesheet" href="../css/kanri_eiga_list.css">
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

<h1>映画　削除</h1>

<p class="text-confirm">以下の投稿を削除します。<br>よろしければ「削除」ボタンを押してください。</p>

<form method="post">
    <?php
        $sql = "SELECT * FROM movie_tbl WHERE movie_no = $movie_no";
        $stmt = $pdo->query($sql);
        foreach($stmt as $row){
     ?>
	<div>
		<label for="title">タイトル</label>
		<p><?php echo $row['title']; ?></p>
	</div>
	<div>
		<label for="story">あらすじ</label>
		<p><?php echo $row['story']; ?></p>
	</div>
	<div>
		<label for="director">監督名　</label>
		<p><?php echo $row['director']; ?></p>
	</div>
	<div>
		<label for="cast">キャスト</label>
		<p><?php echo $row['cast']; ?></p>
	</div>
    <?php
        }
    ?>
	<input type="button" value="キャンセル" onClick="history.back()">
	<input type="submit" name="btn_submit" value="削除">
</form> 

</body>
</html>