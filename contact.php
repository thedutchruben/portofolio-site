<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">

    <title>Ruben de Roos</title>
</head>
<body>
<?php include_once "include/html/Header.html" ?>
<?php
$id = $_GET['id'];
if($id == null||$id == ""){
}else{
    echo "<div>
    <p>Je contact formulier is ingevult met het id $id!</p>
    </div>
";
}
?>
<center>

    <form method="post" action="include/database/contact.php">
        <label for="title">
            <h3>Title:</h3>
        </label>
        <input type="text" name="title" placeholder="title" id="title" required minlength="5" maxlength="40">
        <label for="email">
            <h3>Email:</h3>
        </label>
        <input type="email" name="email" placeholder="email" id="email" required minlength="5" maxlength="40">
        <label for="text">
            <h3>Bericht:</h3>
        </label>
        <textarea name="text" placeholder="text" id="text" required minlength="20"></textarea>
        </br>
        <input type="submit" value="Submit" name="Submit" id="Submit">
    </form>

</center>
<?php include_once "include/html/Footer.html" ?>

</body>
</html>