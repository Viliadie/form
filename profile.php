<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
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

    <!-- Профиль -->

    <form id="register">
        <div class="form_img">
            <img src="./assets/img/bg.png" alt="">
            <div class="form_title">Lorem Ipsum is simply</div>
            <div class="form_subtitle">Lorem Ipsum is simply </div>
        </div>
        <div class="form_inner">
            <div class="form_inner_title">Welcome to lorem..!</div>
            <div class="form_desc">
                <h2><?= $_SESSION['user']['email'] ?></h2>
            </div>
            <div class="form_wrapper">
                <div class="btn_wrapper">
                    <a href="vendor/logout.php" type="submit" class="logout_btn">Logout</a>
                </div>
            </div>
        </div>
    </form>


</body>

</html>