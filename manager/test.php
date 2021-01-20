<?php
    require '../common/common.php';

    try {
        $dbh = connect();
    } catch (PDOException $e) {
        $msg = $e->getMessage();
    }

    $name = $_POST['name'];
    $year = $_POST['year'];
    $month = $_POST['month'];
    $data = $year . $month;
    if ($name === "tab1") {
        $sql = 'SELECT * FROM sale_tbl WHERE sale_date>=' . $data . '01 AND sale_date<=' . $data . '31';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $member = $stmt->fetch();
        

        ?>
        <table>
            <tr>
                <th>No</th>
                <th>売上名称</th>
                <th>売上金額</th>
                <th>入力日付</th>
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
            <?php echo '<br>'; ?>
                    <?php } ?>
        </table>

        <?php
        }else if ($name === "tab2") {

          
        $sql = 'SELECT * FROM cost_tbl WHERE cost_date>=' . $data . '01 AND cost_date<=' . $data . '31';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $member = $stmt->fetch();
        

        ?>
        <table>
            <tr>
                <th>No</th>
                <th>売上名称</th>
                <th>売上金額</th>
                <th>入力日付</th>
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
            <?php echo '<br>'; ?>
                    <?php } ?>
        </table>

        <?php
        }
        ?>