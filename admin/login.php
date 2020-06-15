<?php
include_once '../include/admin/Authenticate.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
    <title>Ruben de Roos</title>
    <link rel="stylesheet" href="../css/login.css" type="text/css">
</head>
<body>

<div class="login">
    <h1>Login</h1>
    <form method="post" action="../include/admin/Login.php">
        <label for="username">
            <img  width="30" height="40" src="../images/user.png">
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
            <img width="50" height="50" src="../images/slotje.png">
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" value="Login" name="Login" id="Login">
    </form>
</div>

<?php include_once "../include/html/Footer.html" ?>

</body>
</html>
