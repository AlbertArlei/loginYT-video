<?php
include('./connect.php');
$jsonPayload = file_get_contents('php://input');
$form = json_decode($jsonPayload);
$name = $form->name;
$email = $form->email;
$password = hash('sha512',$form->password);

$select = mysqli_query($conn,"SELECT id FROM user WHERE email= '$email'");
if($select->num_rows > 0){
    $message = ['message'=>'email in use'];
    echo json_encode($message);
}else{
    $insert = mysqli_query($conn, "INSERT INTO user (name, email, password) values ('$name', '$email', '$password')");
    $message = ['message'=>'sucess'];
    echo json_encode($message);
}

// header('Content-Type: application/json');
// echo $jsonPayload;