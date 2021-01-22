<?php

    require '../common/common.php';

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
    
    for ($i = 0; $i <= 12; $i++) {
    
        // 各月売上総額計算
        $sql = 'SELECT * FROM sale_tbl WHERE sale_date>=' . $year . $i . '01 AND sale_date<=' $year . $i . '31';
        $stmt = $dbh->query($sql);
            
        foreach ($stmt as $row){
            $uriage =+ $row;
        }
        
        // 各月経費総額計算
        $sql = 'SELECT * FROM cost_tbl WHERE cost_date>=' . $year . $i . '01 AND cost_date<=' . $year . $i . '31';
        $stmt = $dbh->query($sql);
            
        foreach ($stmt as $row){
            $keihi =+ $row;
        }
        
        // 利益計算
        $rieki = $uriage - $keihi;
        
?>
      
        <tr>
            <td><?php echo $rieki . "円" ; ?></td>
            <td><?php echo $year . "年" . $i . "月" ; ?></td>
        </tr>
        <br />
        
<?php
    }
?>
</table>