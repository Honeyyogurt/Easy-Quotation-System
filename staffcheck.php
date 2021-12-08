<?php

require_once "config.php";


// 設置一個空陣列來放資料
$datas = array();
// sql語法存在變數中
$sql = "SELECT `id`,`name`, `price`, `quantity`, `username` FROM `products` AS userprice  ";

// 用mysqli_query方法執行(sql語法)將結果存在變數中
$result = mysqli_query($link,$sql);
// 如果有資料
if ($result) {
    // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
    if (mysqli_num_rows($result)>0) {
        // 取得大於0代表有資料
        // while迴圈會根據資料數量，決定跑的次數
        // mysqli_fetch_assoc方法可取得一筆值
        while ($row = mysqli_fetch_assoc($result)) {
            // 每跑一次迴圈就抓一筆值，最後放進data陣列中
            $datas[] = $row;
        }
    }
    // 釋放資料庫查到的記憶體
    mysqli_free_result($result);
}
else {
    echo "{$sql} 語法執行失敗: " . mysqli_error($link);
}
// 處理完後印出資料
if(!empty($result)){
    // 如果結果不為空，就利用print_r方法印出資料
    echo "目前報價資訊如下:";
}
else {
    // 為空表示沒資料
    echo "查無資料";
}
?>
<?php if(!empty($datas)): ?>
<ul>
<!-- 資料 as key(下標) => row(資料的row) -->
<?php foreach ($datas as $key => $row) :?>
<li>
第<?php echo($key +1 ); ?> 筆資料，<?php echo $row['username']; ?>，想要購買 <?php echo $row['name']; ?>，數量  <?php echo $row['quantity']; ?>
，價格 <?php
  if(!empty($row['price'])){
    echo $row['price'];
  }
  else {
    echo '
      <form method="post" action="staffupdate.php">
      <input type="number" name="price">
      <input type="number" name="id" value="'.$row['id'].'" style="display:none;">
      <input type="submit" value="送出">
      </form>';
    }
    ?>
<?php// echo $row['id']?>
</li>
<?php endforeach; ?>
</ul>
<?php else:  ?>
查無資料
<?php endif; ?>
</div>

<?php mysqli_close($link); ?>

 <!doctype html>

 <html lang="zh-Hant-TW">

 <body>
 <ul>
  <a href="staffcheck.php">重新整理</a>
  <a href="logout.php">logout</a>
  </ul>
 </body>
