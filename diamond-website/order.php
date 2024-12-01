<?php include 'header.php'; ?>

<form action="./functions.php?op=createOrder" method="post">
<!--
action: 告訴程式表單送出後 要將表單送到functions.php處理
method: 分為get,post，
   。get，是網頁網址後方的變數，用於請求一些比較公開的資料
   。post，稍微隱蔽一些，大部分用於傳送表單資料
-->
<!--測試-->
<!-- 添加一个隐藏的输入字段来传递 "op" 参数 -->
<input type="hidden" name="op" value="createOrder">

  <label for="gem_name">預定產品名稱 </label>
  <input type="hidden" id="gem_id" name="gem_id" value="<?php echo $_GET['gem_id'];?>">
  <h2><?php echo $gems[$_GET['gem_id']-1]['name'];?></h2>

  <label for="name">你的稱呼:</label>
  <input type="text" id="name" name="name"><br/>

  <label for="email">你的電郵:</label>
  <input type="email" id="email" name="email" require><br/>

  <label for="quantity">購買數量:</label>
  <input type="number" id="quantity" name="quantity" min="1" value="1">
  
  <br>
  <input class="buyBtn" type="submit" value="下單預定">
</form> 

<?php include 'footer.php';?>

