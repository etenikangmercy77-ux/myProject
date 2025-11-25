<?php

session_start();
require_once 'config.php';


//check if the reigister button has been clicked
if(isset($_POST['register'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
    if($checkEmail->nun_rows > 0){
        $_SESSION['register_error'] = "Email is already registered";
        $_SESSION['active_form'] = 'register';

    }else{
        $conn->query("INSERT INTO users(fullname, email, role, password) VALUES ('$fullname', '$email', '$role', '$password')");
    }
    header("Location: index.php"); //redirct user to the landing page
    exist();
}






?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        p
    </div>
</body>
</html>
