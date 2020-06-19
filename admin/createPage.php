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

<div class="CreatePage">
    <h2>Create a page</h2>

    <form method="post" action="../include/admin/PageDatabase.php" enctype="multipart/form-data">
        <label for="title">
            <h3>Title:</h3>
        </label>
        <input type="text" name="title" placeholder="title" id="title" required minlength="5">

        <label for="text">
            <h3>Text :</h3>
        </label>
        <textarea name="text" placeholder="text" id="text" required minlength="20"></textarea>

        <label for="url">
            <h3>Url :</h3>
        </label>
        <input type="url" name="url" placeholder="www.google.nl" id="url" required minlength="7">


        <label for="date">
            <h3>Date :</h3>
        </label>
        <input type="date" name="date" placeholder="date" id="date" required>

        <br>
        <input type="file" name="fileToUpload" id="fileToUpload" size="1M"  accept="image/*">
        <br>
        <input type="submit" value="CreatePage" name="CreatePage" id="CreatePage">
    </form>
</div>

<?php include_once "include/html/Footer.html" ?>

</body>
</html>



