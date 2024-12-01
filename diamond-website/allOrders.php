<!--全部訂單頁面-->
<?php include('header.php'); 
        if(!isset($_SESSION['email'])){
            header("Location: ./login.php");
        }
?>
<h1>收到的訂單</h1>

<?php
//拿訪客的訂單資料
$orderData = file_get_contents('data.csv');
$orders = str_getcsv($orderData, "\r\n");

foreach($orders as $order){
    //echo $order.'<br>';

    //拆解每一單的欄位資料
    $singleorder = explode(",",$order);
    
    //var_dump() 函数会将变量的类型和值输出到页面上，通常用于调试或检查变量的值。它输出的信息包括变量的数据类型、长度（对于字符串和数组）、以及实际的值。
    //確認資料可以完整印出
    //var_dump($singleorder);
    //echo "<br>";

    echo '<div class="order"><p>';
    echo '客戶名稱 :'.$singleorder[1].'<br/>';
    echo '客戶信箱 :'.$singleorder[2].'<br/>';
    echo '想訂購 :'.$gems[$singleorder[0]-1]['name'].'';
    echo '數量 :'.$singleorder[3].'<br/>';
    echo '訂購時間 : '.$singleorder[4].'<br/>';

    echo '</p></div>';
}
?>


<?php include('footer.php'); ?>