<?php
require 'common.php';

$mail = $_POST['mail'];
$dsn = "mysql:host=localhost; dbname=haldb; charset=utf8";
$username = "dbadmin";
$password = "dbadmin";
try {
    $dbh = connect();
} catch (PDOException $e) {
    $msg = $e->getMessage();
}

$sql = "SELECT * FROM login_tbl WHERE mail = :mail";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':mail', $mail);
$stmt->execute();
$member = $stmt->fetch();

//指定したハッシュがパスワードにマッチしているかチェック
// password_verify($_POST['pass'] , $member['pass'])
if (password_verify($_POST['pass'] , $member['pass'])){
    //DBのユーザー情報をセッションに保存
    $_SESSION['mail'] = $mail;
    $msg = 'ログインしました。';
    $link = '<a href="member_info.php">ホーム</a>';
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $link = '<a href="member_login.php">戻る</a>';
}


?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>