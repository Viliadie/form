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
<?
$url = $_SERVER['REQUEST_URI'];
//echo $url;
?>
<body>

    <!-- Форма регистрации -->

    <form id="register">
        <div class="form_img">
            <img src="./assets/img/bg.png" alt="">
            <div class="form_title">Lorem Ipsum is simply</div>
            <div class="form_subtitle">Lorem Ipsum is simply </div>
        </div>
        <div class="form_inner">
            <div class="form_inner_title">Welcome to lorem..!</div>
            <div class="form_btns">
                <a href="/" class="btn_log <? echo $url == "/" ? 'active' : ''; ?>">Login</a>
                <a href="/register.php" class="btn_reg <? echo $url == "/register.php" ? 'active' : ''; ?>">Register</a>
            </div>
            <div class="form_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="form_wrapper">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your Email Address">
                <label>User name</label>
                <input type="text" name="login" placeholder="Enter your User name">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your Password" autocomplete="off">
                <label>Confirm Password</label>
                <input type="password" name="password_confirm" placeholder="Confirm your Password" autocomplete="off">
                <div class="btn_wrapper">
                    <button type="submit" class="register_btn">Register</button>
                </div>
                <p class="msg_reg none">Lorem ipsum.</p>
            </div>
        </div>
    </form>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>