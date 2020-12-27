<?php
    
	require '../common/common.php';
	// データベースに接続する
	$pdo = connect();

	$movie_no = $_GET['movie_no'];

	$_SESSION['movie_no'] = $movie_no;

	var_dump($_SESSION['movie_no']);
	
	// if( !empty($_GET['movie_id']) && empty($_POST['movie_id']) ) {

	// // 投稿を取得するコードが入る
	// 	$movie_id = (int)htmlspecialchars($_GET['movie_id'], ENT_QUOTES);

	// 	var_dump($movie_id);
		
	// }

	if (isset($_POST['btn_submit'])) {

		if (
			!empty($_POST['title']) && !empty($_POST['story']) && !empty($_POST['director']) && !empty($_POST['cast']) && !empty($_POST['image'])
		) {
	
			//入力された値を取得
			$title = $_POST['title'];
			$story = $_POST['story'];	
			$director = $_POST['director'];
			$cast = $_POST['cast'];
			$image = $_POST['image'];
	
			//セッション保存
			$_SESSION['title'] = $title;
			$_SESSION['story'] = $story;
			$_SESSION['director'] = $director;
			$_SESSION['cast'] = $cast;
			$_SESSION['image'] = $image;
	
	
			header('location:m_kanri_henshu_conf.php');
		} else {
			$errormessage = "必須項目をすべて入力してください。";
		}
	} else {
		//入力された値クリア
		$title = "";
		$story = "";
		$director = "";
		$cast = "";
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
    <link rel="stylesheet" href="../css/m_kanri_henshu.css">
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

<h1>映画　管理</h1>

<form method="post">
	<div>
		<label for="title">タイトル</label>
		<input id="title" type="text" size="60" name="title">
	</div>
	<div>
		<label for="image">サムネイル</label>
		<input type="file" name="image">
	</div>
	<div>
		<label for="story">あらすじ</label>
		<textarea id="story" name="story" cols="60" rows="20"></textarea>
	</div>
	<div>
		<label for="director">監督名　</label>
		<input id="director" type="text"  size="60" name="director">
		</textarea>
	</div>
	<div>
		<label for="cast">キャスト</label>
		<textarea id="cast" name="cast" cols="60"></textarea>
	</div>
	<a class="btn_cancel" href="m_kanri.php">キャンセル</a>
	<input type="submit" name="btn_submit" value="確認">
	<input type="hidden" name="message_id" value="<?php echo $message_data['movie_no']; ?>">
</form>

</body>
</html>