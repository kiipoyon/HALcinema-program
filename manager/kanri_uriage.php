<?php
    require '../common/common.php';

    try {
        $dbh = connect();
    } catch (PDOException $e) {
        $msg = $e->getMessage();
    }

    $sql = "SELECT COUNT(*) AS num FROM movie_tbl";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetch();

    $num = $count["num"];
    for ($i = 0; $i <= $num; $i++){

        $sql = "SELECT * FROM movie_tbl WHERE movie_no = :movie_no";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':movie_no', $i);
        $stmt->execute();
        $movie = $stmt->fetch();

        $MovieNo[$i] = $movie["title"];

    }

    $JsonNum = json_encode($num);
    $JsonMovie = json_encode($MovieNo);

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
    
    <!-- chartist.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.css" integrity="sha512-GQSxWe9Cj4o4EduO7zO9HjULmD4olIjiQqZ7VJuwBxZlkWaUFGCxRkn39jYnD2xZBtEilm0m4WBG7YEmQuMs5Q==" crossorigin="anonymous" />
    <!-- chartist css end -->

    <link rel="stylesheet" href="../css/common/common.css"/>

    <link rel="stylesheet" href="../css/common/kanri_common.css">
    <link rel="stylesheet" href="../css/kanri_uriage.css">
    <!--load css end-->

    <title>売上情報管理 || HALシネマ</title>
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
<!-- nav end -->

<!-- main -->
<main class="main_wrap">
    <h4>売上情報管理</h4>
    <section class="box">
        <div class="tab_container">
            <input id="tab1" type="radio" name="tab_item" checked>
            <label class="tab_item" for="tab1">売上情報</label>
            <input id="tab2" type="radio" name="tab_item">
            <label class="tab_item" for="tab2">経費情報</label>
            <input id="tab3" type="radio" name="tab_item">
            <label class="tab_item" for="tab3">利益情報</label>
            <input id="tab4" type="radio" name="tab_item">
            <label class="tab_item" for="tab4">グラフ</label>
            <div class="tab_content" id="tab1_content">
              <div class="tab_content_description">
                <select required class="year">
                    <option value="" hidden>2020年</option>
                    <option value="1">2019年</option>
                    <option value="2">2018年</option>
                </select>
                <select required class="month">
                    <option value="" hidden>1月</option>
                    <option value="1">2月</option>
                    <option value="2">3月</option>
                    <option value="3">4月</option>
                    <option value="4">5月</option>
                    <option value="5">6月</option>
                    <option value="6">7月</option>
                    <option value="7">8月</option>
                    <option value="8">9月</option>
                    <option value="9">10月</option>
                    <option value="10">11月</option>
                    <option value="11">12月</option>
                </select>
                <table>
                    <tr>
                        <th>No</th>
                        <th>売上名称</th>
                        <th>売上金額</th>
                        <th>入力日付</th>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>チケット購入</td>
                        <td>1,000 円</td>
                        <td>20200801</td>
                    </tr>
                    <tr>
                        <td>0002</td>
                        <td>チケット購入</td>
                        <td>1,000 円</td>
                        <td>20200801</td>
                    </tr>
                    <tr>
                        <td>0003</td>
                        <td>チケット購入</td>
                        <td>1,000 円</td>
                        <td>20200801</td>
                    </tr>
                    <tr>
                        <td>0004</td>
                        <td>チケット購入</td>
                        <td>1,000 円</td>
                        <td>20200801</td>
                    </tr>
                    <tr>
                        <td>0005</td>
                        <td>チケット購入</td>
                        <td>1,000 円</td>
                        <td>20200801</td>
                    </tr>
                    <tr>
                        <td>0006</td>
                        <td>チケット購入</td>
                        <td>1,000 円</td>
                        <td>20200801</td>
                    </tr>
                    <tr>
                        <td>0007</td>
                        <td>チケット購入</td>
                        <td>1,000 円</td>
                        <td>20200801</td>
                    </tr>
                </table>
              </div>
            </div>
            <div class="tab_content" id="tab2_content">
              <div class="tab_content_description">
                <p class="c-txtsp">経費情報</p>
              </div>
            </div>
            <div class="tab_content" id="tab3_content">
              <div class="tab_content_description">
                <p class="c-txtsp">利益情報</p>
              </div>
            </div>
            <div class="tab_content" id="tab4_content">
              <div class="tab_content_description">
                <div class="ct-chart"></div>

              </div>
            </div>
           
          </div>
    </section>

</main>
<!-- main end -->

<!-- load js -->

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<!-- jquery end -->

<!-- bootstrap js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
<!-- bootstrap js end -->

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/b7fcd44df6.js" crossorigin="anonymous"></script>
<!-- fontawesome end -->

<!-- chartist js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.16.0/d3.min.js" integrity="sha512-FHsFVKQ/T1KWJDGSbrUhTJyS1ph3eRrxI228ND0EGaEp6v4a/vGwPWd3Dtd/+9cI7ccofZvl/wulICEurHN1pg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.js" integrity="sha512-+IpCthlNahOuERYUSnKFjzjdKXIbJ/7Dd6xvUp+7bEw0Jp2dg6tluyxLs+zq9BMzZgrLv8886T4cBSqnKiVgUw==" crossorigin="anonymous"></script>
<script>
var chart = c3.generate({
    bindto: '.ct-chart',
    data: {
      columns: [
        ['data1', 30, 200, 100, 400, 150, 250],
        ['data2', 50, 20, 10, 40, 15, 25]
      ]
    }
});
</script>
<!-- chartist js end -->
<script>
var movie = [];
let i = 0;
for( const element of <?php echo $JsonMovie; ?> ){
    movie[i] = element;
    i++;
}

console.log(movie[1]);
</script>
<!-- load js end -->

</body>
</html>
