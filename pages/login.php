<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>
<html>
<head>
     <meta charset="UTF-8">
     <title>Moda Login</title>
     <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <h1>LOGIN</h1>
    <div class="container">
        <label for="uname"></label>
        <input type="text" placeholder="Email" name="uname" required>
        <label for="psw"></label>
        <input type="password" placeholder="Password" name="psw" required>
        <button type="submit">LOGIN</button>
        <ul>
        <li><a href="#">Forgot Password/</a></li>
        <li><a href="#">Create Account</a></li>
        </ul>

    </div>
</html>

