<?php
require 'common/common.php';
$pdo = connect();

$mail = $_SESSION['mail'];

// セッション情報の取得
//セッション取得

$username = $_SESSION['username'];
$name_read = $_SESSION['name_read'];

$year = $_SESSION['year'];
$month = $_SESSION['month'];
$day = $_SESSION['day'];

$gender = $_SESSION['gender'];
$tel = $_SESSION['tel'];

$new_mail = $_SESSION['new_mail'];
$pass = $_SESSION['pass'];



//変数連結
$birthday = $year . $month . $day;

$errorMessage = "";

try {
  // 接続完了
  $pdo = connect();
} catch (PDOException $e) {
  $errorMessage = 'データベースエラー';
  exit();
}


if (isset($_POST['change_idpas_last'])) {


  //ユーザ詳細テーブル
  $sql1 = 'UPDATE member_tbl SET mail=:new_mail, username=:username, name_read=:name_read, birthday=:birthday, gender=:gender, tel=:tel WHERE mail=:mail';

  $sql2 = 'UPDATE login_tbl SET mail=:new_mail, pass=:pass WHERE mail=:mail';

  $stmt1 = $pdo->prepare($sql1);
  $stmt2 = $pdo->prepare($sql2);
  $stmt1->bindParam(':username', $username, PDO::PARAM_STR);
  $stmt1->bindParam(':name_read', $name_read, PDO::PARAM_STR);
  $stmt1->bindParam(':birthday', $birthday, PDO::PARAM_STR);
  $stmt1->bindParam(':gender', $gender, PDO::PARAM_STR);
  $stmt1->bindParam(':tel', $tel, PDO::PARAM_STR);
  $stmt1->bindParam(':new_mail', $new_mail, PDO::PARAM_STR);
  $stmt1->bindParam(':mail', $mail, PDO::PARAM_STR);

  $stmt2->bindParam(':new_mail', $new_mail, PDO::PARAM_STR);
  $stmt2->bindParam(':pass', $pass, PDO::PARAM_STR);
  $stmt2->bindParam(':mail', $mail, PDO::PARAM_STR);



  $stmt2->execute();
  $stmt1->execute();

  header('location:change_fin.php');
}

?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- load css -->
  <link rel="stylesheet" href="css/common/reset.css">

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- bootstrap css end -->

  <link rel="stylesheet" href="css/common/common.css">
  <link rel="stylesheet" href="css/change_conf.css">
  <!--load css end-->

  <title>会員情報変更 || HALシネマ</title>
</head>

<body>

  <!-- header -->
  <header id="header">

    <!-- logo -->
    <div>
      <img src="images/common/logo.png" alt="HALcinema-logo">
    </div>
    <!-- logo end -->

    <nav>
      <ul>
        <li class="nav__solid">
          <a href="index.php">
            <img src="./images/common/HOME.png" alt="">
            <h1>HALシネマ</h1>
            <p>HOME</p>
          </a>
        </li>
        <!--
        -->
        <li class="nav__solid">
          <a href="nowshowing.php">
            <img src="./images/common/NOWSHOWING.png" alt="">
            <h1>上映中</h1>
            <p>NOW SHOWING</p>
          </a>
        </li>
        <!--
        -->
        <li class="nav__solid">
          <a href="comingsoon.php">
            <img src="./images/common/COMINGSOON.png" alt="">
            <h1>公開予定</h1>
            <p>COMING SOON</p>
          </a>
        </li>
        <!--
        -->
        <li class="nav__solid">
          <a href="service.php">
            <img src="./images/common/THEATER.png" alt="">
            <h1>サービス案内</h1>
            <p>SERVICE INFO</p>
          </a>
        </li>
        <!--
        -->
        <li class="nav__solid">
          <a href="member_login.php">
            <img src="./images/common/LOGIN.png" alt="">
            <h1>ログイン</h1>
            <p>LOGIN</p>
          </a>
        </li>
        <!--
        -->
        <li>
          <a href="ticket_choice.php">
            <img src="./images/common/TICKETS.png" alt="">
            <h1>チケット照会</h1>
            <p>TICKETS</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- nav end -->



  </header>
  <!-- header end -->


  <!-- メインビジュアル -->
  <main>


    <div id="title_div">
      <div class="contents_title">
        <h1>会員登録</h1>
        <h2>Member information<h2>
      </div>
    </div>


    <section>
      <form method="POST" action="">

        <dl>

          <div class="member_title">
            <h1>会員編集確認</h1>
            <h2>Member information<h2>
          </div>


          <div class="form_conf">
            <div>
              <dt>氏名</dt>
              <dd><?php echo $username; ?></dd>
            </div>

            <div>
              <dt>フリガナ</dt>
              <dd><?php echo $name_read; ?></dd>
            </div>

            <div>
              <dt>生年月日</dt>
              <dd><?php echo $birthday; ?></dd>
            </div>

            <div>
              <dt>性別</dt>
              <dd><?php echo $gender; ?></dd>
            </div>

            <div>
              <dt>電話番号</dt>
              <dd><?php echo $tel; ?></dd>
            </div>

            <div>
              <dt>Eメールアドレス</dt>
              <dd><?php echo $new_mail; ?></dd>
            </div>

            <div>
              <dt>パスワード</dt>
              <dd><?php echo $pass; ?></dd>
            </div>
          </div>
        </dl>

        <br>

        <div class="b-submit">
          <input type="button" value="修正" class="button" onclick="history.back()">
          <input type="submit" value="次へ" class="button" name="change_idpas_last">
        </div>

      </form>
    </section>

    <br>



    <div id="page__top">
      <p>ページトップへ</p>
      <div><i class="fas fa-caret-up"></i></div>
    </div>

  </main>
  <!-- main end -->



  <!-- footer -->
  <footer>
    <div>
      <ul>
        <li class="footer__nav"><a href="">企業情報</a></li>
        <!--
        -->
        <li class="footer__nav"><a href="">サイトマップ</a></li>
        <!--
        -->
        <li class="footer__nav"><a href="">プライバシーポリシー</a></li>
        <!--
        -->
        <li><a href="">お問い合わせ</a></li>
      </ul>
    </div>
    <div id="copyright">&copy;2020 HAL Cinema Ltd. All Rights Reserved.</div>
  </footer>
  <!-- footer end -->



  <!-- load js -->

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <!-- jquery end -->

  <!-- bootstrap js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- bootstrap js end -->

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/b7fcd44df6.js" crossorigin="anonymous"></script>
  <!-- fontawesome end -->

  <script src="js/pagetop.js"></script>

  <!-- load js end -->
</body>

</html>