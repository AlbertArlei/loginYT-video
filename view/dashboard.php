<?php
session_start();
if(isset($_SESSION['user'])){
    $id = $_SESSION['user']['id'];
    $name = $_SESSION['user']['name'];
    $email = $_SESSION['user']['email'];
    $password = $_SESSION['user']['password'];
}else{
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div>
        <span><?php echo $id ?></span></br>
        <span><?php echo $name ?></span></br>
        <span><?php echo $password ?></span></br>
        <span><?php echo $email?></span></br>
    </div>
        <button id="logout">logout</button>
        <script src="../js/logout.js"></script>
</body>
</html>