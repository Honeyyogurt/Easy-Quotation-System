<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <div>
      <html>
      <head>
      <title>Products page</title>
      <div>
      請在下列商品下輸入想要購買的數量:
      </div>
      </head>
      <body>
      <form method="post" action="products.php">
      	Smart watch:<input type="number" name="watchquant">
      	Wallet:<input type="number" name="walletquant">
      	Headphone:<input type="number" name="headquant">
        Digital camera:<input type="number" name="cameraquant"><br><br>
      	<input type="submit" value="Submit"><br><br>
      </form>

      </body>
      </html>
    </div>
    <p>
        <a href="customercheck.php" class="btn btn-danger ml-3">查看價格</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
    </p>
</body>
</html>
