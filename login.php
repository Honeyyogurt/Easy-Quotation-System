<?php
// Initialize the session
session_start();


if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    //header("location: welcome.php");
    exit;
}
elseif(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    //header("location: staffcheck.php");
    exit;
}

require_once "config.php";


// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            //session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            //header("location: welcome.php");
                        }
                        }
                        else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }

                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            // sql語法存在變數中
            $sql2 = "SELECT  `type` FROM `users` AS typecheck where `username` = '$_SESSION[username]';";
            $datas = array();
            // 用mysqli_query方法執行(sql語法)將結果存在變數中
            $result = mysqli_query($link,$sql2);

            if ($result) {
              // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
            if (mysqli_num_rows($result)>0 ) {
              // 取得大於0代表有資料
              // while迴圈會根據資料數量，決定跑的次數
              // mysqli_fetch_assoc方法可取得一筆值
              while ($row = mysqli_fetch_assoc($result)) {
                  // 每跑一次迴圈就抓一筆值，最後放進data陣列中
                  $datas[] = $row;
                  echo $datas[0]['type'];
                  if ($datas[0]['type'] == 'customer') {
                    header("location: welcome.php");
                  }
                  else {
                    header("location: staffcheck.php");
                  }
                }
            }
                    }
                // 釋放資料庫查到的記憶體
                mysqli_free_result($result);

            // Close statement
            mysqli_stmt_close($stmt);
        }


    // Close connection
    mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in theblank to login.</p>

        <?php
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account?<a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>
