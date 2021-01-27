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
          
    $sql = 'SELECT * FROM cost_tbl WHERE cost_date>=' . $data . '01 AND cost_date<=' . $data . '31';

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
                <?php echo $row['cost_no']?>
            </td>
            <td>
                <?php echo $row['cost_date']?>
            </td>
            <td>
                <?php echo $row['cost_name']?>
            </td>
            <td>
                <?php echo $row['cost_money']?>
            </td>
        </tr>
<?php } ?>
    </table>