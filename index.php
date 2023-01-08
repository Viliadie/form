<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization and registration</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<?
$url = $_SERVER['REQUEST_URI'];
//echo $url;
?>
    <!-- Форма авторизации -->

    <form>
        <div class="form_img">
            <img src="./assets/img/bg.png" alt="">
            <div class="form_title">Lorem Ipsum is simply</div>
            <div class="form_subtitle">Lorem Ipsum is simply </div>
        </div>
        <div class="form_inner">
            <div class="form_inner_title">Welcome to lorem..!</div>
            <div class="form_btns">
                <a href="/" class="btn_log <?echo ($url == "/" || $url == "/index.php" ) ? 'active':'';?>">Login</a>
                <a href="/register.php" class="btn_reg">Register</a>
            </div>
            <div class="form_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="form_wrapper">
                <label>User name</label>
                <input type="text" name="login" placeholder="Enter your User name">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your Password" autocomplete="off">
                <p>Forgot Password ?</p>
                <div class="btn_wrapper">
                    <button type="submit" class="login_btn">Login</button>
                </div>
                <p class="msg none">Lorem ipsum dolor sit amet.</p>
            </div>

        </div>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>