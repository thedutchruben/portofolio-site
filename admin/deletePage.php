<?php
include '../include/database/mysql.php';
include '../include/admin/Authenticate.php';
isActive();

if(empty($_GET['project'])){
    header('Location: ../index.php');
}else{
    $page = $_GET['project'];
    $sql_query = "DELETE FROM portofolio WHERE id = ".$page.";";
    $result = mysqli_query($con, $sql_query);

    header('Location: ../admin/home.php');
}