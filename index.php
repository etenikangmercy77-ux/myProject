<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M and M Stores</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    
    <div class="container">
        <div class="form-box active" id="Login">
            <form action="login_register.php" method="POST">
                <h2>Login</h2>
                <input type="email" name="email" id="" placeholder="Email please" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <p>Don't have an account? <a href="#" onclick="showForm('Register-form')">Register</a></p>
            </form>
         </div>





         <!-- Register section-->
         <div class="form-box" id="Register-form">
            <form action="login_register.php"  method="POST">
                <h2>Register</h2>
                <input type="text" name="fullname" placeholder="Full Name">
                <select name="role" id="">
                    <option value="">--- select a role ---</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <input type="email" name="email"  id="" placeholder="email please" required>
                <input type="Password" name="password" placeholder="password" required>
                <button type="submit" name="register">Register</button>
                <p>Already have an account? <a href="#" onclick="showForm('Login')">Login</a></p>
            </form>
         </div>
    </div>
    



          














    <script src="asset/js/script.js"></script>
</body>
</html>

