<?php
//用mysqli_connect("MySQL主機名稱","使用者名稱","密碼","資料庫名稱")連接localhost 的php_gem資料庫
//取得資料庫資料後存入變數$dbConnection
$dbConnection = mysqli_connect("localhost","root","","php_gem");

//將資料庫文字編碼設為utf-8
mysqli_set_charset($dbConnection, "utf8");

//檢查連線是否成功
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " .mysqli_connect_error();
    exit();
}
else
{
    //echo "連線成功";
}



?>