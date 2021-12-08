<?php
session_start();

require_once 'config.php';

?>
<?php
$price = $_REQUEST["price"];
$id =  $_REQUEST["id"];
?>

<h3>更新結果</h3>

<?php
// sql語法存在變數中
$sql = "UPDATE  `products` SET `price` = $price WHERE `id`= $id;";
// 用mysqli_query方法執行(sql語法)將結果存在變數中
$result = mysqli_query($link,$sql);

// 如果有異動到資料庫數量(更新資料庫)
if (mysqli_affected_rows($link)>0) {
echo "資料已更新";
}
elseif(mysqli_affected_rows($link)==0) {
    echo "無資料更新";
}
else {
    echo "{$sql} 語法執行失敗" . mysqli_error($link);
}
 mysqli_close($link);

 header("location: staffcheck.php");
 exit;
 ?>
