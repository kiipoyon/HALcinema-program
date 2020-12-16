<?php
require 'common/common.php';
$pdo = connect();

$mail = $_SESSION['mail'];

$errormessage = "";

if (isset($_POST['syusei'])) {

  if (
    !empty($_POST['username']) && !empty($_POST['name_read']) && !empty($_POST['year']) && !empty($_POST['month'])
    && !empty($_POST['day']) && !empty($_POST['tel']) && !empty($_POST['new_mail'])
    && !empty($_POST['pass'])
  ) {

    //入力された値を取得
    $username = $_POST['username'];
    $name_read = $_POST['name_read'];

    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];

    $gender = $_POST['gender'];
    $tel = $_POST['tel'];

    $new_mail = $_POST['new_mail'];

    $pass = $_POST['pass'];



    //セッション保存
    $_SESSION['username'] = $username;
    $_SESSION['name_read'] = $name_read;

    $_SESSION['year'] = $year;
    $_SESSION['month'] = $month;
    $_SESSION['day'] = $day;

    $_SESSION['gender'] = $gender;
    $_SESSION['tel'] = $tel;

    $_SESSION['new_mail'] = $new_mail;
    $_SESSION['pass'] = $pass;


    header('location:change_conf.php');
  } else {
    $errormessage = "必須項目をすべて入力してください。";
  }
} else {
  //入力された値クリア
  $nameuser = "";
  $name_read = "";

  $year = "";
  $month = "";
  $day = "";

  $gender = "";
  $tel = "";

  $new_mail = "";
  $pass = "";
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
  <link rel="stylesheet" href="css/change_user.css">
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

    <div style="color:red;"><?php echo htmlspecialchars($errormessage, ENT_QUOTES); ?></div>
    <section>
      <form method="POST" action="">

        <dl>

          <div class="member_title">
            <h1>会員情報変更</h1>
            <h2>Member information<h2>
          </div>

          <dt class="regist">氏名</dt>
          <dd><input type="text" name="username"></dd>

          <dt class="regist">フリガナ</dt>
          <dd><input type="text" name="name_read"></dd>

          <dt class="regist">生年月日</dt>
          <dd>
            西暦 <select name="year" class="day">
              <option value="">----</option>
              <option value="1900">1900</option>
              <option value="1901">1901</option>
              <option value="1902">1902</option>
              <option value="1903">1903</option>
              <option value="1904">1904</option>
              <option value="1905">1905</option>
              <option value="1906">1906</option>
              <option value="1907">1907</option>
              <option value="1908">1908</option>
              <option value="1909">1909</option>
              <option value="1910">1910</option>
              <option value="1911">1911</option>
              <option value="1912">1912</option>
              <option value="1913">1913</option>
              <option value="1914">1914</option>
              <option value="1915">1915</option>
              <option value="1916">1916</option>
              <option value="1917">1917</option>
              <option value="1918">1918</option>
              <option value="1919">1919</option>
              <option value="1920">1920</option>
              <option value="1921">1921</option>
              <option value="1922">1922</option>
              <option value="1923">1923</option>
              <option value="1924">1924</option>
              <option value="1925">1925</option>
              <option value="1926">1926</option>
              <option value="1927">1927</option>
              <option value="1928">1928</option>
              <option value="1929">1929</option>
              <option value="1930">1930</option>
              <option value="1931">1931</option>
              <option value="1932">1932</option>
              <option value="1933">1933</option>
              <option value="1934">1934</option>
              <option value="1935">1935</option>
              <option value="1936">1936</option>
              <option value="1937">1937</option>
              <option value="1938">1938</option>
              <option value="1939">1939</option>
              <option value="1940">1940</option>
              <option value="1941">1941</option>
              <option value="1942">1942</option>
              <option value="1943">1943</option>
              <option value="1944">1944</option>
              <option value="1945">1945</option>
              <option value="1946">1946</option>
              <option value="1947">1947</option>
              <option value="1948">1948</option>
              <option value="1949">1949</option>
              <option value="1950">1950</option>
              <option value="1951">1951</option>
              <option value="1952">1952</option>
              <option value="1953">1953</option>
              <option value="1954">1954</option>
              <option value="1955">1955</option>
              <option value="1956">1956</option>
              <option value="1957">1957</option>
              <option value="1958">1958</option>
              <option value="1959">1959</option>
              <option value="1960">1960</option>
              <option value="1961">1961</option>
              <option value="1962">1962</option>
              <option value="1963">1963</option>
              <option value="1964">1964</option>
              <option value="1965">1965</option>
              <option value="1966">1966</option>
              <option value="1967">1967</option>
              <option value="1968">1968</option>
              <option value="1969">1969</option>
              <option value="1970">1970</option>
              <option value="1971">1971</option>
              <option value="1972">1972</option>
              <option value="1973">1973</option>
              <option value="1974">1974</option>
              <option value="1975">1975</option>
              <option value="1976">1976</option>
              <option value="1977">1977</option>
              <option value="1978">1978</option>
              <option value="1979">1979</option>
              <option value="1980">1980</option>
              <option value="1981">1981</option>
              <option value="1982">1982</option>
              <option value="1983">1983</option>
              <option value="1984">1984</option>
              <option value="1985">1985</option>
              <option value="1986">1986</option>
              <option value="1987">1987</option>
              <option value="1988">1988</option>
              <option value="1989">1989</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
            </select> 年
            <select name="month" class="day">
              <option value="">----</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select> 月
            <select name="day" class="day">
              <option value="">----</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select> 日生
          </dd>

          <dt>性別</dt>
          <dd>
            <input type="radio" name="gender" id="gen_01" value="0" checked>
            <label class="radio_label" for="gen_01"> 未選択</label>
            <input type="radio" name="gender" id="gen_02" value="1">
            <label class="radio_label" for="gen_02"> 男性</label>
            <input type="radio" name="gender" id="gen_03" value="2">
            <label class="radio_label" for="gen_03"> 女性</label>
          </dd>

          <dt class="regist">電話番号</dt>
          <dd><input type="number" name="tel"></dd>

          <dt>メールアドレス</dt>
          <dd><input type="text" name="new_mail"></dd>

          <dt>パスワード</dt>
          <dd><input type="password" name="pass"></dd>
        </dl>

        <br>

        <div class="b-submit">
          <input type="reset" value="クリア" class="button">
          <input type="submit" value="次へ" class="button" name="syusei">
        </div>

      </form>
    </section>

    <br>

    <a href="mypage.php">会員情報変更トップに戻る</a>


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