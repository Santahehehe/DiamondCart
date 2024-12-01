<?php include('header.php'); ?>    
    <h1>寶石預定</h1>
    <link rel="stylesheet" href="./css/css.css">
    <h2><?php echo date('n'); ?>月優惠</h2>

    <?php
    //顯示貨品
    //mysqli_query("連接的資料庫資料","SQL查詢程式碼","MYSQLI_USE_RESULT 或 MYSQLI_STORE_RESULT(不填則默認為MYSQLI_STORE_RESULT)")
    //$gemQ為$dbConnection執行SELECT * FROM gem的查詢結果集
    $gemQ = mysqli_query($dbConnection, "SELECT * FROM gem",MYSQLI_STORE_RESULT);
    while($gem = $gemQ -> fetch_assoc()){
        //自己寫的
        /*
        echo "產品名稱:".$gem['name'].'<br>';
        echo "價格:".$gem['price'].'<br>';
        //echo $gem['image'].'<br>';
        echo "<img src='./images/{$gem['image']}' alt='找不到'><br>";
        echo '<a href="./order.php?gem_id='.$gem['gem_id'].'" class="buyBtn">預定'.$gem['name'].'</a><br>';
        $directory = "./images/";
        $file = $gem['image'];
        echo "<img src='./images/$file' alt='找不到'><br>";
        */
        echo '<div class="col">
        <img src="./images/'.$gem['image'].'" />
        <p>
        名稱: '.$gem['name'].'<br>
        價格: $'.$gem['price'].'<br>
        <a href="./order.php?gem_id='.$gem['gem_id'].'" class="buyBtn">預定'.$gem['name'].'</a><br>
        </div>';
    }

    

    /*從stock.php拿產品資料
    foreach($gems as $key => $gem)
    {
        echo '<img src="./images/'.$gem['image'].'" />
        <p>
        名稱:'.$gem['name'].'<br>
        價格: $'.$gem['price'].'<br>
        <a href="./order.php?gem_id='.$gem['gem_id'].'" class="buyBtn">預定'.$gem['name'].'</a><br>';
    }
    */

    ?>
<?php include('footer.php'); ?>