<?php
session_start();
include('./connect.php');
$jsonPayload = file_get_contents('php://input');
$form = json_decode($jsonPayload);
$email = $form->email;
$password = hash('sha512',$form->password);

$select = mysqli_query($conn,"SELECT id, name, email, password FROM user WHERE email= '$email' AND password = '$password'");
if($select->num_rows > 0){
    $data =  [];
    while($mysqliData = mysqli_fetch_assoc($select)){
        $_SESSION['user'] = $mysqliData;
    }
    http_response_code(200);
}else{
    http_response_code(400);
    $message = ['message'=>'E-mail or password invalid'];
    echo json_encode($message);
}
