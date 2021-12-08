<?php
require_once "config.php";
session_start();


// 設置一個空陣列來放資料
$datas = array();
echo $_SESSION['username'];
//echo $username;

// sql語法存在變數中
$sql = "SELECT `id`,`name`, `price`, `quantity`, `username` FROM `products` AS customerprice where `username` = '$_SESSION[username]';";

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
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
}
// 處理完後印出資料
if(!empty($result)){
    // 如果結果不為空，就利用print_r方法印出資料
    echo "你好，目前報價資訊如下:";
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
第<?php echo($key +1 ); ?> 筆資料，帳號:<?php echo $row['username']; ?>，想要購買 <?php echo $row['name']; ?>，數量  <?php echo $row['quantity']; ?>
，單價<?php
  if(!empty($row['price'])){
    echo $row['price'];
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
<div>
<a href="welcome.php" class="btn btn-danger ml-3">回上一頁</a>
</div>
<!-- 代表結束連線 -->
<?php mysqli_close($link);
?>
