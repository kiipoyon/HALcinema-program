<?php

    require '../../common/common.php';

    try {
        $dbh = connect();
    } catch (PDOException $e) {
        $msg = $e->getMessage();
    }
    
    $year = $_POST['year'];
        
?>
          
<table>
    <tr>
        <th>利益金額</th>
        <th>利益年月</th>
    </tr>
        
<?php
    
    for ($i = 1; $i <= 12; $i++) {
    
        $uriage = 0;
        $keihi = 0;
        
        $sales = array();
        $cost = array();

        // 各月売上総額計算
        if ($i <= 9) {
            $sql = 'SELECT sale_money FROM sale_tbl WHERE sale_date>=' . $year . '0' . $i . '01 AND sale_date<=' . $year . '0' . $i . '31';
        }else {
            $sql = 'SELECT sale_money FROM sale_tbl WHERE sale_date>=' . $year . $i . '01 AND sale_date<=' . $year . $i . '31';
        }
        $stmt = $dbh->query($sql);        
        
        foreach ($stmt as $row){
            $sales[] = $row["sale_money"];
        }
        
        $uriage = array_sum($sales);
        


        // 各月経費総額計算
        if ($i <= 9) {
            $sql = 'SELECT cost_money FROM cost_tbl WHERE cost_date>=' . $year . '0' . $i . '01 AND cost_date<=' . $year . '0' . $i . '31';
        }else {
            $sql = 'SELECT * FROM cost_tbl WHERE cost_date>=' . $year . $i . '01 AND cost_date<=' . $year . $i . '31';
        }
        $stmt = $dbh->query($sql);
            
        foreach ($stmt as $row){
            $cost[] = $row["cost_money"];
        }
        
        $keihi = array_sum($cost);

        // 利益計算
        $rieki = $uriage - $keihi;
        
?>
      
        <tr>
            <td class="month<?php echo $i?>" ><?php echo $rieki ; ?></td>
            <td><?php echo $year . "年" . $i . "月" ; ?></td>
        </tr>
        
<?php
    }
?>
</table>