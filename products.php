
<?php
$watchquant = $_REQUEST["watchquant"];
$walletquant = $_REQUEST["walletquant"];
$headquant = $_REQUEST["headquant"];
$cameraquant = $_REQUEST["cameraquant"];

// Include config file
require_once "config.php";
require_once "welcome.php";


// Attempt insert query execution
$sql = "INSERT INTO products (name,price,quantity,username) VALUES ('Smart watch',NULL,".$watchquant.",'".$_SESSION["username"]."');";
mysqli_query($link, $sql);
$sql = "INSERT INTO products (name,price,quantity,username) VALUES ('Wallet',NULL,".$walletquant.",'".$_SESSION["username"]."');";
mysqli_query($link, $sql);
$sql = "INSERT INTO products (name,price,quantity,username) VALUES ('Headphones',NULL,".$headquant.",'".$_SESSION["username"]."');";
mysqli_query($link, $sql);
$sql = "INSERT INTO products (name,price,quantity,username) VALUES ('Digital Camera',NULL,".$cameraquant.",'".$_SESSION["username"]."');";
mysqli_query($link, $sql);

echo "報價成功!";

// Close connection
mysqli_close($link);

?>
