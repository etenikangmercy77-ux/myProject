<?php

//check if a user is logged in with the email before that user can access this page

session_start();

if(!isset($_SESSION['email'])){
    header("Location: index.php");
    exit();
}
?>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body style="background: #fff;">


<div class="box">
        <h1>Welcome,<?php echo $_SESSION['fullname'];?></h1>
        <p>This is an <span>admin </span>page</p>
        <button onclick="window.location.href='logout.php'">Logout</button>
</div>

</body>
</html>