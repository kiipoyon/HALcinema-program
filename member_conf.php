<?php

require_once 'common/common.php';

$username = $_SESSION['username'];
$name_read = $_SESSION['name_read'];

$year = $_SESSION['year'];
$month = $_SESSION['month'];
$day = $_SESSION['day'];

$gender = $_SESSION['gender'];
$tel = $_SESSION['tel'];

$mail = $_SESSION['mail'];
$pass = $_SESSION['pass'];

//連結
$time_value = $year . $month . $day;
$birthday = date('Y-m-d H:i', strtotime($time_value));

$today = date("Y-m-d");

$errorMessage = "";

try {
  $pdo = connect();
} catch (PDOException $e) {
  $errorMessage = 'データベースエラー';
  echo $errorMessage;
  exit();
}

if (isset($_POST['signup_last'])) {
  try {
    //login_tbl
    $pdo = connect();
    //        $pass2 = password_hash($pass, PASSWORD_DEFAULT);
    $stmt1 = $pdo->prepare("INSERT INTO login_tbl(mail,pass) VALUES (:mail,password(:pass))");
    $stmt1->bindValue(':mail', $mail, PDO::PARAM_STR);
    $stmt1->bindValue(':pass', $pass, PDO::PARAM_STR);

    //member_tbl
    $stmt2 = $pdo->prepare("INSERT INTO member_tbl(mail,username,name_read,birthday,gender,tel,date) VALUES(:mail,:username,:name_read,:birthday,:gender,:tel,:date)");

    $stmt2->bindValue(':mail', $mail);
    $stmt2->bindValue(':username', $username);
    $stmt2->bindValue(':name_read', $name_read);
    $stmt2->bindValue(':birthday', $birthday);
    $stmt2->bindValue(':gender', $gender);
    $stmt2->bindValue(':tel', $tel);
    $stmt2->bindValue(':date', $today);

    $stmt1->execute();
    $stmt2->execute();
    //print $result;
    header('location:member_fin.php');
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
  <link rel="stylesheet" href="css/common/reset.css">

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- bootstrap css end -->

  <link rel="stylesheet" href="css/common/common.css">
  <link rel="stylesheet" href="css/member_conf.css">
  <!--load css end-->

  <title>会員登録_確認 || HALシネマ</title>
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


  <!-- main -->
  <main>

    <!-- title -->
    <div id="title_div">
      <div class="contents_title">
        <h1>会員情報</h1>
        <h2>Member information<h2>
      </div>
    </div>
    <!-- title end -->

    <!-- 会員登録 -->
    <section>
      <form method="post">
        <dl>


          <div class="member_title">
            <h1>会員登録</h1>
            <h2>Member information<h2>
          </div>

          <h2 class="">会員登録確認</h2>

          <div class="form_conf">
            <div>
              <dt>氏名</dt>
              <dd><?php echo $username; ?></dd>
            </div>

            <div>
              <dt>氏名（かな）</dt>
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
              <dt>メールアドレス</dt>
              <dd><?php echo $mail; ?></dd>
            </div>

            <div>
              <dt>パスワード</dt>
              <dd><?php echo str_repeat("*", mb_strlen($pass, "UTF8")); ?></dd>
            </div>
          </div>

        </dl>

        <div id="b-submit">
          <input type="button" onclick="history.back()" value="戻る">
          <input type="submit" value="完了>" name="signup_last">
        </div>

      </form>
    </section>


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