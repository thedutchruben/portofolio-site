<?php
include_once '../include/admin/Authenticate.php';
isActive();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
</head>
<body>
<?php include_once "../include/admin/AdminHeader.html"?>


<div class="CreateUser">
    <h2>Create a user</h2>

    <form method="post" action="../include/admin/UserCreate.php" enctype="multipart/form-data">
        <label for="username">
            <h3>username:</h3>
        </label>
        <input type="text" name="username" placeholder="username" id="username" required minlength="5">
        <br>
        <label for="email">
            <h3>email:</h3>
        </label>
        <input type="text" name="email" placeholder="email" id="email" required minlength="5">
        <br>
        <label for="password">
            <h3>password :</h3>
        </label>
        <input type="password" name="password" placeholder="password" id="password" required minlength="8"/>
        <br>
        <input type="submit" value="CreateUser" name="CreateUser" id="CreateUser">
    </form>
</div>

<?php include_once "include/html/Footer.html" ?>

</body>
</html>