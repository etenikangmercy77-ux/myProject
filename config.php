<?php

//connect to the database
$host='localhost';
$user = 'root';
$password = '';
$database = 'mmstores_db';


//establish a coonnection
$conn = new mysqli($host, $user, $password, $database);

//check for error after connection

if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}else{
    echo "connection succesful";
}





?>