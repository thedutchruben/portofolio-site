<?php
include_once '../include/admin/Authenticate.php';
isActive();

$id = $_GET['project'];
if($id == null||$id == ""){
    ob_start();
    header('Location: index.php');
    ob_end_flush();
    die();
}
include "../include/database/loadProject.php";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
</head>
<body>
<?php include"include/admin/AdminHeader.html";
?>

<div class="UpdatePage">
    <h2>Update page</h2>

    <form method="post" action="../include/admin/PageDatabase.php" enctype="multipart/form-data">
        <label for="id">
            <h3>Id:</h3>
        </label>
        <input type="number" value="<?php echo $project->getId()?>" name="id" placeholder="id" id="id" >

        <label for="title">
            <h3>Title:</h3>
        </label>
        <input type="text" value="<?php echo $project->getTitle()?>" name="title" placeholder="title" id="title" minlength="5">

        <label for="text">
            <h3>Text :</h3>
        </label>
        <textarea name="text"  placeholder="text" id="text"  minlength="20"><?php echo $project->getDescription()?></textarea>

        <label for="url">
            <h3>Url :</h3>
        </label>
        <input type="url" name="url" value="<?php echo $project->getUrl()?>" placeholder="www.google.nl" id="url" minlength="7">


        <label for="date">
            <h3>Date :</h3>
        </label>
        <input type="date" name="date" value="<?php echo $project->getDatum()?>" placeholder="date" id="date">

        <br>
        <input type="file" name="fileToUpload" id="fileToUpload" size="1M"  accept="image/*">
        <br>
        <input type="submit" value="UpdatePage" name="UpdatePage" id="UpdatePage">
    </form>
</div>

<?php include_once "include/html/Footer.html" ?>

</body>
</html>



