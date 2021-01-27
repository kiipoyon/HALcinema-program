<?php
  require '../../common/common.php';

  try {
    $dbh = connect();
  } catch (PDOException $e) {
    $msg = $e->getMessage();
  }

  $year = $_POST['year'];
  $month = $_POST['month'];
  $data = $year . $month;
  $sql = 'SELECT * FROM sale_tbl WHERE sale_date>=' . $data . '01 AND sale_date<=' . $data . '31';
        
  ?>
    <table>
      <tr>
        <th>No</th>
        <th>入力日付</th>
        <th>売上名称</th>
        <th>売上金額</th>
      </tr>

  <?php
    $stmt = $dbh->query($sql);
      foreach ($stmt as $row){
  ?>
      <tr>
        <td>
          <?php echo $row['sale_no']?>
        </td>
        <td>
          <?php echo $row['sale_date']?>
        </td>
        <td>
            <?php echo $row['sale_name']?>
        </td>
        <td>
            <?php echo $row['sale_money']?>
        </td>
      </tr>
<?php } ?>
    </table>