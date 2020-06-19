<?php
$id = $_GET['project'];
if($id == null||$id == ""){
    ob_start();
    header('Location: index.php');
    ob_end_flush();
    die();
}
include "include/database/loadProject.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">

    <title> <?php echo $project->getTitle(); ?></title>
    <link rel="stylesheet" href="css/project.css" type="text/css">

</head>
<body>
<?php include_once "include/html/Header.html" ?>
<div id="project-title">
    <h2 id="project-title-text"> <?php echo $project->getTitle(); ?></h2>
</div>

<div id="project-text">
    <p id="project-text-text"><?php echo $project->getDescription(); ?></p>
</div>

<div id="project-images">

    <?php

    $sql_query2 = "SELECT * FROM `images` WHERE `portofolioId`='" . $id . "'";
    $result2 = mysqli_query($con, $sql_query2);
    while($row2 = mysqli_fetch_array($result2)){
        echo "<div class=\"slides fade\">";
        echo "<img class=\"slide\" src=\"" . "upload/" . $row2['imageName'] . "\" style=\"width:400px\";\"height:250px\";>";
        echo "</div>";
    }
    $con->close();
    ?>
</div>

<div id="project-date">
    <p id="project-date-text">Date : <?php echo $project->getDatum(); ?></p>
</div>

<div id="project-technieken">
    <p id="project-technieken-text">Technieken : <?php echo $project->getTechniek(); ?></p>
</div>

<div id="project-author">
    <p id="project-author-text">Author : <?php echo $project->getAuthor(); ?></p>
</div>

<?php include_once "include/html/Footer.html" ?>

</body>
</html>
