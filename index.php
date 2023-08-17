<?php
session_start();
if(isset($_SESSION['user']))header('Location: ./view/dashboard.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Login</title>
</head>
<body>
    <span id="message"></span>
    <form id="createUser-form">
        <span>create user form</span>
        <input id="createUser-name" type="text" placeholder="name">
        <input id="createUser-email" type="text"placeholder="email">
        <input id="createUser-password" type="password" placeholder="password">
        <input id="createUser-btn" type="submit" value="send">
    </form>

    <form id="loginUser-form">
        <span>login user form</span>
        <input id="loginUser-email" type="text"placeholder="email">
        <input id="loginUser-password" type="password" placeholder="password">
        <input id="loginUser-btn" type="submit" value="send">
    </form>

    <script src="./js/createUser.js"></script>
    <script src="./js/loginUser.js"></script>
</body>
</html>