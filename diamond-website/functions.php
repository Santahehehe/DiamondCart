<!--登出頁面-->
<?php
//0407
include('dbConnect.php');
//0407



if($_GET['op']=='createOrder')
{
    createOrder();
}
if($_GET['op']=='checkLogin')
{
    checkLogin($_POST['email'],$_POST['password']);

}
if($_GET['op']=='logout')
{
    session_start();
    session_destroy();
    header("Location: ./index.php");
}

function createOrder(){

    global $dbConnection;
    /*
    echo $_POST['gem_id']."<br>";
    echo $_POST['name']."<br>";
    echo $_POST['email']."<br>";
    echo $_POST['quantity']."<br>";
    echo date('Y-m-d H:i:s')."<br>";
    */

    //儲存訂單

    /*用純文字檔案儲存訂單
    $myfile = fopen('data.csv',"a") or die("未能開啟檔案");
    $data = $_POST['gem_id'].','.$_POST['name'].','.$_POST['email'].','.$_POST['quantity'].','.date('Y-m-d H:i:s')."\r\n";
    fwrite($myfile,$data);
    fclose($myfile);
    */

    //轉變頁面
    header("Location: ./order-completed.php");
}

function checkLogin($email, $password)
{
    global $dbConnection;
    
    //0407 把資料表的查詢資料存入$staffQ
    $sql = "SELECT * FROM staff WHERE email = '$email'";
    $staffQ = $dbConnection->query($sql);
    $result = $staffQ-> fetch_assoc();
    if($result){
        if($result['password']==$password){
            session_start();
            $_SESSION['email'] = $_POST['email']; 
            echo $_SESSION['email'];
            header("Location: ./index.php");
        }
        else{
            header("Location: ./login.php?error=wrong_password&email=$email");
        }
    }else{
        header("Location: ./login.php?error=no_user");
    }
    //0407 把資料表的查詢資料存入$staffQ

    /*把密碼改為用資料庫驗證
     $staffEmail = "hello@gmail.com";
     $staffPassword = "12345";
     if($email==$staffEmail && $password==$staffPassword)
    {
         //echo "密碼輸入正確";
         session_start();
         $_SESSION['email'] = $_POST['email']; 
         //echo $_SESSION['email'];
         //如果帳密正確跳轉到allOrders.php
         header("Location: ./allOrders.php");
     }
     else
     {
         //echo "密碼輸入錯誤";
         //如果帳密錯誤直接跳轉回登入頁面
         header("Location: ./login.php");
     }
     */
}

?>