<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- load css -->
  <link rel="stylesheet" href="css/common/reset.css">

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"
    integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  <!-- bootstrap css end -->
  <!-- bootstrap css end -->

  <link rel="stylesheet" href="css/common/common.css">

  <link rel="stylesheet" href="css/member_login.css">
  <!--load css end-->

  <title>ログイン || HALシネマ</title>
</head>

<body>

  <!-- header -->
  <header id="header">

    <!-- logo -->
    <div>
      <img src="images/common/logo.png" alt="HALcinema-logo">
    </div>
    <!-- logo end -->

    <!-- nav -->
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
          <a href="ticket.php">
            <img src="./images/common/TICKETS.png" alt="">
            <h1>チケット購入/照会</h1>
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

    <article>

      <section class="contents_box">
        <div class="contents__title">
          <h1>ログイン</h1>
          <h2>LOGIN</h2>
        </div>
        <ul class="contents_sub">
          <li><a href="#">ログイン方法</a></li>
          <li><a href="#">よくあるご質問</a></li>
        </ul>
      </section>


      <!-- 会員の方ログイン -->
      <article class="ticket">
        <form action="member_info.php" method="post" onsubmit="return check()">
          <section class="login_area">
            <h3>・会員の方</h3>
            <div class="form_area">
              <label>メールアドレス</label>
              <input id="e-mail" type="email" placeholder="info@sample.com" name="mail" size="50">
            </div>

            <div class="form_area">
              <label>パスワード</label>
              <input id="password" type="password" placeholder="半角英数字8〜10文字" name="pass" size="10">
              <a href="member_pass_rese.html">※パスワードをお忘れの方はこちら</a>
            </div>

            <?php if(isset($_GET["err"])){ ?>
              <p id="error-message">認証失敗！！</p>
            <?php }else{ ?>
              <p id="error-message"></p>
            <?php } ?>

            <div class="login_btn">
              <input type="submit" name="submit_login" value="ログイン >" class="next_btn">
            </div>

          </section>
        </form>


        <section class="ippan_area">
          <h3>・一般の方</h3>
          <div class="ippan_sec">
            <p>HALシネマの会員になることで、以下のサービスを受けることができます。</p>
            <ul>
              <li>・6回みたら一回無料</li>
              <li>・会員限定の特別情報</li>
              <li>・その他嬉しい特典が満載！</li>
            </ul>
          </div>

          <div class="ippan_btn">

            <div class="login_btn">
              <input type="button" onclick="location.href='./member.php'" value=" 新規会員登録はこちら " class="next_btn">
            </div>

          </div>

        </section>
      </article>
    </article>

    <div id="page__top">
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <!-- jquery end -->

  <script>
      function check() {
        // 未入力なら「パスワードを入力してください」と表示
        // ８文字未満なら「８文字以上で入力してください」と表示
        
        try { 
          const mail = document.getElementById("e-mail");
          const password = document.getElementById("password");

          if (!mail.value) {
            throw new Error("メールアドレスを入力してください"); //エラーを投げる
          }

          if (!password.value) {
            throw new Error("パスワードを入力してください"); //エラーを投げる
          }

          if (password.value.length < 8 || password.value.length > 20) {
            throw new Error("８文字以上20文字以下で入力してください"); //エラーを投げる
          }
          
        } catch(err){ 
          const errorMessage = document.getElementById("error-message");
          errorMessage.innerHTML = err.message;
          return false;
        }

        return true;

      };
  </script>

  <!-- bootstrap js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"
    integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous">
  </script>
  <!-- bootstrap js end -->

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/b7fcd44df6.js" crossorigin="anonymous"></script>
  <!-- fontawesome end -->

  <script src="js/pagetop.js"></script>

  <!-- load js end -->

</body>

</html>
