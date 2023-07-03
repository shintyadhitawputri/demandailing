<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    
    if ($username == "admin" && $password == "123admin") {
        $_SESSION["username"] = $username;
        header("Location: sysadmin.php");
        exit;
    } else {
        $error = "Login failed. Please try again.";
    }
}
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h2>LOGIN</h2>
        <?php if (isset($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
        <?php } ?>
        <form method="post" action="login.php">
          <div class="input-box">
            <input type="text" name="username" placeholder="Username" required>
          </div>
          <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <div class="input-box button">
            <input type="submit" name="login" value="Login"/>
          </div>
        </form>
    </div>

</body>
</html>