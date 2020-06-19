<?php
include '../database/mysql.php';
include '../admin/Authenticate.php';

isActive();

if(isset($_POST['CreatePage'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $text = mysqli_real_escape_string($con, $_POST['text']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $url = mysqli_real_escape_string($con, $_POST['url']);

    $sql_q = "INSERT INTO `portofolio`(`title`,`url`,`techniek`,`datum`,`description`,`commentaar`,`author`)VALUES(\"" . $title . "\",\"" . $url . "\",\"\",\"" . $date. "\",\"" . $text . "\",\"\",\"" . $_SESSION['name'] . "\");";

    $result = mysqli_query($con, $sql_q);

    $last_id = $con->insert_id;

    include 'UploadImage.php';
     image($last_id);



    header("location: ../../project.php?project=".$last_id);

}

if(isset($_POST['UpdatePage'])) {
    $id = $_POST['id'];
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $text = mysqli_real_escape_string($con, $_POST['text']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $url = mysqli_real_escape_string($con, $_POST['url']);

    $sqlq = "UPDATE `portofolio` SET `title` = \"$title\" , `description` = \"$text\" , `datum` = \"$date\" , `url` = \"$url\" WHERE `id` = $id";
     mysqli_query($con, $sqlq);

    header("location: ../../project.php?project=".$_POST['id']);

}