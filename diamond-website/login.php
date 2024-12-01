<!--登入頁面-->
<?php include('header.php'); ?>
    <?php 
        if(isset($_GET['error']) && $_GET['error'] == 'no_user') {
        echo "<p>查無此人</p>";
        }
        if(isset($_GET['error']) && $_GET['error'] == 'wrong_password') {
            echo "<p>密碼錯誤</p>";

        }
    ?>
    <form action = "functions.php?op=checkLogin" method = "post">

        <label for="email">電郵:</label>
        <input type="email" id="email" name="email" value="<?php if(isset($_GET['error']) && $_GET['error'] == 'wrong_password'){echo $_GET['email'];} ?>" require><br>

        <label for="password">密碼:</label>
        <input type="password" id="password" name="password" min="1" max="5">

        <br>
        <input type="submit" value="登入">
    </form>

<?php include('footer.php'); ?>