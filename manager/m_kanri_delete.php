<?php
    
    require '../common/common.php';
    // データベースに接続する
    $pdo = connect();


    // 管理ページのログインパスワード
    define( 'PASSWORD', 'bbs');

    // データベースの接続情報
    define( 'DB_HOST', 'localhost');
    define( 'DB_USER', 'nhs80333');
    define( 'DB_PASS', 'nhs80333');
    define( 'DB_NAME', 'haldb');

    // タイムゾーン設定
    date_default_timezone_set('Asia/Tokyo');

    // 変数の初期化
    // $message_id = null;
	// $mysqli = null;
	// $sql = null;
	// $res = null;
	// $error_message = array();
	// $message_data = array();

    // session_start();

    // 管理者としてログインしているか確認
    //if( empty($_SESSION['login_login']) || $_SESSION['login_login'] !== true ) {

	// ログインページへリダイレクト
    // header("Location: ./login.php");
    // }
    
    if( !empty($_GET['movie_id']) && empty($_POST['movie_id']) ) {

	// 投稿を取得するコードが入る
    $movie_id = (int)htmlspecialchars($_GET['movie_id'], ENT_QUOTES);
	
	// データベースに接続
	$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	// 接続エラーの確認
	if( $mysqli->connect_errno ) {
		$error_message[] = 'データベースの接続に失敗しました。 エラー番号 '.$mysqli->connect_errno.' : '.$mysqli->connect_error;
	} else {
	
		// データの読み込み
		$sql = "SELECT * FROM movie_tbl WHERE movie_no = $movie_id";
		$res = $mysqli->query($sql);
		
		if( $res ) {
			$message_data = $res->fetch_assoc();
		} else {
		
			// データが読み込めなかったら一覧に戻る
			header("Location: ./m_kanri.php");
		}
		
		$mysqli->close();
	}
    } elseif( !empty($_POST['movie_id']) ) {

		$movie_id = (int)htmlspecialchars( $_POST['movie_id'], ENT_QUOTES);
		
			// データベースに接続
			$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME);
		
			// 接続エラーの確認
			if( $mysqli->connect_errno ) {
				$error_message[] = 'データベースの接続に失敗しました。 エラー番号 ' . $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
			} else {
				$sql = "DELETE FROM movie_tbl WHERE movie_no = $movie_id";
				$res = $mysqli->query($sql);
			}
		
			$mysqli->close();
		
			// 更新に成功したら一覧に戻る
			if( $res ) {
                header("Location: ./m_kanri.php");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">    <!-- bootstrap css end -->
    <!-- bootstrap css end -->

    <link rel="stylesheet" href="../css/common/common.css"/>

    <link rel="stylesheet" href="../css/common/kanri_common.css">
    <link rel="stylesheet" href="../css/kanri_eiga_list.css">
    <link rel="stylesheet" href="../css/m_kanri_delete.css">
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
            <a href="m_kanri.php">
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
<?php if( !empty($error_message) ): ?>
    <ul class="error_message">
		<?php foreach( $error_message as $value ): ?>
            <li>・<?php echo $value; ?></li>
		<?php endforeach; ?>
    </ul>
<?php endif; ?>

<p class="text-confirm">以下の投稿を削除します。<br>よろしければ「削除」ボタンを押してください。</p>

<form method="post">
	<div>
		<label for="title">タイトル</label>
		<p><?php if( !empty($message_data['title']) ){ echo $message_data['title']; } ?></p>
	</div>
	<div>
		<label for="story">あらすじ</label>
		<p><?php if( !empty($message_data['story']) ){ echo $message_data['story']; } ?></p>
	</div>
	<div>
		<label for="director">監督名　</label>
		<p><?php if( !empty($message_data['director']) ){ echo $message_data['director']; } ?></p>
	</div>
	<div>
		<label for="cast">キャスト</label>
		<p><?php if( !empty($message_data['cast']) ){ echo $message_data['cast']; } ?></p>
	</div>
	<a class="btn_cancel" href="m_kanri.php">キャンセル</a>
	<input type="submit" name="btn_submit" value="削除">
	<input type="hidden" name="movie_id" value="<?php echo $message_data['movie_no']; ?>">
</form>

</body>
</html>