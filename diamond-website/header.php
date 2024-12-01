<?php 
    //課30:從stock.php改由資料庫拿資料
    include 'stock.php';
    include 'dbConnect.php';
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/css.css">
    <title>寶石預定</title>
</head>
<body>

<nav>
    <ul class='clientMenu'>
        <li><a href="./index.php">首頁</a></li>
        <li><a href="./about.php">關於</a></li>
    </ul>
    <ul class='clientMenu'>
    <?php
        //如果$_SESSION有值，顯示所有訂單和登出選項
        if(isset($_SESSION['email'])){
            echo $_SESSION['email'].'你好';
            echo '<li><a href="./allOrders.php">所有訂單</a></li>';
            echo '<li><a href="./functions.php?op=logout">登出</a></li>';
        } 
        //如果$_SESSION沒有值，要顯示的內容
        else{
            echo '<li><a href="./login.php">職員登入</a></li>';
        }
    ?>
    <!--
        <li><a href="./allOrders.php">所有訂單</a></li>
        <li><a href="./functions.php?op=logout">登出</a></li>
        <li><a href="./login.php">職員登入</a></li>
    -->
    </ul>
</nav>